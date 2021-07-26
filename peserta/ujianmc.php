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
                        <h3 class="text-lg font-bold">SISA WAKTU: <span class="countdown"></span></h3>
                    </div>
                </div>
            </div>

            <div x-data="{ openTab: 1 }">

                <!-- Nomor Soal -->
                <div class="h-auto mb-8">
                    <ul id="button-soal" class="flex flew-nwrap justify-center items-center">
                        <!-- Jika sudah diisi maka memakai class:
                    cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25

                    Jika belum diisi maka class nya:
                    cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500 -->
                        <li @click="openTab = 1" :class="{ 'border-4': openTab === 1 }" class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25">
                            <a href="#"></a>
                        </li>
                        <li @click=" openTab=2" :class="{ 'border-4': openTab === 2 }" class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25">
                            <a href="#"></a>
                        </li>
                        <li @click="openTab = 3" :class="{ 'border-4': openTab === 3 }" class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500">
                            <a href="#"></a>
                        </li>
                        <li @click="openTab = 4" :class="{ 'border-4': openTab === 4 }" class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500">
                            <a href="#"></a>
                        </li>
                    </ul>
                </div>

                <!-- Content Soal -->
                <div class="mb-auto h-auto soal-content">
                    <div x-show="openTab === 1">
                        <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png">
                        <p class="text-sm font-semibold mb-5">[[[[Ini adalah contoh soal 1]]]] Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolores laborum modi perspiciatis id impedit aut suscipit, quo necessitatibus culpa magni inventore a eius molestias autem, libero ullam officiis porro.</p>

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
                    </div>

                    <div x-show="openTab === 2">
                        <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png">
                        <p class="text-sm font-semibold mb-5">[[[[Ini adalah contoh soal 2]]]] Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolores laborum modi perspiciatis id impedit aut suscipit, quo necessitatibus culpa magni inventore a eius molestias autem, libero ullam officiis porro.</p>

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
                    </div>

                    <div x-show="openTab === 3">
                        <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png">
                        <p class="text-sm font-semibold mb-5">[[[[Ini adalah contoh soal 3]]]] Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolores laborum modi perspiciatis id impedit aut suscipit, quo necessitatibus culpa magni inventore a eius molestias autem, libero ullam officiis porro.</p>

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
                    </div>

                    <div x-show="openTab === 4">
                        <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png">
                        <p class="text-sm font-semibold mb-5">[[[[Ini adalah contoh soal 4]]]] Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolores laborum modi perspiciatis id impedit aut suscipit, quo necessitatibus culpa magni inventore a eius molestias autem, libero ullam officiis porro.</p>

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
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script>
        //declare start time
        var timer2 = "1:15:00";

        //intercal for seconds
        var interval = setInterval(function() {
            //timer will be [hour, minute, second]
            var timer = timer2.split(':');
            var hours = parseInt(timer[0], 10);
            var minutes = parseInt(timer[1], 10);
            var seconds = parseInt(timer[2], 10);
            //reduce second by one
            --seconds;
            //calculate new minute and hours
            minutes = (seconds < 0) ? --minutes : minutes;
            hours = minutes < 0 ? --hours : hours;

            if (hours < 0) {
                clearInterval(interval);
                return;
            }

            seconds = (seconds < 0) ? 59 : seconds;
            seconds = (seconds < 10) ? '0' + seconds : seconds;
            minutes = (minutes < 0) ? 59 : minutes;
            minutes = (minutes < 10) ? '0' + minutes : minutes;

            timer2 = hours + ':' + minutes + ':' + seconds;
            $('.countdown').html(timer2);

        }, 1000);
    </script>

</body>

</html>