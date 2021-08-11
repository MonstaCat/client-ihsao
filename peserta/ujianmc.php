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
                        <button type="submit" id="submit-soal" class="bg-lightBlue-500 text-white active:bg-lightBlue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
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
        // document.onkeydown = function(e) {
        //     if (event.keyCode == 123) {
        //         return false;
        //     }
        //     if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        //         return false;
        //     }
        //     if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        //         return false;
        //     }
        //     if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        //         return false;
        //     }
        //     if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        //         return false;
        //     }
        // }
    </script>

    <script>
        var MC_TOTAL = localStorage.getItem(`mc-total`);
        var currentPage = 1;
        var currentPageSlide = `mc-slide-`; //get slide id
        var pageSlideClass = `mc-soal-button`
        var sekolah = localStorage.getItem( `isSmk` );
        var jawabanElList = [];

        async function run() {
            const conf = await getConf();

            setTimeisOver();
            setDeadline(conf.data);
            setSoalSlider(conf.data);
            setSubmitSoal();
        }
        run();

        /**
         * keluarkan aplikasi ketika waktu sudah habis
         */
        function setTimeisOver()
        {
            const socket = io( API_ORIGIN );

            socket.on( `shutdown`, token => {
                submitSoal();
                alert( `ujian telah berakhir` );
                window.setTimeout( function(){
                    window.location = `${BASE_URL}/peserta/hasil.php`;
                }, 500 )
            } )
        }

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
                const element   = `<li page="${i}" @click="openTab = ${i}" :class="{ 'border-4': openTab === ${i} }" id="${currentPageSlide+i}" class="${pageSlideClass} cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 border border-solid border-emerald-500">
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
            const storage = `${API_ORIGIN}/storages/images/soal-multiple/`;

            fetch( `${API_SOAL_MULTIPLE}/unit/${token}/${sekolah}/${no}` )
            .then( response => response.json() )
            .then( response => {
                const jawaban = response.data.jawaban;
                const soal = response.data;
                $( `.soal-content` ).html(`<div x-show="openTab === ${no}">
                    ${ ( response.data.soal_gambar != "" ) ? `<img src="${storage+soal.soal_gambar}" class="max-h-72 mb-4" id="soal_gambar">` : `` }
                    <p class="text-sm font-semibold mb-5" id="soal">${soal.soal}</p>

                    <!-- Objective -->
                    <div class="flex flex-col">
                    <div class="items-center mb-3">
                    <input class="mr-3" type="radio" name="objektif[]" id="radio-${ jawaban[0].id }" value="${ jawaban[0].id }">
                    <label class="text-sm font-semibold" for="jawabanA">
                        ${ jawaban[0].jawaban }
                        ${ ( jawaban[0].jawaban_gambar != `` ) ? `<img class="max-h-72 mb-4" src="${storage+jawaban[0].jawaban_gambar}">` : `` }
                    </label>
                    </div>
                    <div class="items-center mb-3">
                    <input class="mr-3" type="radio" name="objektif[]" id="radio-${ jawaban[1].id }" value="${ jawaban[1].id }">
                    <label class="text-sm font-semibold" for="jawabanB">
                        ${ jawaban[1].jawaban }
                        ${ ( jawaban[1].jawaban_gambar != `` ) ? `<img class="max-h-72 mb-4" src="${storage+jawaban[1].jawaban_gambar}">` : `` }
                    </label>
                    </div>
                    <div class="items-center mb-3">
                    <input class="mr-3" type="radio" name="objektif[]" id="radio-${ jawaban[2].id }" value="${ jawaban[2].id }">
                    <label class="text-sm font-semibold" for="jawabanC">
                        ${ jawaban[2].jawaban }
                        ${ ( jawaban[2].jawaban_gambar != `` ) ? `<img class="max-h-72 mb-4" src="${storage+jawaban[2].jawaban_gambar}">` : `` }
                    </label>
                    </div>
                    <div class="items-center mb-3">
                    <input class="mr-3" type="radio" name="objektif[]" id="radio-${ jawaban[3].id }" value="${ jawaban[3].id }">
                    <label class="text-sm font-semibold" for="jawabanD">
                        ${ jawaban[3].jawaban }
                        ${ ( jawaban[3].jawaban_gambar != `` ) ? `<img class="max-h-72 mb-4" src="${storage+jawaban[3].jawaban_gambar}">` : `` }
                    </label>
                    </div>
                    <div class="items-center mb-3">
                    <input class="mr-3" type="radio" name="objektif[]" id="radio-${ jawaban[4].id }" value="${ jawaban[4].id }">
                    <label class="text-sm font-semibold" for="jawabanE">
                        ${ jawaban[4].jawaban }
                        ${ ( jawaban[4].jawaban_gambar != `` ) ? `<img class="max-h-72 mb-4" src="${storage+jawaban[4].jawaban_gambar}">` : `` }
                    </label>
                    </div>
                    </div>
                    </div>
                `)

                /**
                 * ketika jawaban dipilih
                 */
                for( let radio of $(`[name='objektif[]']`) ) {
                    const id = `#${radio.getAttribute( `id` )}`;
                    $(id).on( `change`, e => {
                        changeJawabanValue( { slide : no, soal : soal.id, jawaban : e.target.value } )
                    } )
                }

                setDefaultJawaban( response.data.id );
            } )
        }

        /**
         * membuat identifier untuk semua jawaban
         */
        function setJawabanId( dataset )
        {   
            jawabanElList.push( dataset.jawaban.id )
            dataset.button.setAttribute( `id`, dataset.jawaban.id );
            dataset.button.value = dataset.jawaban.id;
        } 

        /**
         * menampilkan default jawaban
         */
        function setDefaultJawaban( soal )
        {
            fetch( `${API_SOAL_MULTIPLE}/unit/jawaban/${token}/${sekolah}/${soal}` )
            .then( response => response.json() )
            .then( response => {
                if( response.data.jawaban != ``) {
                    $( `#radio-${response.data.jawaban}` ).prop( `checked`, true )
                } 
            } )
        }

        /**
         * mengubah data jawaban yang diisi
         */
        function changeJawabanValue( v ) 
        {
            $( `#${currentPageSlide+v.slide}` ).addClass( `cursor-pointer w-6 h-6 rounded last:mr-0 mr-2 bg-emerald-500 bg-opacity-25` )
            $( `#${currentPageSlide+v.slide}` ).removeClass( `border border-solid border-emerald-500` )

            const endpoint = `${API_SOAL_MULTIPLE}/unit/jawaban/${token}/${sekolah}/${v.soal}`
            const conf = {
                mode : `cors`,
                method : `PUT`,
                body : JSON.stringify( { jawaban : v.jawaban } ),
                headers : {
                    "Content-Type" : "application/json"
                }
            }

            fetch( endpoint, conf )
            .then( response => response.json() )
            .then( response => {
                // console.log(response);
            } )
            .catch( e => {
                // console.log(e);
            })
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

        /**
         * mengaktifkan tombol submit
         */
        function setSubmitSoal()
        {
            $( `#submit-soal` ).click( function(e) {
                e.preventDefault();

                const msg = confirm( `Yakin ingin melakukan submit soal ?` );

                if( msg  ) return submitSoal();
            } )
        }

        function submitSoal()
        {
            const endpoint = `${API_SOAL_MULTIPLE}/jawaban/submit/${token}/${sekolah}`
            const conf = {
                mode : `cors`,
                method : "post",
                headers : {
                    "Content-Type" : `application/json`
                }
            }

            $( `#submit-soal` ).text( `Loading...` )

            fetch( endpoint, conf )
            .then( response => response.json() )
            .then( response => {
                $( `#submit-soal` ).text("Submit")
                const redirPath = `${BASE_URL}/peserta/hasil.php`

                localStorage.setItem( `status_ujian`, `Sudah dikerjakan` );

                window.location = redirPath;
            } )
        }
    </script>

</body>

</html>