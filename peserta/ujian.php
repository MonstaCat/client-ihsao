<?php
include('../config.php');

$PageTitle = "Ujian Peserta";
$PageFile = "ujian";

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
                        Ujian
                    </h2>
                    <div class="w-full mb-12 xl:mb-0">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded shadow-lg bg-white">
                            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full max-w-full flex-grow flex-1">

                                        <!-- Content Body -->
                                        <div class="flex">
                                            <div class="w-72 mt-5 mb-5 ml-3">
                                                <div class="bg-white shadow-lg rounded-lg py-3">
                                                    <table class="text-xs mx-4 my-3">
                                                        <tbody>
                                                            <tr>
                                                                <td class="px-2 py-2 text-gray-500 font-semibold flex">Jenis Soal</td>
                                                                <td class="px-2 py-2" id="ujian-sekolah"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-2 py-2 text-gray-500 font-semibold flex">Jumlah Soal</td>
                                                                <td class="px-2 py-2">50 Soal</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-2 py-2 text-gray-500 font-semibold flex">Waktu</td>
                                                                <td class="px-2 py-2">75 Menit</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-2 py-2 text-gray-500 font-semibold flex">Status</td>
                                                                <td class="px-2 py-2 font-bold" id="ujian-status">Belum Dikerjakan</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-2 py-2 text-gray-500 font-semibold flex">Token</td>
                                                                <td class="px-2 py-2 font-bold">
                                                                    <form id="form-token">
                                                                        <input type="text" autocomplete="off" name="token" placeholder="Masukkan Token" class="px-2 py-1 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <button type="submit" id="ujian-button" class="float-right bg-lightBlue-500 text-white active:bg-lightBlue-600 font-bold uppercase text-sm px-6 py-3 mt-5 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                        Mulai Ujian
                                                                    </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        </tbody>
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

</body>

</html>

<script type="text/javascript">
    var statusText = $(`#ujian-status`);
    var sekolahText = $(`#ujian-sekolah`);
    const isBan = localStorage.getItem(`isBanned`) != null;
    const isSmk = JSON.parse(localStorage.getItem(`isSmk`)) == true;

    sekolahText.text((isSmk) ? "Multiplechoice SMK" : "Multiplechoice SMA");

    if (isBan) {
        statusText.html(`Anda didiskualifikasi`)
    }

    $(`#form-token`).submit(function(e) {
        e.preventDefault();

        const currentToken = $(this).find(`[name="token"]`).val();
        const token = localStorage.getItem(`token`);
        const sekolah = (isSmk) ? 1 : 0;

        if (token != currentToken) {
            return alert(`Token tidak benar`)
        }

        return configure(token, sekolah);
    })

    /**
     * memuat konfigurasi untuk memulai lomba
     */
    function configure(token, sekolah) {

        $(`#ujian-button`).text("Loading...")

        fetch(`${API_SOAL_MULTIPLE}/start/${token}/${sekolah}`)
            .then(response => response.json())
            .then(response => {

                $(`#ujian-button`).text("Mulai Ujian");

                if (!response.start) {
                    return alert(response.msg);
                }

                localStorage.setItem(`mc-total`, response.data.total);

                const redirPath = `${BASE_URL}/peserta/ujianmc.php`;

                window.location = redirPath;
            })
    }
</script>