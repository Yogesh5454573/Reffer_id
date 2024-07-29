<body id="wrapper" style="margin-top: 10px;">
    <div class="row">
        <div class="content2 productcontainer" id="first_col" style="display: block;margin-right: -10px !important;">
            <div class="container-fluid  ">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 addpadding">
                                <button type="button" class="approvedbtn finishedbtn addbttn"
                                    onclick="window.location.href = '<?= base_url() ?>/Payroll/payroll/run';"
                                    style="padding: 6px 12px;">RUN PAYROLL</button>
                            </div>
                            <div class="col-md-2 datepicker1" style="margin-top: 20px !important;">
                                <div class="purchasegrp">
                                    <input type="text" id="reportrange" name="dates"
                                        class="form-control purchaseselects statbtn">
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 20px !important;">
                                <div class="purchasegrp">
                                    <div class=" dropdown-with-icon dropdownalignment"
                                        style="border-radius:4px 0px 0px 4px;">
                                        <select class="selectpicker multiselect" data-name="name" multiple
                                            data-actions-box="true" data-live-search="true" title="Change...">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-html table-responsive">
                                        <table id="example" class="display dataTable display responsive "
                                            style="width: 100%; " aria-describedby="example_info">
                                            <thead class="theadrow hdrw">
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1" aria-sort="descending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="font-weight:normal ;">Payroll Run ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="font-weight:normal ;">Total Employees</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="font-weight:normal ;">Run Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="font-weight:normal ;">
                                                        Execute Date
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="font-weight:normal ;">
                                                        Executed
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="font-weight:normal ;">
                                                        Total Pay
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="font-weight:normal ;">
                                                        Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="append">
                                                <!--- <tr class="odd" onclick="showHideRow('hidden_row1');">
                                    <td><a href="#">Type_E0011</a>
                                    </td>
                                    <td></td>
                                    <td>EM1001</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                       <button type="button" id="stbutton"
                                          class=" status-button  dropdown-toggle dd-toggle"
                                          data-bs-toggle="dropdown">In
                                       Progress</button>
                                       <ul class="dropdown-menu dropshow">
                                          <li><a class="dropdown-item" href="#">Execute</a></li>
                                          <li><a class="dropdown-item" href="#">Pending</a></li>
                                          <li><a class="dropdown-item" href="#">Hold</a></li>
                                          <li><a class="dropdown-item" href="#">Rejected</a></li>
                                          <li><a class="dropdown-item" href="#">Completed</a></li>
                                       </ul>
                                    </td>
                                 </tr>-->
                                            </tbody>
                                            <tr class="fold row11" id="hidden_row1" class="hidden_row"
                                                style="display: none;">
                                                <td colspan="10">
                                                    <div class="fold-content">
                                                        <div id="parent1">
                                                            <table id="example2"
                                                                class="display dataTable display responsive table-responsive">
                                                                <thead class="thead-dark"
                                                                    style="background-color:#bed0ec40;">
                                                                    <tr>
                                                                        <th class="tbl2">Employee ID</th>
                                                                        <th class="tbl2">Paycode</th>
                                                                        <th class="tbl2">Earnings</th>
                                                                        <th class="tbl2">Basic Pay</th>
                                                                        <th class="tbl2">HRA</th>
                                                                        <th class="tbl2">Other Earnings</th>
                                                                        <th class="tbl2">ESI</th>
                                                                        <th class="tbl2">PF</th>
                                                                        <th class="tbl2">Other Deduction</th>
                                                                        <th class="tbl2">Total Earning Days</th>
                                                                        <th class="tbl2">Present</th>
                                                                        <th class="tbl2">Absent</th>
                                                                        <th class="tbl2">LOP</th>
                                                                        <th class="tbl2">Overtime(Days)</th>
                                                                        <th class="tbl2">Total</th>
                                                                        <th class="tbl2">To Pay</th>
                                                                        <th class="tbl2">PDF</th>
                                                                        <th class="tbl2">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="append2">
                                                                    <!--<tr class="">
                                                   <td class="  ">01</td>
                                                   <td class="">jamesleo</td>
                                                   <td>03-01-2024</td>
                                                   <td>290/100</td>
                                                   <td>80%</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td> </td>
                                                   <td>
                                                      <button type="button" id="stbutton"
                                                         class=" status-button  dropdown-toggle dd-toggle"
                                                         data-bs-toggle="dropdown">In
                                                      Progress</button>
                                                      <ul class="dropdown-menu dropshow">
                                                         <li><a class="dropdown-item"
                                                            href="#">Execute</a></li>
                                                         <li><a class="dropdown-item"
                                                            href="#">Pending</a></li>
                                                         <li><a class="dropdown-item"
                                                            href="#">Hold</a></li>
                                                         <li><a class="dropdown-item"
                                                            href="#">Rejected</a></li>
                                                         <li><a class="dropdown-item"
                                                            href="#">Completed</a></li>
                                                      </ul>
                                                   </td>
                                                </tr>-->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content2 productcontainer col-md-8 mt-2" id="sec_col"
            style="display: none;margin-top: -13px !important;">
            <div class="container-fluid  tblcontainer p-2">
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Modals       -->
    <!-- Ref Modal  -->
    <div id="modal_md" class="modal fade custom-content" role="dialog" style="padding-right:0">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header ">
                    <button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button>
                    <h5 id="myModalLabel" class="modal-title "></h5>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        var table = $('.example').DataTable({
            language: {
                lengthMenu: 'MENU'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>

    <script>
    function showMdModal(url, title) {
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
    $('#modal_md').on('shown.bs.modal', function() {
        $('.selectpicker').selectpicker('refresh');
    });
    </script>
    <!--upload-files-->

    <script>
    const dropZone = document.querySelector('#drop-zone');
    const inputElement = document.querySelector('#myfile');
    const img = document.querySelector('img');
    const p = document.querySelector('.dropfile');
    const fileNameElement = document.querySelector('.file-name');
    const deleteButton = document.querySelector('#deleteBtn');

    inputElement.addEventListener('change', function(e) {
        const file = this.files[0];
        if (file) {
            img.style.display = "block";
            p.style.display = 'none';
            fileNameElement.textContent = file.name;
            deleteButton.style.display = 'inline-block';

            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = function() {
                const src = this.result;
                img.src = src;
                img.alt = file.name;
            }
        }
    });

    dropZone.addEventListener('click', () => inputElement.click());
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        img.style.display = "block";
        const file = e.dataTransfer.files[0];
        // p.style.display = 'none';

        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function() {
            e.preventDefault();
            p.style.display = 'none';
            fileNameElement.textContent = file.name;
            deleteButton.style.display = 'inline-block';

            const src = this.result;
            img.src = src;
            img.alt = file.name;
        }
    });

    deleteButton.addEventListener('click', () => {
        img.src = '';
        img.style.display = 'none';
        p.style.display = 'block';
        fileNameElement.textContent = '';
        deleteButton.style.display = 'none';
        inputElement.value = '';
    });
    </script>
    <!--Multiselect-->
    <script>
    const dropdowns = document.querySelectorAll('.multiselect');

    dropdowns.forEach(dropdown => {
        const inputBox = document.createElement('input');
        inputBox.type = 'hidden';
        inputBox.classList.add('selected-values');
        name = dropdown.getAttribute('data-name');
        inputBox.setAttribute("name", name);
        dropdown.after(inputBox);

        dropdown.addEventListener('change', () => {
            const selectedOptions = Array.from(dropdown.selectedOptions).map(option => option.value);
            inputBox.value = selectedOptions.join(', ');
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Apex Chart -->
    <script>
    var options = {
        series: [{
            name: "Projection",
            data: [50000, 60000, 80000, 100000, 120000, 150000, 160000, 120000, 130000, 150000, 180000,
                190000
            ]
        }, {
            name: "Actual",
            colors: '#8ae707',
            data: [60000, 40000, 50000, 90000, 100000, 70000, 120000, 100000, 90000, 110000, 150000, 160000]
        }],
        chart: {
            type: 'bar',
            height: 390,
        },
        plotOptions: {
            bar: {
                vertical: true,
                dataLabels: {
                    position: 'top',
                },
            }
        },
        dataLabels: {
            enabled: false,
            offsetX: -6,
            style: {
                fontSize: '12px',
                colors: ['#fff']
            }
        },
        stroke: {
            show: true,
            width: 1,
            colors: ['#fff']
        },
        tooltip: {
            shared: true,
            intersect: false
        },
        title: {
            text: "PROJECTION VS ACTUAL",
            fontColor: "#695A42",
            fontSize: 14
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        yaxis: {
            min: 0,
            max: 200000,
            tickAmount: 5,
        },
        colors: ["#02A9F0", "#84c529"],
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    </script>
    <script>
    var _visible_1 = true;
    var _visible = true;

    $(document).ready(function() {

        $("#toggle_btn").click(function() {
            var hidden_columns = [3, 4, 5, 7];

            if (_visible) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");

                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else {
                $("#first_col").removeClass("col-md-4").addClass("col-md-12");
                _visible = true;
                $("#sec_col").hide();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-right")
                    .addClass("fa fa-angle-double-left");
            }
            var _table = $("#example").DataTable();
            //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });
        $("#v1").click(function() {

            var hidden_columns = [3, 4, 5, 7];

            if (_visible) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else {
                $("#first_col").removeClass("col-md-4").addClass("col-md-12");
                _visible = true;
                $("#sec_col").hide();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-right")
                    .addClass("fa fa-angle-double-left");
            }
            var _table = $("#example").DataTable();
            //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });
    });
    $("#v2").click(function() {

        var hidden_columns = [3, 4, 5, 7];

        if (_visible) {
            $("#first_col").removeClass("col-md-12").addClass("col-md-4");
            _visible = false;
            $("#sec_col").show();



            $("#toggle_btn")
                .find("i")
                .removeClass("fa fa-angle-double-left")
                .addClass("fa fa-angle-double-right");
        } else {
            $("#first_col").removeClass("col-md-4").addClass("col-md-12");
            _visible = true;
            $("#sec_col").hide();
            $("#toggle_btn")
                .find("i")
                .removeClass("fa fa-angle-double-right")
                .addClass("fa fa-angle-double-left");
        }
        var _table = $("#example").DataTable();
        //     Show hide hidden columns
        _table.columns(hidden_columns).visible(_visible, true);
        _table.columns.adjust();
    });

    // script for expand button
    $("#expandbtn").click(function() {

        if (_visible_1) {
            $("#sec_col").removeClass("col-md-8").addClass("col-md-12");
            _visible_1 = false;
            $("#first_col").hide();



        } else {
            $("#sec_col").removeClass("col-md-12").addClass("col-md-8");

            _visible_1 = true;
            $("#first_col").show();
        }
    });
    </script>

    <script>
    function openTab(evt, tabName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    var carousel = document.getElementById("carouselExampleIndicators");

    carousel.addEventListener("slid.bs.carousel", function(event) {
        var activeSlideIndex = event.to;
        if (activeSlideIndex === 0) {

            openTab(event, 'profile');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'proposals');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'deal');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'task');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'reimbur');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'target');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'payment');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'user');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'remainder');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'activity');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'file');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'expense');

        }

    });
    </script>
    <!-- Modals -->

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
    <!--Datatable-->
    <script>
    function getResponse() {
        var table = $('#example').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

            ]
        });
    }

    function checkAll() {
        checkbox = document.getElementById("all_check");
        if (checkbox.checked == true) {
            $('.single_check').prop("checked", true);
            $('.bulk_send').show(1000);
        } else {
            $('.single_check').prop("checked", false);
            $('.bulk_send').hide(1000);
        }
    }

    function singleCheck(id) {
        checkbox = document.getElementById("check_" + id);
        boxes = document.getElementsByClassName("single_check");
        if (checkbox.checked == true) {
            $('.bulk_send').show(1000);
        } else {
            count = 0;
            for (let i = 0; i < boxes.length; i++) {
                if (boxes[i].checked == true) {
                    count += 1;
                }
            }
            if (count == 0) {
                $('.bulk_send').hide(1000);
                $('#all_check').prop("checked", false);
            } else {
                $('.bulk_send').show();
            }
        }
    }
    </script>
    <script>
    new DataTable('.example', {
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        order: [
            [1, 'asc']
        ]
    });
    </script>
    <script>
    function toggleRowBackground(checkbox) {
        var row = checkbox.closest('tr');
        row.classList.toggle('selected', checkbox.checked);
    }
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example3').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example1').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>
    <script>
    function gett() {
        var table = $('#example2').DataTable({
                    language: {
                        lengthMenu: '_MENU_'
                    },
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true,
                    dom: 'Blfrtip',
                    /*buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });*/
                }
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example4').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example5').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example6').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example7').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example8').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example9').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var table = $('#example10').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });
    </script>

    <script>
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    });
    </script>
    <script>
    $(document).ready(function() {
        $(document).on("click", ".dropdown-item", function() {
            $(this).toggleClass("active");
        });
        $("ul#one>li:first-child").click(function() {
            $("ul#one>li:first-child ~ li a").removeClass("active");
        });
        $("ul#one>li:first-child ~ li").click(function() {
            $("ul#one>li:first-child a").removeClass("active");
        });
    });
    </script>
    <script>
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    });
    </script>

    <script type="text/javascript">
    function showHideRow(row) {
        $("#" + row).toggle();
    }
    </script>



    <!--  Select2 Plugin Js -->
    <script src="../../assets/vendor/select2/js/select2.min.js"></script>


    <!-- App js -->
    <script src="../../assets/js/app.min.js"></script>

    <script type="text/javascript">
    function payrollTable() {
        table = $('#example').DataTable();
        table.destroy();
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/Payroll/payroll/payrollTable',
            dataType: 'json',
            success: function(result) {
                $('#append').html(result.table);
                getResponse();
            }
        });
    }
    payrollTable();

    function tableappend() {
        table = $('#example2').DataTable();
        table.destroy();
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/Payroll/payroll/tableappend',
            dataType: 'json',
            success: function(result) {
                $('#append2').html(result.table);
                gett();

            }
        });
    }
    tableappend();
    </script>