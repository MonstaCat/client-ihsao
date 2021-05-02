<?php
$PageTitle = "Monitoring Peserta";

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
                                            Fitur Pengawas
                                        </h6>
                                        <h2 class="text-xl font-semibold">
                                            Monitoring Peserta
                                        </h2>

                                        <!-- DataTables For Monitoring Peserta -->
                                        <table id="monitoring-peserta">
                                            <thead>
                                                <tr>
                                                    <th data-priority="1">Nama Peserta</th>
                                                    <th data-priority="2">Nama Kelompok</th>
                                                    <th data-priority="3">Status</th>
                                                    <th data-priority="4">Diskualifikasi</th>
                                                    <th data-priority="5">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>A</td>
                                                    <td>Token Digunakan</td>
                                                    <td>
                                                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                                            <input type="checkbox" name="toggle" id="toggle-1" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" value="toggle-1">
                                                            <label for="toggle-1" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="bg-yellow-500 text-white active:bg-amber-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                                            <i class="fas fa-sync mr-2"></i>Reset Token
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>A</td>
                                                    <td>Token Belum Digunakan</td>
                                                    <td>
                                                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                                            <input type="checkbox" name="toggle" id="toggle-2" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" value="toggle-2">
                                                            <label for="toggle-2" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="bg-yellow-500 text-white active:bg-amber-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                                            <i class="fas fa-sync mr-2"></i>Reset Token
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th data-priority="1">Nama Peserta</th>
                                                    <th data-priority="2">Nama Kelompok</th>
                                                    <th data-priority="3">Status</th>
                                                    <th data-priority="4">Diskualifikasi</th>
                                                    <th data-priority="5">Action</th>
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/datatables.min.js">
    </script>
    <script>
        $(document).ready(function() {
            let table = $('#monitoring-peserta').DataTable({
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            }).columns.adjust().responsive.recalc();
        });

        $(':checkbox').change(function() {
            console.log($(this).val()) // hasil:  ini checkbox 1
        });
    </script>
</body>

</html>