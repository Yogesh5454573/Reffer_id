<form id="addform">
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo"><span class="aster">* </span>Name</label>
                <input type="text" class="form-control purchaseselects" name="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Amount</label>
                <input type="text" class="form-control purchaseselects" name="amount">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Refer ID</label>
                <select name="refer" id="refer" class='form-control task'>
                        <option value='-'>---</option>
                        <?php
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $db_name = "data_table";
                    
                        $con = mysqli_connect($server, $username, $password, $db_name);
                    
                        if(!$con){
                            die(mysqli_connect_error());
                        }
                        $sql1 = "SELECT * FROM `user`";
                        $data1 = $con->query($sql1);
                        while ($row = mysqli_fetch_array($data1)) {

                            echo "
                                <option value='$row[id]'>$row[name]</option>
                            ";
                        }

                        ?>
                </select>
                <!-- <input type="text" class="form-control purchaseselects" name="amount"> -->
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Mobile Number</label>
                <input type="number" class="form-control purchaseselects" name="mobile_number">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo">Email</label>
                <input type="text" class="form-control purchaseselects" name="email">
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-md-12 blkftr">
            <div class="modal-footer taskfooter">
                <button type="submit" class="tasksave1">
                    SAVE
                </button>
            </div>
        </div>
    </div>
</form>
<script>
    $('#addform').formValidation({
        framework: 'bootstrap',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Enter name'
                    },
                },
            },
        },
    })
        .on('success.form.fv', function (e) {
            // Prevent form submission
            e.preventDefault();
            var form = document.querySelector('#addform');
            var dataForm = new FormData(form);
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>addData',
                data: dataForm,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (result) {
                    if (result == 1) {
                        $('#modal_md').modal('hide');
                        alert('Saved successfully');
                        getData();
                    } else {
                        alert('Already exist');
                    }
                }
            });
        });
</script>