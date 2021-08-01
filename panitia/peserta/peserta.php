<?php
include('../../config.php');

$PageTitle = "Input Data Peserta";
$PageFile = "peserta";

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
                <div class=" flex flex-wrap">
                    <div class="w-full mb-12 xl:mb-0 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full max-w-full flex-grow flex-1">
                                        <!-- Content Header -->
                                        <h6 class="uppercase mb-1 text-xs font-semibold">
                                            Input Data
                                        </h6>
                                        <h2 class="text-xl font-semibold mb-8">
                                            Input Data Peserta
                                        </h2>

                                        <!-- Content Body -->
                                        <form id="form-tambah-peserta">
                                            <div class="flex flex-col">
                                                <div class="md:flex">
                                                    <div class="md:w-1/2 mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
                                                            Email Peserta
                                                        </label>
                                                        <input type="email" placeholder="Email" id="email" name="email" autocomplete="off" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2">
                                                    </div>
                                                    <div class="md:w-1/2 mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password">
                                                            Password
                                                        </label>
                                                        <input type="text" placeholder="Password" id="password" name="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2">
                                                    </div>
                                                </div>
                                                <div class="md:flex">
                                                    <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nama">
                                                            Nama Peserta
                                                        </label>
                                                        <input type="text" placeholder="Nama Peserta" id="nama" name="nama" autocomplete="off" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2">
                                                    </div>
                                                </div>
                                                <div class="md:flex">
                                                    <div class="md:w-1/2 mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="sekolah">
                                                            Asal Sekolah
                                                        </label>
                                                        <select id="sekolah" name="sekolah" style="width: 100%;">
                                                            <option value="">Asal Sekolah</option>
                                                        </select>
                                                    </div>
                                                    <div class="md:w-1/2 mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="tim">
                                                            Nama Tim
                                                        </label>
                                                        <select id="tim" name="tim" style="width: 100%;">
                                                            <option value="">Nama Tim</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="float-right bg-lightBlue-500 text-white active:bg-lightBlue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                Submit Data Peserta
                                            </button>
                                        </form>
                                        <!-- End of content body -->
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

    <!-- Select 2 Js -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="../../api-routing.js"></script>
    <script>
        $(document).ready(function() {

            // var API_PESERTA = "http://localhost:3000/api/peserta";
            // var API_KEY = `d033e22ae348aeb5660fc2140aec35850c4da997`;
            var sekolahIsExist = false;

            $('#sekolah').select2({
                    ajax: {
                        url: `${BASE_URL}/panitia/http-request/select2.data-sekolah.php`,
                        delay: 250,
                        dataType: "json",
                        data: function(params) {
                            return {
                                q: params.term,
                                page: params.page || 1,
                                limit: 30
                            }
                        },
                        cache: true,

                        processResults: function(data, params) {
                            params.page = params.page || 1;

                            sekolahIsExist = Boolean(data.items.length)

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total_count
                                }
                            }
                        }
                    }
                })
                .on(`select2:select`, function(e) {
                    createTeam(e.params.data);
                })

            /**
             * membuat select option untuk data tim
             *
             * @param object data value sekolah
             */
            createTeam = (data) => {
                $('#tim').select2({

                    ajax: {
                        url: `${BASE_URL}/panitia/http-request/select2.data-tim.php`,
                        dataType: "json",
                        delay: 250,
                        cache: true,
                        data: function(params) {
                            return {
                                q: params.term,
                                page: params.page || 1,
                                sekolah: data.id,
                                limit: 30
                            }
                        },
                        processResults: function(data, params) {
                            params.page = params.page || 1;

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total_count
                                }
                            }
                        }
                    }
                });
            }
            $('#tim').select2();
            $('b[role="presentation"]').hide();

            /**
             * ketika form tambah peserta di submit
             */
            $(`form#form-tambah-peserta`).submit(function(e) {
                e.preventDefault();

                let form = this;
                let serialize = $(this).serializeArray();
                let formData = {};

                for (let i = 0; i < serialize.length; i++) {

                    const data = {
                        [serialize[i].name]: serialize[i].value
                    }

                    formData = {
                        ...formData,
                        ...data
                    };
                }

                $(`button[type="submit"]`).text(`Loading...`);
                fetch(`${API_PESERTA}`, {
                        method: "POST",
                        mode: `cors`,
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": API_KEY
                        },
                        body: JSON.stringify(formData)
                    })
                    .then(response => response.json())
                    .then(result => {
                        $(`button[type="submit"]`).text(`Submit Data Peserta`);

                        alert(result.msg);

                        if (result.code == 200) {
                            form.querySelector(`input[name="nama"]`).value = "";
                            form.querySelector(`input[name="email"]`).value = "";
                            form.querySelector(`input[name="password"]`).value = "";
                            form.querySelector(`input[name="email"]`).focus();
                        }
                    })
            })
        });
    </script>

</body>

</html>
<script src="<?php echo BASE_URL ?>/panitia/templates/footer.js"></script>