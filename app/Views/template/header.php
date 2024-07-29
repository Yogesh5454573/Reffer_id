<!DOCTYPE html>
<html lang="en">

<?php //$this->db = \Config\Database::connect();
// $this->com_id = session('login')['com_id'];
// $this->id = session('login')['id']; 
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    LW | DASHBOARD </title>

  <!-- favicon -->
  <link rel="icon" type="image/png" href="https://Login.loyalwings.com/uploads/company_logo/favicon.png">

  <!-- Side bar -->
  <link href="https://Login.loyalwings.com/assets/css/sidebar.css" rel="stylesheet">

  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--jquery-->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/jquery-3.3.1.js"></script>

  <!--moment js-->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/moment.js"></script>

  <!--Bootstrap 5 CSS--->
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/Bootstrap5/css/bootstrap.min.css">

  <!--Bootstrap Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

  <!--Bootstrap 5 JS--->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/Bootstrap5/js/bootstrap.bundle.min.js"></script>

  <!--datatables CSS--->
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/datatables/css/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/datatables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/datatables/css/buttons.dataTables.min.css">

  <!-- drag -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
  <script src="https://kit.fontawesome.com/de952d599f.js" crossorigin="anonymous"></script>

  <!--Datatables js-->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/dataTables.responsive.min.js"></script>

  <!--Datatable dropdown----->
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/datatables.pdfmake.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/datatables.vfs_fonts.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/datatables.jszip.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://Login.loyalwings.com/assets/js/buttons.print.min.js"></script>

  <!--Dropdown select-->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/Bootstrap5/css/bootstrap-select.min.css">
  <script src="https://Login.loyalwings.com/assets/Bootstrap5/js/bootstrap-select.min.js"></script>

  <!-- Toastr -->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/toastr.min.css">
  <script src="https://Login.loyalwings.com/assets/js/toastr.min.js"></script>

  <!--form validation files-->
  <script src="https://Login.loyalwings.com/assets/js/formValidation.min.js"></script>
  <script src="https://Login.loyalwings.com/assets/js/bootstrap_validation.min.js"></script>

  <!--Dropdown select-->

  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/Bootstrap5/css/select2.min.css">
  <script src="https://Login.loyalwings.com/assets/Bootstrap5/js/select2.min.js"></script>

  <!--summernote-->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

  <!-- datepicker -->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/datepicker/bootstrap-datepicker.standalone.min.css">
  <script src="https://Login.loyalwings.com/assets/datepicker/bootstrap-datepicker.min.js"></script>

  <!-- jquery confirm -->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/jquery-confirm/jquery-confirm.min.css">
  <script src="https://Login.loyalwings.com/assets/jquery-confirm/jquery-confirm.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
  <!--<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>-->
  <!--<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />-->

  <!--main style css-->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/style.css">

  <!-- this is for journal entry  -->
  <script src="https://bossanova.uk/jspreadsheet/v4/jexcel.js"></script>
  <script src="https://jsuites.net/v4/jsuites.js"></script>
  <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
  <link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v4/jexcel.css" type="text/css" />
  <!-- this is for journal entry  -->

  <!-- ctrl+v dropzone -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" type="text/javascript"></script>

  <!--date range picker-->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/daterangepicker.css">
  <script src="https://Login.loyalwings.com/assets/js/daterangepicker.min.js"></script>

  <!-- new file upload -->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/file_upload/file_upload_style.css">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet" />

  <!-- Include Date Range Picker -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <!--Sidebar-->
  <script src="https://Login.loyalwings.com/assets/js/nav_notification.js"></script>
  <script src="https://Login.loyalwings.com/assets/js/nav_script.js"></script>
  <!--image navbar-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css" />


  <!--tab/accordion-->
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/activity.css">
  <link rel="stylesheet" href="https://Login.loyalwings.com/assets/css/tab.css">

  <!-- CRM -->
  <link href="https://Login.loyalwings.com/assets/css/CRM.css" rel="stylesheet">
  <!-- Include ApexCharts library -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <!--payroll-->
  <!--<link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/employee.css">-->
  <!--<link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/advance.css">-->
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/deduction.css">
  <link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/newpayroll.css">

  <!--<link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/payrun.css">-->
  <!--<link rel="stylesheet" type="text/css" href="https://Login.loyalwings.com/assets/css/payroll/setting.css">-->



  <!-- barchart script cdn -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <style>
    .help-block {
      margin-left: 10px;
      color: red;
    }

    .acctb {
      margin-bottom: -20px !important;
    }
  </style>

</head>