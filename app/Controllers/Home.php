<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $db;
    protected $datatable;

    public function __construct()
    {
        // parent::__construct();
        $this->db = \Config\Database::connect();
        $this->datatable = $this->db->table('user');
    }

    public function index(): string
    {
        return view('template/header.php') . view('index.php') . view('template/footer.php');
    }

    public function add()
    {
        return view('addpage');
    }

    public function addData()
    {
        try {
            $data = [
                // 'name' => $this->request->getVar('name'), // Replace 'column1' with your actual column names
                // 'mobile_number' => $this->request->getVar('mobile_number'),
                // 'email' => $this->request->getVar('email'),
                // Add more columns as needed
            ];

            // Name
            $data['name'] = $this->request->getVar('name');

            // User Id
            $count = $this->datatable->countAllResults();
            $code = str_pad(++$count, 3, '0', STR_PAD_LEFT);
            $user_id = "user-" . $code;
            $data['user_id'] = $user_id;

            // Amount
            $data['amount'] = $this->request->getVar('amount');

            // Balance
            $refer_id = $this->request->getVar('refer');
            if($refer_id == '-'){
                $data['balance'] = $data['amount'];
                $data['calculation'] = "$data[name] = $data[amount] + 10%(0) + 10%(0)";
            }else{
                $balance = $data['amount'];
                $p1 = $this->datatable->getwhere(['id' => $refer_id])->getRow();
                $p1_balance = $p1->balance;
                $balance += (int)$p1_balance / 10;
                if($p1->refer_id != '-'){
                    $p2 = $this->datatable->getwhere(['user_id' => $p1->refer_id])->getRow();
                    $p2_balance = $p2->balance;
                    $balance += (int)$p2_balance / 10;
                    $data['calculation'] = "$data[name] = $data[amount] + 10%($p1_balance) + 10%($p2_balance)";
                }else{
                    $data['calculation'] = "$data[name] = $data[amount] + 10%($p1_balance) + 10%(0)";
                }
                $data['balance'] = $balance;
            }

            // Calculation
            


            // Refer Id
            if($refer_id != '-'){
                $data['refer_id'] = $this->datatable->getwhere(['id' => $refer_id])->getRow()->user_id;
            }else{
                $data['refer_id'] = $refer_id;
            }
            

            // die;

            $inserted = $this->datatable->insert($data);

            if ($inserted) {
                $result = 1;
            } else {
                $result = 0;
            }
        } catch (\Exception $e) {
            $result = ['status' => 'error', 'message' => $e->getMessage()];
        }

        echo json_encode($result);
    }

    public function getData()
    {
        $data = $this->datatable->get()->getResult();
        $tr = "";
        $i = 1;
        foreach ($data as $row) {
            $tr .= '<tr>
            <td>' . $i . '</td>
            <td>' . $row->user_id . '</td>
            <td>' . $row->name . '</td>
            <td>' . $row->amount . '</td>
            <td>' . $row->balance . '</td>
            <td>' . $row->calculation . '</td>
            <td>' . $row->refer_id . '</td>
            
        </tr>';

            # code...
            $i++;
        }
        return json_encode($tr);
        // <td>
        //     <button class="editpenbtn" type="button" onclick="showModal(\''.base_url().'edit/'.$row->id.'\', \'Edit Table\')">
        //         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        //     </button>
        //     <button class="editpenbtn" type="button" onclick="deletedata('.$row->id.')"> 
        //         <i class="fa fa-trash" aria-hidden="true"></i>
        //     </button>
        //     </td>
    }

    public function edit($id)
    {
        $data['edit'] = $this->datatable->getwhere(['id' => $id])->getRow();
        echo view("editpage", $data);
    }

    public function update($id)
    {
        $editinput = $this->request->getVar();
        $result = $this->datatable->where('id', $id)->update($editinput);
        echo json_encode($result);
    }

    public function delete($id)
    {
        $result = $this->datatable->where('id', $id)->delete();
        echo json_encode($result);
    }
}
