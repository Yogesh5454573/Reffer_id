<body>
    <div class="container-fluid">
        <div class="row">
            <div id="first_col" class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="button_su">
                                    <span class="su_button_circle">
                                    </span>
                                    <button type="button" class="hrbtns contractbtn addbttn" onclick="showModal('<?= base_url() ?>add','Add Order')"> <span class="button_text_container">
                                            <i class="fa fa-plus"></i> ADD
                                        </span></button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="demo-html mt-0">
                                    <table class="example display dataTable display responsive nowrap tblalign table borderless" style="width: 100%" id="example" aria-describedby="example_info">
                                        <thead class="theadrow">
                                            <!-- <tr>
                                                <th>S.No</th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Mobile Number
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Options
                                                </th>
                                            </tr> -->
                                            <tr>
                                                <th>S.No</th>
                                                <th>
                                                    User Id
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
                                                <th>
                                                    Balance
                                                </th>
                                                <th>
                                                    Calculation
                                                </th>
                                                <th>
                                                    Refer Id
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="appenddata">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sec_col" class="col-md-8" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 relative">
                                <div class="fixed-buttons-right">

                                    <button type="button" class="editpenbtn " data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit Expense" id="view_edit"><i class="fa fa-edit expicon "></i></button>
                                    <button id="view_print" type="button" class="editpenbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Print"><i class="bi bi-printer expicon "></i></button>
                                    <button id="view_pdf" type="button" class="editpenbtn" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Pdf"><i class="bi bi-file-earmark-pdf"></i></button>
                                    <button type="button" class="editpenbtn" id="view_copy" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Copy"><i class="fa fa-clone expicon "></i></i></button>
                                    <!-- <button type="button" class="closexbtn close-button" id="delete_view"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><i
                                    class="fa fa-times expicon"></i></button> -->
                                    <button type="button" class="editpenbtn  " id="delete_view" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete">
                                        <!-- <i class="fa fa-times expicon"></i> -->
                                        <img src="./delete.svg" alt="">
                                    </button>
                                    <button type="button" onclick="toggleViews(id)" class="editpenbtn " class="contractfilter edittglbtn5 edittglbtn6 viewbtnByToggle" data-bs-toggle="tooltip" data-bs-title="Toggle Table" data-bs-original-title="" title="" data-bs-trigger="hover">
                                        <i class="fa-solid fa-angle-left" style="font-size: 12px" aria-hidden="true"></i>
                                    </button>
                                    <span id="view_invoice"></span>
                                </div>

                                <table class="details-table table table-striped">
                                    <tbody>
                                        <tr class="project-overview greyback">
                                            <td class="viewjobft " width="20%"><b>Origin :</b></td>
                                            <td class="viewjobft "></td>
                                        </tr>
                                        <tr class="project-overview">
                                            <td class="viewjobft "><b>Colours :</b></td>
                                            <td class="viewjobft "></td>
                                        </tr>
                                        <tr class="project-overview">
                                            <td class="viewjobft "><b>Styles :</b></td>
                                            <td class="viewjobft ">Baju anak</td>
                                        </tr>
                                        <tr class="project-overview">
                                            <td class="viewjobft "><b>Sales price :</b></td>
                                            <td class="viewjobft ">900.00</td>
                                        </tr>
                                        <tr class="project-overview">
                                            <td class="viewjobft "><b>Default Profit Rate(%) :</b></td>
                                            <td class="viewjobft "></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_md" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header hdrbg">
                    <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
                    <!-- <h5 class="modal-title"></h5> -->
                    <h5 class="fnt_head">

                        <b class="modal-title"></b>
                        <div class="vertical-line">

                            <span class="Bcgtop capsule"></span>
                            <span class="Bcgbttm capsule"></span>
                        </div>
                    </h5>
                </div>
                <div class="modal-body mbdclr">
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <script>
        function showModal(url, title) {
            $('#modal_md').on('shown.bs.modal', function() {
                $('.selectpicker').selectpicker('refresh');
            });
            $('#modal_md').modal('show', {
                backdrop: 'true'
            });
            $.ajax({
                url: url,
                success: function(response) {
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>

    <script>
        function toggleViews(id) {
            var hidden_columns = [4, 5, 6, 7];
            var _visible = true;
            if ($("#first_col").hasClass("col-md-12")) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else {
                $("#first_col").removeClass("col-md-4").addClass("col-md-12");
                $("#sec_col").hide();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-right")
                    .addClass("fa fa-angle-double-left");
            }
            var _table = $("#example").DataTable();
            // Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        }
    </script>

</body>