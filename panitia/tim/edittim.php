<?php
include('../../config.php');

$PageTitle = "Edit Data Tim";
$PageFile = "edittim";

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
                                            Edit Data
                                        </h6>
                                        <h2 class="text-xl font-semibold mb-8">
                                            Edit Data Tim
                                        </h2>

                                        <!-- Content Body -->
                                        <form id="form-tambah-tim">
                                            <div class="flex flex-col">
                                                <div class="md:flex">
                                                    <div class="md:w-1/2 mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="pembina">
                                                            Cabang Lomba
                                                        </label>
                                                        <select id="cabang_lomba" name="lomba" style="width: 100%;">
                                                            <option value="">Cabang Lomba</option>
                                                        </select>
                                                    </div>
                                                    <div class="md:w-1/2 mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nama_tim">
                                                            Nama Tim
                                                        </label>
                                                        <input type="text" placeholder="Nama Tim" id="nama_tim" name="nama_tim" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2">
                                                    </div>
                                                </div>

                                                <div class="md:flex">
                                                    <div class="md:w-1/2 mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="pembina">
                                                            Nama Pembina
                                                        </label>
                                                        <input type="text" placeholder="Nama Pembina" id="pembina" name="nama_pembina" autocomplete="off" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2">
                                                    </div>
                                                    <div class="md:w-1/2 mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="hp_pembina">
                                                            Nomor Hp Pembina
                                                        </label>
                                                        <input type="text" placeholder="Nomor Hp Pembina" id="hp_pembina" name="hp_pembina" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2">
                                                    </div>
                                                </div>

                                                <div class="md:flex">
                                                    <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="sekolah">
                                                            Sekolah
                                                        </label>
                                                        <select id="sekolah" name="sekolah" style="width: 100%;">
                                                            <option value="">Sekolah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="float-right bg-yellow-500 text-white active:bg-yellow-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                Edit Data Tim
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

</body>

</html>