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
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-lg text-blueGray-700">
                                        Tim Bersyukur Kepada Allah
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
                                            No
                                        </th>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Nama Peserta
                                        </th>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Asal Sekolah
                                        </th>
                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            Score
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
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

<script type="text/javascript">
    async function MCDataset()
    {   
        const token = localStorage.getItem( `token` );
        const sekolah = localStorage.getItem( `isSmk` );
        const endpoint = `${API_SOAL_MULTIPLE}/result/${token}/${sekolah}`;
        
        const dataset = await fetch( endpoint );

        return dataset.json();
    }

    MCDataset()
    .then( response => {
        let no = 1;
        response.data.forEach( v => {
            $( `tbody` ).append(`<tr>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                <p class="ml-3 font-bold text-blueGray-600">
                ${no}
                </p>
                </td>
                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                <p class="font-bold text-blueGray-600">
                ${v.peserta.nama}
                </p>
                </th>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                ${v.Sekolah.sekolah}
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                <div class="flex items-center">
                <p class="mr-2"><b>${v.score}</b></p>
                </div>
                </td>
                </tr>`)

            no++;
        } )
    } )
</script>