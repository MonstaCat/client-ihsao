<?php
include('../config.php');

$PageTitle = "Hasil Peserta";
$PageFile = "hasil";

include_once('templates/header.php');
?>

<body class="text-blueGray-700 antialiased bg-blueGray-50">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <?php include_once('templates/sidebar.php'); ?>
        <div class="relative md:ml-64">

            <!-- Content -->
            <div class="px-4 md:px-10 mx-auto w-full mt-16">
                <div class="flex flex-wrap">
                    <!-- Content Header -->
                    <h2 class="text-2xl font-semibold mb-6">
                        Hasil Peserta
                    </h2>
                    <div class="w-full mb-12 xl:mb-0">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded shadow-lg bg-white">
                            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full max-w-full flex-grow flex-1">

                                        <!-- Content Body -->
                                        <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                            <div class="flex flex-wrap items-center">
                                                <div class="relative w-full max-w-full flex-grow flex-1">
                                                    <h6 class="uppercase mb-1 text-xs font-semibold">
                                                        Hasil Score Peserta
                                                    </h6>
                                                    <h2 class="text-xl font-semibold">
                                                        Data Score Tim Labor A
                                                    </h2>

                                                    <!-- DataTables For Data Score Peserta -->
                                                    <table id="data-score-peserta">
                                                        <thead>
                                                            <tr>
                                                                <th data-priority="1">Nama Peserta</th>
                                                                <th data-priority="2">Nama Tim</th>
                                                                <th data-priority="3">Hasil Score</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Andika Rizki Pradana</td>
                                                                <td>Tim Labor A</td>
                                                                <td><b>80</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Raga Mulia Kusuma</td>
                                                                <td>Tim Labor A</td>
                                                                <td><b>80</b></td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th data-priority="1">Nama Peserta</th>
                                                                <th data-priority="2">Nama Tim</th>
                                                                <th data-priority="3">Hasil Score</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of content body -->
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

    <script>
        $(document).ready(function() {
            let table = $('#data-score-peserta').DataTable({
                responsive: true,
            }).columns.adjust().responsive.recalc();
        });
    </script>

</body>

</html>