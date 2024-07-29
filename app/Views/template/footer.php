<script>
    // // Get the element with the class "fa-align-left"
    // var navButton = document.querySelector('.fa-align-left');
    // // Get the sidebar element
    // var sidebar = document.querySelector('.sidebar');
    // // Get the main content element
    // var mainContent = document.querySelector('.main-content');

    // // Add a click event listener to the nav button
    // navButton.addEventListener('click', function() {
    //     // Toggle the "active" class on the sidebar and main content
    //     sidebar.classList.toggle('active');
    //     mainContent.classList.toggle('active');
    // });
</script>
<script>


   
    function getResponse(){
        var table = $('.example').DataTable({

rowReorder: {
    selector: 'td:nth-child(2)'
},
language: {
    lengthMenu: '_MENU_',
    search: '',
    searchPlaceholder: " Search for order ID, customer, order status or something..."
},
responsive: true,
dom: 'Blfrtip',

buttons: [{

    },

    {
        text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
    },
    {
        text: '<button type="button" style="font-size:0.9rem; font-weight:400; border:none;padding:0;background-color: inherit;"><i class="fas fa-cog text-muted"></i> MANIPULATION</button>',
    },
    {
        text: '<i class="fa-solid fa-arrow-right-from-bracket"></i> EXPORT',
        extend: 'collection',
        buttons: [
            // '<span class="fexport"><i class="fa-regular fa-file-excel icn me-2"></i> EXCEL</span>', '<span class="fexport"><i class="fa-regular fa-file-lines icn me-2"></i> CSV</span>', '<span class="fexport"><i class="fa-regular fa-file-pdf icn me-2"></i> PDF</span>', '<span class="fexport"><i class="fa-solid fa-print me-2 icn"></i> PRINT</span>'
            {},
            {
                text: '<i class="fa-regular fa-file-excel icn me-2 excel-icon"></i> Excel',
                extend: 'excel',

            },
            {
                text: '<i class="fa-regular fa-file-lines icn me-2 csv-icon"></i> CSV',
                extend: 'csv',
            },
            {
                text: '<i class="fa-regular fa-file-pdf icn me-2 pdf-icon"></i> PDF',
                extend: 'pdf'
            },
            {
                text: '<i class="fa-solid fa-print me-2 icn print-icon"></i> PRINT',
                extend: 'print'
            },
        ],
        className: 'px-3'

    }

],


});

       }

    function getData(){
        var tabl=$('#example').DataTable();
        tabl.destroy();
        $.ajax({
            type:'POST',
            url:'<?= base_url()?>getData',
            dataType:'json',
            success:function(result){
                $('#appenddata').html(result);
                getResponse();
            }
        })
       }
       
function deletedata(id){
$.ajax({
    type:'POST',
    url:'<?= base_url() ?>delete/'+id,
    dataType:'json',
    success:function(result){
        alert("deleted data");
        getData();
    }
})

}




 getData();
</script>
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

</html>