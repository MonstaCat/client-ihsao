<?php
include('../../config.php');

$PageTitle = "Panel Backup Multiplechoice";
$PageFile = "backupmc";

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
                                            Tekan tombol untuk backup data Multiplechoice
                                        </h6>
                                        <h2 class="text-xl font-semibold mb-8">
                                            Panel Backup
                                        </h2>

                                        <!-- Content Body -->
                                        <button class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 w-full" type="button">
                                            Backup Data Multiplechoice
                                        </button>

                                    </div>
                                    <!-- End of content body -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-20"></div>
            <?php include_once('../templates/footer.php'); ?>
        </div>
    </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script type="text/javascript" src="<?php echo BASE_URL ?>/api-routing.js"></script>

</body>

</html>