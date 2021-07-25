<?php
include('../config.php');

$PageTitle = "Leaderboard Peserta";
$PageFile = "leaderboard";

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
                        Leaderboard Tim
                    </h2>
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-lg text-blueGray-700">
                                        Top 8 Score
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="block w-full overflow-x-auto">
                            <!-- Leaderboard table -->
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Peringkat
                                        </th>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Nama Tim
                                        </th>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Asal Sekolah
                                        </th>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Status
                                        </th>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Peserta
                                        </th>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Total Score
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <p class="ml-3 font-bold text-blueGray-600">
                                                1
                                            </p>
                                        </td>
                                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            <p class="font-bold text-blueGray-600">
                                                Tim Tam
                                            </p>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            SMKS Labor Binaan FKIP UR Pekanbaru
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                            completed
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                            </div>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <p class="mr-2"><b>230</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <p class="ml-3 font-bold text-blueGray-600">
                                                2
                                            </p>
                                        </td>
                                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            <p class="font-bold text-blueGray-600">
                                                Tim Bersyukur Kepada Allah
                                            </p>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            SMKN 1 Pekanbaru
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-orange-500 mr-2"></i>
                                            pending
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                            </div>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <p class="mr-2"><b>220</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <p class="ml-3 font-bold text-blueGray-600">
                                                3
                                            </p>
                                        </td>
                                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            <p class="font-bold text-blueGray-600">
                                                Tim Do'a Ibu
                                            </p>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            SMKN 2 Pekanbaru
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                            completed
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                            </div>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <p class="mr-2"><b>210</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <p class="ml-3 font-bold text-blueGray-600">
                                                4
                                            </p>
                                        </td>
                                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            <p class="font-bold text-blueGray-600">
                                                Tim Do'a Bapak
                                            </p>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            SMKN 3 Pekanbaru
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                            completed
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                            </div>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <p class="mr-2"><b>200</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <p class="ml-3 font-bold text-blueGray-600">
                                                5
                                            </p>
                                        </td>
                                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            <p class="font-bold text-blueGray-600">
                                                Tim Do'a Tante
                                            </p>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            SMKN 4 Pekanbaru
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                            completed
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                            </div>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <p class="mr-2"><b>190</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <p class="ml-3 font-bold text-blueGray-600">
                                                6
                                            </p>
                                        </td>
                                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            <p class="font-bold text-blueGray-600">
                                                Tim Do'a Paman
                                            </p>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            SMKN 5 Pekanbaru
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                            completed
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                            </div>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <p class="mr-2"><b>180</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <p class="ml-3 font-bold text-blueGray-600">
                                                7
                                            </p>
                                        </td>
                                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            <p class="font-bold text-blueGray-600">
                                                Tim Do'a Sanak
                                            </p>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            SMKN 6 Pekanbaru
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                            completed
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                            </div>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <p class="mr-2"><b>170</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <p class="ml-3 font-bold text-blueGray-600">
                                                8
                                            </p>
                                        </td>
                                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            <p class="font-bold text-blueGray-600">
                                                Tim Do'a Saudara
                                            </p>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            SMKN 7 Pekanbaru
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                            completed
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                <img src="<?php echo BASE_URL; ?>/peserta/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                            </div>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <p class="mr-2"><b>160</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <?php include_once('templates/footer.php'); ?>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>

</html>