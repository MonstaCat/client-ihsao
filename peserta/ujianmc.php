<?php
include('../config.php');

$PageTitle = "Ujian Multiplechoice";
$PageFile = "ujianmc";

include_once('templates/header.php');
?>

<body class="text-blueGray-700 antialiased bg-blueGray-50">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div class="mx-20 mt-4">
            <!-- Header -->
            <div class="flex flex-col">
                <div class="mb-6 items-center">
                    <div class="float-left">
                        <button type="submit" class="bg-lightBlue-500 text-white active:bg-lightBlue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            Submit
                        </button>
                    </div>
                    <div class="float-right">
                        <h3 class="text-lg font-bold">SISA WAKTU: 01:30:00</h3>
                    </div>
                </div>
            </div>

            <!-- Nomor Soal -->
            <div class="h-auto mb-8">
                <div class="flex flew-nwrap justify-center items-center">
                    <!-- Jika sudah diisi maka memakai class:
                    cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25

                    Jika belum diisi maka class nya:
                    cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500 -->
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                    <span class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500"></span>
                </div>
            </div>

            <!-- Content Soal -->
            <main class="mb-auto h-auto">
                <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png">
                <p class="text-sm font-semibold mb-5">[[[[Ini adalah contoh soal]]]] Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolores laborum modi perspiciatis id impedit aut suscipit, quo necessitatibus culpa magni inventore a eius molestias autem, libero ullam officiis porro.</p>

                <!-- Objective -->
                <div class="flex flex-col">
                    <div class="items-center mb-3">
                        <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanA">
                        <label class="text-sm font-semibold" for="jawabanA">Jawaban A</label>
                    </div>
                    <div class="items-center mb-3">
                        <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanB">
                        <label class="text-sm font-semibold" for="jawabanB">Jawaban B</label>
                    </div>
                    <div class="items-center mb-3">
                        <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanC">
                        <label class="text-sm font-semibold" for="jawabanC">Jawaban C</label>
                    </div>
                    <div class="items-center mb-3">
                        <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanD">
                        <label class="text-sm font-semibold" for="jawabanD">
                            <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png">
                        </label>
                    </div>
                    <div class="items-center mb-3">
                        <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanE">
                        <label class="text-sm font-semibold" for="jawabanE">
                            <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png">
                        </label>
                    </div>
                </div>

            </main>

        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>

</html>