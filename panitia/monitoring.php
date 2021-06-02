<?php
$PageTitle = "Monitoring Peserta";
$PageFile = "monitoring";

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
                                                    <th>Nama Peserta</th>
                                                    <th>Nama Kelompok</th>
                                                    <th>Status</th>
                                                    <th>Diskualifikasi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <!-- <tbody>
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
                                            </tbody> -->
                                            <tfoot>
                                                <tr>
                                                    <th>Nama Peserta</th>
                                                    <th>Nama Kelompok</th>
                                                    <th>Status</th>
                                                    <th>Diskualifikasi</th>
                                                    <th>Action</th>
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

    <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
    <script src="../api-routing.js"></script>
    <script>
        const socket = io(`http://localhost:3000`);
        // const API_PESERTA = `http://localhost:3000/api/peserta`;
        // const API_KEY = `d033e22ae348aeb5660fc2140aec35850c4da997`

        createDataTable = () => {
            // membuat data tabel peserta
            let tablePeserta = $('#monitoring-peserta').DataTable({
                responsive: true,
                dom: 'Blfrtip',
                serverSide: true,
                destroy: true,
                ajax: {
                    url: "http-request/datatable.data-peserta.php",
                    dataType: "JSON"
                },
                columnDefs: [{
                        "render": (data, type, row) => {
                            let status = "";

                            if (row[2]) {
                                status = `<div id="status-${row[4]}">Digunakan</div>`;
                            } else {
                                status = `<div id="status-${row[4]}">Tidak Digunakan</div>`;
                            }
                            return status;
                        },
                        "targets": 2
                    },
                    {
                        "render": (data, type, row) => {

                            let dis = ""

                            if (row[3]) {
                                dis = `<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" checked token="${row[4]}" name="toggle" id="toggle-${row[4]}" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer">
                                    <label for="toggle-${row[4]}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>`;
                            } else {
                                dis = `<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" token="${row[4]}" name="toggle" id="switch-banned-${row[4]}" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer">
                                    <label for="switch-banned-${row[4]}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>`;
                            }

                            return dis;
                        },
                        "targets": 3
                    },
                    {
                        "render": (data, type, row) => {
                            return `<button token="${row[4]}" class="bg-yellow-500 text-white active:bg-amber-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                    <i class="fas fa-sync mr-2"></i>Reset Token
                                    </button>`;
                        },
                        "targets": 4
                    }
                ],
                buttons: [
                    'copy', 'excel', 'pdf'
                ],
            })
        }

        /**
         * memanajemen data token apakah akan di
         * banned atau di reset
         *
         * @param  string  type  banned | reset
         * @param  string  token
         */
        tokenManager = (type, token) => {
            return new Promise(res => {
                let url = "";

                if (type == `banned`) {
                    url = `${API_PESERTA}/token/banned/${token}`;
                } else if (type == `reset`) {
                    url = `${API_PESERTA}/token/reset/${token}`;
                }

                fetch(url, {
                        method: "put",
                        mode: `cors`,
                        headers: {
                            "Authorization": API_KEY
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        res(true);
                    })
            })
        }

        /**
         * menangani event saat checkbox diskualifikasi
         * di klik
         */
        handleDiskualifikasi = () => {
            $("#monitoring-peserta tbody").on(`change`, `tr td :checkbox`, function(e) {
                if (this.checked) {
                    const disMsg = confirm(`Diskualifikasi token ini ?`);

                    if (disMsg) {
                        tokenManager(`banned`, $(this).attr(`token`))
                            .then(res => {
                                socket.emit(`banned-peserta`, $(this).attr(`token`));
                            })
                    } else {
                        this.checked = false;
                    }
                } else {
                    const disMsg = confirm(`Reset token ini ?`);

                    if (disMsg) {
                        this.checked = false;
                    } else {
                        this.checked = true;
                    }
                }
            })
        }

        handleResetToken = () => {
            $("#monitoring-peserta tbody").on(`click`, `tr td button`, function(e) {
                let resMsg = confirm(`Reset token ini ?`);

                if (resMsg) {
                    tokenManager(`reset`, $(this).attr(`token`))
                        .then(res => {
                            $(`#status-${$(this).attr( `token` )}`).html(`Tidak digunakan`);
                            $(`#switch-banned-${$(this).attr( `token` )}`).prop(`checked`, false);
                        })
                }
            })
        }

        $(document).ready(function() {
            socket.on(`connect`, () => {
                createDataTable()
                handleDiskualifikasi();
                handleResetToken();
            })

            socket.on(`has-new-token`, token => {
                $(`#status-${token}`).html("Digunakan")
            })
        })
    </script>
</body>

</html>