<?php
include('../config.php');

$PageTitle = "Ujian Multiplechoice";
$PageFile = "ujianmc";

include_once('templates/header.php');
?>

<body oncontextmenu="return false" class="text-blueGray-700 antialiased bg-blueGray-50">
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
                        <h3 class="flex text-lg font-bold">SISA WAKTU :
                            <span class="countdown">
                                <ul class="flex ml-3" id="batas-waktu">
                                    <li><span class="hours countdown-text">00</span></li>
                                    <li class="seperator countdown-text">:</li>
                                    <li><span class="minutes countdown-text">00</span></li>
                                    <li class="seperator countdown-text">:</li>
                                    <li><span class="seconds countdown-text">00</span></li>
                                </ul>
                            </span>
                        </h3>
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
                        <!-- <li @click="openTab = 1" :class="{ 'border-4': openTab === 1 }" class="cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25">
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
                        </li> -->
                    </ul>
                </div>

                <!-- Content Soal -->
                <div class="mb-auto h-auto soal-content">
                    <div x-show="openTab === 1">
                        <img class="max-h-72 mb-4" id="soal_gambar">
                        <p class="text-sm font-semibold mb-5" id="soal"></p>

                        <!-- Objective -->
                        <div class="flex flex-col">
                            <div class="items-center mb-3 set-jawaban">
                                <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanA">
                                <label class="text-sm font-semibold" for="jawabanA">Jawaban A</label>
                            </div>
                            <div class="items-center mb-3 set-jawaban">
                                <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanB">
                                <label class="text-sm font-semibold" for="jawabanB">Jawaban B</label>
                            </div>
                            <div class="items-center mb-3 set-jawaban">
                                <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanC">
                                <label class="text-sm font-semibold" for="jawabanC">Jawaban C</label>
                            </div>
                            <div class="items-center mb-3 set-jawaban">
                                <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanD">
                                <label class="text-sm font-semibold" for="jawabanD">
                                    <!-- <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png"> -->
                                </label>
                            </div>
                            <div class="items-center mb-3 set-jawaban">
                                <input class="mr-3" type="radio" name="jawabanObjective" id="jawabanE">
                                <label class="text-sm font-semibold" for="jawabanE">
                                    <!-- <img class="max-h-72 mb-4" src="<?= BASE_URL ?>/src/public/img/ihsao png.png"> -->
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?php include_once('templates/footer.php'); ?>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Countdown Js -->
    <script src="<?php echo BASE_URL; ?>/src/public/js/jquery.countdown.min.js"></script>
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Disable dev tools -->
    <script>
        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>

    <script>
        var MC_TOTAL = localStorage.getItem(`mc-total`);
        var currentPage = 1;

        async function run() {
            const conf = await getConf();

            setDeadline(conf.data);
            setSoalSlider(conf.data);
        }
        run();

        /**
         * mengambil konfigurasi dari redis
         */
        async function getConf() {
            const f = await fetch(`${API_SOAL_MULTIPLE}/conf`)

            return f.json();
        }

        /**
         * membuat slider pindah halaman
         */
        function setSoalSlider( conf ) {
            const container = $( `#button-soal` );

            // initial soal
            fetchSoal( 1 );

            for( let i = 1; i<=MC_TOTAL; i++ ) {
                const element   = `<li page="${i}" @click="openTab = 1" :class="{ 'border-4': openTab === ${i} }" class="mc-soal-button cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500">
                               <a href="#"></a></li>`;
                container.append( element );

            }

            $( document ).on( `click`, `.mc-soal-button`, function(){
                fetchSoal( Number( $(this).attr("page") ) );
            } )
        }

        /**
         * mengambil data soal di db
         */
        function fetchSoal( no ) 
        {
            const sekolah = Number( JSON.parse( localStorage.getItem( `isSmk` ) ) );
            const storage = `${API_ORIGIN}/storages/images/soal-multiple`;

            fetch( `${API_SOAL_MULTIPLE}/unit/${token}/${sekolah}/${no}` )
            .then( response => response.json() )
            .then( response => {
                console.log(response.data);
                if( response.data.soal_gambar == "" ) {
                    $( `#soal` ).text( response.data.soal );
                }
                else {
                    const image = `<img src="${storage}/${response.data.soal_gambar}" alt="">`
                    $("#soal_gambar").html(image);
                }

                const setJawaban = $( `.set-jawaban` );

                for( let i = 0; i < setJawaban.length; i++ ) {
                    const jawaban = response.data.jawaban[i];
                    const label   = setJawaban[i].children[1];

                    if( jawaban.jawaban_gambar == "" ) {
                        label.innerHTML = jawaban.jawaban;
                    }
                    else {
                        const image = `<img src="${storage}/${jawaban.jawaban_gambar}" alt="">`
                        label.innerHTML = image;
                    }
                }
            } )
        }

        /**
         * hitung mundur waktu
         */
        function setDeadline(conf) {

            const d = new Date(JSON.parse(conf.deadline));

            const date = `${d.getMonth()+1}/${d.getDate()}/${d.getFullYear()}` 
            const time = `${d.getHours()}:${d.getMinutes()}:${d.getSeconds()}`;
            const dt = date + " " + time;

            $('#batas-waktu').countdown({
                date: dt, // TODO Date format: 07/27/2017 17:00:00
                offset: +7, // TODO Your Timezone Offset
                day: 'Day',
                days: 'Days',
                hideOnComplete: false
            }, function(container) {
                // alert('Done!');
                // Jika countdown selesai, tampilkan aksi disini
            });     
        }
    </script>

</body>

</html>