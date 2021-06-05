<?php
$PageTitle = "Data Tim";
$PageFile = "dtim";

include_once('templates/header.php');
?>

<body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <?php include_once('templates/sidebar.php'); ?>
        <div class="relative md:ml-64 bg-blueGray-50">
            <?php include_once('templates/navbar.php'); ?>
            <?php include_once('templates/header-info.php'); ?>

            <!-- Content -->
            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                <div class="flex flex-wrap">
                    <div class="w-full mb-12 xl:mb-0 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full max-w-full flex-grow flex-1">
                                        <h6 class="uppercase mb-1 text-xs font-semibold">
                                            Fitur Peserta
                                        </h6>
                                        <h2 class="text-xl font-semibold">
                                            Data Tim
                                        </h2>

                                        <!-- DataTables For Data Tim -->
                                        <table id="data-tim">
                                            <thead>
                                                <tr>
                                                    <th data-priority="2">Nama Tim</th>
                                                    <th data-priority="3">Action</th>
                                                </tr>
                                            </thead>
                                            <!-- <tbody>
                                                <tr>
                                                    <td>TIM001</td>
                                                    <td>Tim A</td>
                                                    <td>
                                                        <button class="bg-lightBlue-500 text-white active:bg-lightBlue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" @click="isDialogOpen = true">
                                                            Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>TIM002</td>
                                                    <td>Tim B</td>
                                                    <td>
                                                        <button class="bg-lightBlue-500 text-white active:bg-lightBlue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" @click="isDialogOpen = true">
                                                            Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody> -->
                                            <tfoot>
                                                <tr>
                                                    <th data-priority="2">Nama Tim</th>
                                                    <th data-priority="3">Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php include_once('templates/footer.php'); ?>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/datatables.min.js"></script>

    <script src="../api-routing.js"></script>

    <script>
        $(document).ready(function() {
            let table = $('#data-tim').DataTable({
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ],
                serverSide: true,
                ajax: {
                    url: "http-request/datatable.data-tim.php",
                    dataType: "JSON"
                },
                columnDefs: [
                    {
                        "render": ( data, type, row ) => {
                            return row[ 1 ] 
                        },
                        "targets": 0
                    },
                    {
                        "render": ( data, type, row ) => {
                            const element = `<button token="${row[ 0 ]}" class="button-edit bg-yellow-500 text-white active:bg-yellow-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" @click="isDialogOpen = true">
                                                Edit
                                            </button>
                                            <button token="${row[ 0 ]}"  class=" button-hapus bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                                Hapus
                                            </button>`;
                            return element;
                        },
                        targets: 1
                    }
                ]
            })

            /**
             * fungsi untuk menghapus item didalam table
             */
            $( document ).on( "click", `.button-hapus`, function( e ){
                var id = $(this).attr( `token` );
                var isDelete = confirm( `Yakin ingin menhapus data ini ?` );

                if( isDelete ) {
                    const parent = $( this ).closest( "tr" );
                    const formData = JSON.stringify( { id: id } );

                    $( this ).text( `Loading...` );

                    fetch( API_TIM, {
                        method: "delete",
                        mode: "cors",
                        headers: {
                            "Authorization": API_KEY,
                            "Content-Type": "application/json"
                        },
                        body: formData
                    } )
                    .then( response => response.json() )
                    .then( result => {
                        parent.remove();
                        table.ajax.reload();

                        alert( result.msg );
                    } )
                }
            } )
        });
    </script>
</body>

</html>