<?php
include('../../config.php');

$PageTitle = "Data Jawaban Soal Kasus";
$PageFile = "jawabankasus";

include_once('../templates/header.php');
?>

<body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <?php include_once('../templates/sidebar.php'); ?>
        <div class="relative md:ml-64 bg-blueGray-50">
            <?php include_once('../templates/navbar.php'); ?>
            <?php include_once('../templates/header-info.php'); ?>

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
                                            Data Jawaban Soal Kasus Peserta
                                        </h2>

                                        <!-- DataTables For Data Soal Kasus -->
                                        <table id="data-jawaban-kasus">
                                            <thead>
                                                <tr>
                                                    <th data-priority="1">Nama Peserta</th>
                                                    <th data-priority="2">Nama Tim</th>
                                                    <th data-priority="3">Asal Sekolah</th>
                                                    <th data-priority="4">Dwonload Pdf Peserta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Andika Rizki Pradana</td>
                                                    <td>Tim Tam</td>
                                                    <td>SMKS Labor Pekanbaru</td>
                                                    <td><b><a class="text-pink-500" href="#">Download PDF</a></b></td>
                                                </tr>
                                                <tr>
                                                    <td>Raga Mulia Kusuma</td>
                                                    <td>Tim Tam</td>
                                                    <td>SMKS Labor Pekanbaru</td>
                                                    <td><b><a class="text-pink-500" href="#">Download PDF</a></b></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th data-priority="1">Nama Peserta</th>
                                                    <th data-priority="2">Nama Tim</th>
                                                    <th data-priority="3">Asal Sekolah</th>
                                                    <th data-priority="4">Dwonload Pdf Peserta</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php include_once('../templates/footer.php'); ?>
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
            let table = $('#data-jawaban-kasus').DataTable({
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            }).columns.adjust().responsive.recalc();
        });
    </script>
</body>

</html>