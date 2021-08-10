<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IHSAO 2021 - Inter High School Accounting Olympiad 2021</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>/src/public/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/src/public/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/src/public/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL; ?>/src/public/img/favicon/site.webmanifest">
    <!-- Particles Js -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/public/css/particles.css">
    <!-- Tailwind Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/public/css/tailwind.css">
    <!-- Countdown Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/public/css/jquery.countdown.css">
    <!-- Preloader Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/public/css/preloader.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/public/css/custom.css">
</head>

<body class="overflow-x-hidden lg:overflow-x-auto">
    <div class="flex flex-col justify-center items-center preloader-wrapper">
        <div class="flex-1 text-center preloader">
            <div class="preloader-text">
                <p>IHSAO 2021</p>
            </div>
            <div class="windows8">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col h-screen">

        <header class="w-full text-white text-base bg-transparent z-50 md:fixed" id="nav">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                    <div class="flex left-0">
                        <a href="" class="flex items-center">
                            <div class="text-3xl header-text tracking-widest" id="header-title">
                                <p class="ml-1 -m-2">IHSAO</p>
                                <p class="ml-1 -m-2">2021</p>
                            </div>
                            <img class="h-14 ml-3" src="<?php echo BASE_URL; ?>/src/public/img/ihsao png.png" alt="" id="header-icon">
                        </a>
                    </div>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="fill-current text-yellow-400 w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row" id="navigation">
                    <div class="uppercase text-sm ml-5 flex items-center font-mono tracking-wide font-bold text-yellow-400">
                        <a href="#beranda" id="section-1">Beranda</a>
                    </div>
                    <div class="uppercase text-sm ml-5 flex items-center font-mono tracking-wide hover:text-gray-300">
                        <a href="#tentang" id="section-2">Tentang IHSAO</a>
                    </div>
                    <div class="uppercase text-sm ml-5 flex items-center font-mono tracking-wide hover:text-gray-300">
                        <a href="#kategori" id="section-3">Kategori Perlombaan</a>
                    </div>
                    <div class="uppercase text-sm ml-5 mr-9 flex items-center font-mono tracking-wide hover:text-gray-300">
                        <a href="#timeline">Timeline</a>
                    </div>
                    <div>
                        <button onclick="window.location.href='peserta'" class="ml-5 mt-4 mb-4 flex items-center w-32 h-10 justify-center font-mono tracking-widest bg-ihsao-yellow text-black border-2 border-black box-shadow-black hover:bg-ihsao-purple hover:text-white">Masuk!</button>
                    </div>
                </nav>
            </div>
        </header>

        <div id="beranda">
            <div id="inside">
                <ul id="event-countdown">
                    <li><span class="days text-white countdown-text">00</span>
                        <p class=" days_text text-white uppercase font-thin font-mono tracking-widest">Days</p>
                    </li>
                    <li class="seperator text-white countdown-text">:</li>
                    <li><span class="hours text-white countdown-text">00</span>
                        <p class="hours_text text-white uppercase font-thin font-mono tracking-widest">Hours</p>
                    </li>
                    <li class="seperator text-white countdown-text">:</li>
                    <li><span class="minutes text-white countdown-text">00</span>
                        <p class="minutes_text text-white uppercase font-thin font-mono tracking-widest">Minutes</p>
                    </li>
                    <li class="seperator text-white countdown-text">:</li>
                    <li><span class="seconds text-white countdown-text">00</span>
                        <p class="seconds_text text-white uppercase font-thin font-mono tracking-widest">Seconds</p>
                    </li>
                </ul>
            </div>
        </div>

        <section class="w-full h-auto bg-white" id="tentang">
            <div class="container mx-auto ">
                <div class="flex justify-center text-2xl text-gray-800 text-center mt-28 mb-6">
                    <h1>Inter High School Accounting Olympiad&nbsp;|&nbsp;<span class="font-bold">IHSAO 2021<span></h1>
                </div>
                <div class="divider div-transparent div-dot mb-20"></div>
                <div class="flex justify-between mb-28">
                    <div class="w-0 invisible md:visible md:w-1/4">
                        <div class="w-full h-auto border-2 border-black bg-yellow-500 box-shadow-black">
                            <div class="flex justify-between">
                                <div class="flex mx-4 my-2 left-0">
                                    <div class="border-2 border-black rounded-full bg-red-600" style="height: 15px; width: 15px;">
                                    </div>
                                    <div class="ml-2 border-2 border-black rounded-full bg-yellow-400" style="height: 15px; width: 15px;">
                                    </div>
                                    <div class="ml-2 border-2 border-black rounded-full bg-green-800" style="height: 15px; width: 15px;">
                                    </div>
                                </div>
                            </div>
                            <div class="my-4 mx-4 border-2 bg-white border-black">
                                <img src="<?php echo BASE_URL; ?>/src/public/img/ihsao png.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-6 md:ml-20 md:w-3/4">
                        <p class="mb-8">
                            <span class="font-semibold">Inter High School Accounting Olympiad (IHSAO) 2021</span>, merupakan acara perlombakan akuntansi yang tahun ini mengusung tema “Be a Gold Generation to Change The World” dipersembahakan oleh Himpunan Mahasiswa Akuntansi Politeknik Caltex Riau. Kegiatan IHSAO memiliki berbagai cabang lomba yang berbeda setiap tahunnya dan ditujukan untuk siswa tingkat: SMA/MA/SMK/MK se-Indonesia.
                        </p>
                        <p class="mb-8">
                            <span class="font-semibold">Inter High School Accounting Olympiad (IHSAO) 2021</span> memiliki tujuan agar peserta dapat mengkompetisikan kemampuannya, peserta akan memiliki niat dan pandangan untuk menjadi generasi akuntansi yang gemilang. Peserta juga akan menunjukkan dan mengkompetisikan kemampuannya di bidang akuntansi baik dalam teori maupun praktik, peserta nantinya dapat menganalisis akuntansi di era kini, meningkatkan kemampuan intelektual dan pengaplikasiannya dalam kehidupan nyata, serta meningkatkan kualitas dan kemampuan siswa-siswi dalam memecahkan masalah-masalah akuntansi.
                        </p>
                        <h2 class="font-bold mb-2">Visi:</h2>
                        <p class="mb-8">
                            “Mengembangkan skill akuntansi pelajar Indonesia untuk menjadi generasi akuntansi yang unggul, mampu bersaing secara sehat, dan bisa meningkatkan pemahaman baik secara teori maupun praktik menuju Indonesia Emas.”
                        </p>
                        <h2 class="font-bold mb-2">Misi:</h2>
                        <ol class="ml-4 list-decimal">
                            <li>Menyelenggarakan perlombaan dibidang akuntansi dengan mengangkat permasalahan-permasalahan aktual.</li>
                            <li>Menjadi wadah bagi calon akuntan muda agar bisa bersaing secara terbuka dan menjunjung tinggi nilai sportivitas.</li>
                            <li>Memperkenalkan program studi akuntansi Politeknik Caltex Riau.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full h-auto bg-white" id="kategori">
            <div class="container mx-auto ">
                <div class="flex justify-center text-2xl text-gray-800 text-center mt-28 mb-6">
                    <h1>Kategori Perlombaan&nbsp;|&nbsp;<span class="font-bold">IHSAO 2021<span></h1>
                </div>
                <div class="divider div-transparent div-dot mb-20"></div>
                <div class="flex flex-col mb-28">
                    <div class="flex mb-28">
                        <div class="w-full px-6 md:mb-16 md:mr-10 md:w-3/5">
                            <h2 class="text-2xl text-gray-800 mb-5 font-semibold">Olimpiade</h2>
                            <p class="mb-4">
                                Lomba Olimpiade adalah lomba dalam bidang akuntansi bagi para siswa-siswi SMA/SMK/Sederajat di Indonesia. Lomba olimpiade ini terdiri dari masing-masing perwakilan sekolah yaitu satu tim. Satu tim terdiri dari 3 orang peserta. Di lomba ini ada beberapa regu yang akan bertanding dalam 3 tahap. Tiga tahap tersebut adalah Penyisihan, Semifinal, dan Final (Cerdas Cermat).
                            </p>
                            <p>
                                Kompetisi ini diharapkan mampu mempersiapkan tenaga ahli akuntansi yang mampu beradaptasi dengan perkembangan ilmu pengetahuan dan teknologi yang sangat dinamis di era digital.
                            </p>
                        </div>
                        <div class="w-0 invisible md:visible md:w-2/5">
                            <div class="w-full h-50 border-2 border-black bg-yellow-500 box-shadow-black">
                                <div class="flex justify-between">
                                    <div class="flex mx-4 mt-2 left-0">
                                        <div class="border-2 border-black rounded-full bg-red-600" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-yellow-400" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-green-800" style="height: 15px; width: 15px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 mx-4 border-2 bg-purple-900 border-black">
                                    <img src="<?php echo BASE_URL; ?>/src/public/img/olimpiade-min.jpeg" class="object-cover h-56 w-full transition img-filter" alt="olimpiade">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mb-28">
                        <div class="w-0 invisible md:visible md:w-2/5">
                            <div class="w-full h-50 border-2 border-black bg-yellow-500 box-shadow-black">
                                <div class="flex justify-between">
                                    <div class="flex mx-4 mt-2 left-0">
                                        <div class="border-2 border-black rounded-full bg-red-600" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-yellow-400" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-green-800" style="height: 15px; width: 15px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 mx-4 border-2 bg-purple-900 border-black">
                                    <img src="<?php echo BASE_URL; ?>/src/public/img/myob-min.jpeg" class="object-cover h-56 w-full transition img-filter" alt="myob">
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-6 md:mb-16 md:w-3/5 md:ml-10">
                            <h2 class="text-2xl text-gray-800 mb-5 font-semibold">MYOB</h2>
                            <p class="mb-4">
                                Lomba MYOB adalah lomba tentang penyelesaian kasus transaksi keuangan menggunakan software. Lomba MYOB ini memiliki tujuan untuk meningkatkan kualitas, keterampilan, dan mengembangkan wawasan siswa-siswi dalam hal aplikasi akuntansi ke dalam komputer khususnya menggunakan software MYOB. Lomba MYOB merupakan lomba yang terdiri dari 1 tim masing-masing sekolah yang setiap timnya terdiri dari 3 orang.
                            </p>
                            <p>
                                Peserta mengerjakan ujian secara individu. Nilai dari setiap individu akan diakumulasikan menjadi nilai setiap timnya. Para peserta nantinya akan menjawab soal dari panitia dengan menggunakan aplikasi MYOB Accounting 18.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-28">
                        <div class="w-full px-6 md:mb-16 md:mr-10 md:w-3/5">
                            <h2 class="text-2xl text-gray-800 mb-5 font-semibold">Karya Ilmiah (LKTI)</h2>
                            <p class="mb-4">
                                Lomba Karya Tulis Ilmiah merupakan ajang kompetisi untuk menciptakan suatu karya ilmiah yang bersifat objektif, sederhana, kreatif dan berguna bagi kehidupan masyarakat. Lomba Karya Tulis Ilmiah ini bersifat individu. Karya Tulis Ilmiah ini dipersiapkan sebelum perlombaan. Akan dipilih 5 (lima) terbaik dari seluruh karya yang telah dikumpulkan. Karya yang termasuk 5 (lima) terbaik tersebut akan dipresentasikan di hari perlombaan. Lomba Karya Tulis Ilmiah ini mengangkat tema “ Peran Pajak Dalam Pengendalian Ekonomi di Masa Pandemi.”
                            </p>
                        </div>
                        <div class="w-0 invisible md:visible md:w-2/5">
                            <div class="w-full h-50 border-2 border-black bg-yellow-500 box-shadow-black">
                                <div class="flex justify-between">
                                    <div class="flex mx-4 mt-2 left-0">
                                        <div class="border-2 border-black rounded-full bg-red-600" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-yellow-400" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-green-800" style="height: 15px; width: 15px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 mx-4 border-2 bg-purple-900 border-black">
                                    <img src="<?php echo BASE_URL; ?>/src/public/img/lkti-min.jpeg" class="object-cover h-56 w-full transition img-filter" alt="lkti">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mb-28">
                        <div class="w-0 invisible md:visible md:w-2/5">
                            <div class="w-full h-50 border-2 border-black bg-yellow-500 box-shadow-black">
                                <div class="flex justify-between">
                                    <div class="flex mx-4 mt-2 left-0">
                                        <div class="border-2 border-black rounded-full bg-red-600" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-yellow-400" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-green-800" style="height: 15px; width: 15px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 mx-4 border-2 bg-purple-900 border-black">
                                    <img src="<?php echo BASE_URL; ?>/src/public/img/essai-min.jpeg" class="object-cover h-56 w-full transition img-filter" alt="essai">
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-6 md:mb-16 md:w-3/5 md:ml-10">
                            <h2 class="text-2xl text-gray-800 mb-5 font-semibold">Essai</h2>
                            <p class="mb-4">
                                Lomba essai adalah lomba tulisan berisi ide atau gagasan kreatif yang dikembangkan menurut ketentuan pola pikir ilmiah dan mengacu pada informasi yang reliable, permasalahan beserta pemecahannya. Lomba essai ini merupakan salah satu lomba yang diselenggarakan IHSAO 2021. Lomba essai ini ditujukan untuk seluruh siswa SMA/SMK/Sederajat. Adanya lomba essai ini diharapkan dapat menjadi sarana untuk mengembangkan bakat, minat, dan potensi pelajar di bidang menulis. Masing- masing sekolah mengirimkan 1 perwakilan untuk mengikuti lomba. Lomba essai ini mengangkat tema “ Sinergi Pengendalian Inflasi di Tengah Pandemi.”
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-28">
                        <div class="w-full px-6 md:mb-16 md:mr-10 md:w-3/5">
                            <h2 class="text-2xl text-gray-800 mb-5 font-semibold">Poster & Animasi (POSMA)</h2>
                            <p class="mb-4">
                                Lomba Posma (Poster Animasi) yaitu lomba perpaduan antara pembuatan poster dan dipresentasikan dalam bentuk animasi. Lomba poster animasi ini memberi wadah guna mendorong semangat literasi dan kemampuan kritis serta inovatif peserta berdasarkan data sebagai basisnya. Tiap sekolah yang mengikuti perlombaan ini hanya boleh mengirimkan 1 perwakilan peserta untuk mengikuti lomba. Lomba poster animasi ini mengangkat tema “Investasi Menyelamatkan Finansial di Era New Normal.”
                            </p>
                        </div>
                        <div class="w-0 invisible md:visible md:w-2/5">
                            <div class="w-full h-50 border-2 border-black bg-yellow-500 box-shadow-black">
                                <div class="flex justify-between">
                                    <div class="flex mx-4 mt-2 left-0">
                                        <div class="border-2 border-black rounded-full bg-red-600" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-yellow-400" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="ml-2 border-2 border-black rounded-full bg-green-800" style="height: 15px; width: 15px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 mx-4 border-2 bg-purple-900 border-black">
                                    <img src="<?php echo BASE_URL; ?>/src/public/img/posma-min.jpeg" class="object-cover h-56 w-full transition img-filter" alt="posma">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-black h-auto" id="timeline">
            <div class="container mx-auto ">
                <div class="flex justify-center text-2xl text-yellow-500 text-center mt-28 mb-6">
                    <h1>Timeline&nbsp;|&nbsp;<span class="font-bold">IHSAO 2021<span></h1>
                </div>
                <div class="divider-b div-transparent-b div-dot-b mb-20"></div>
                <div class="container text-white mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
                    <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                        <p class="text-yellow-300 uppercase tracking-loose">IHSAO 2021</p>
                        <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Unduh Booklet IHSAO 2021</p>
                        <p class="text-sm md:text-base text-gray-50 mb-4">
                            Unduh panduan dan booklet event IHSAO 2021. Klik tombol dibawah untuk memulai mengunduh.
                        </p>
                        <a href="src/public/PANDUAN_IHSAO_2021.pdf" target="_blank" class="bg-transparent mr-auto hover:bg-yellow-300 text-yellow-300 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                            Unduh Panduan
                        </a>
                    </div>
                    <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                        <div class="container mx-auto w-full h-full">
                            <div class="relative wrap overflow-hidden p-10 h-full">
                                <div class="border-2-2 border-yellow-555 absolute h-full border" style="right: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                                <div class="border-2-2 border-yellow-555 absolute h-full border" style="left: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">31 Mei – 11 Agustus, 2021</p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">Registration</h4>
                                        <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                            Para calon peserta mengisi dan melengkapi formulir dengan scan kode-QR yang tertera pada brosur atau dapat mengunjungi link pada bio instagram @ihsao2021.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1  w-5/12 px-1 py-4 text-left">
                                        <p class="mb-3 text-base text-yellow-300">12 Agustus, 2021</p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">Re-Registration</h4>
                                        <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                            Peserta melakukan daftar ulang dengan mengisi formulir yang diberikan panitia melalui grup whatsapp peserta.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">13 Agustus, 2021</p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">Technical Meeting</h4>
                                        <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                            Peserta diberikan pembekalan teknis perlombaan serta diberikan username, password, dan token akun ujian melalui email yang didaftarkan.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1  w-5/12 px-1 py-4 text-left">
                                        <p class="mb-3 text-base text-yellow-300">14 Agustus, 2021</p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">Day 1</h4>
                                        <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                            Hari pertama merupakan pembukaan resmi acara dan seluruh pelombaan dilaksanakan.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex justify-between flex-row-reverse items-center w-full left-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">15 Agustus, 2021</p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">Day 2</h4>
                                        <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                            Pelaksanaan final Olimpiade dan pengumuman juara seluruh cabang lomba, serta rangkaian acara penutupan IHSAO 2021.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-black h-auto" id="sec-5">
            <div class="container mx-auto ">
                <div class="flex justify-center text-2xl text-yellow-500 text-center mt-28 mb-6">
                    <h1>Organizers & Sponsors&nbsp;|&nbsp;<span class="font-bold">IHSAO 2021<span></h1>
                </div>
                <div class="divider-b div-transparent-b div-dot-b mb-20"></div>
                <div class="container text-white flex flex-col justify-center">
                    <div class="mb-20">
                        <h2 class="text-xl text-center mb-6 text-yellow-500">Hosted By :</h2>
                        <img class="h-20 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/himaksi-fix.png" alt="logo himaksi">
                    </div>
                    <div class="mb-20">
                        <h2 class="text-xl text-center mb-6 text-yellow-500">Media Partner By :</h2>
                        <div class="sm:flex sm:flex-col md:invisible md:h-0">
                            <div class="flex mb-10">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/pekanbaru-event.PNG" alt="pekanbaru event">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/info.lomba.png" alt="info.lomba">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/brosispku.png" alt="brosuspku">
                            </div>
                            <div class="flex mb-10">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/pkukomunitas.png" alt="pku komunitas">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/riautoday.png" alt="riau today">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/infolomba.png" alt="infolomba">
                            </div>
                            <div class="flex mb-10">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/eventkampus.png" alt="event kampus">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/info-event.png" alt="info event">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/lokerpku1.jpg" alt="lokerpku1">
                            </div>
                            <div class="flex mb-10">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/arena-lomba.jpeg" alt="arena lomba">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/eventpelajar.jpeg" alt="event pelajar">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/mahasiswapku.jpeg" alt="mahasiswa pku">
                            </div>
                            <div class="flex">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/sudut50kota.jpg" alt="sudut 50 kota">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/pkukini.jpg" alt="pku kini">
                            </div>
                        </div>
                        <div class="invisible h-0 md:visible md:h-auto flex flex-col">
                            <div class="flex mb-10">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/pekanbaru-event.PNG" alt="pekanbaru event">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/info.lomba.png" alt="info.lomba">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/brosispku.png" alt="brosuspku">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/pkukomunitas.png" alt="pku komunitas">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/riautoday.png" alt="riau today">
                            </div>
                            <div class="flex mb-10">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/infolomba.png" alt="infolomba">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/eventkampus.png" alt="event kampus">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/info-event.png" alt="info event">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/lokerpku1.jpg" alt="lokerpku1">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/arena-lomba.jpeg" alt="arena lomba">
                            </div>
                            <div class="flex">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/eventpelajar.jpeg" alt="event pelajar">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/mahasiswapku.jpeg" alt="mahasiswa pku">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/sudut50kota.jpg" alt="sudut 50 kota">
                                <img class="h-11 md:h-16 mx-auto opacity-50 hover:opacity-100 transition rounded-lg" src="<?php echo BASE_URL; ?>/src/public/img/media-partner/pkukini.jpg" alt="pku kini">
                            </div>
                        </div>
                    </div>
                    <div class="mb-20">
                        <h2 class="text-xl text-center mb-6 text-yellow-500">Supported By :</h2>
                        <img class="h-16 mx-auto opacity-50 hover:opacity-100 transition" src="<?php echo BASE_URL; ?>/src/public/img/politeknik_caltex_riau.png" alt="politeknik caltex riau">
                    </div>
                </div>
            </div>
        </section>

        <footer class=" flex flex-col text-sm font-light font-mono items-center bg-black md:justify-between md:h-7 md:flex-row">
            <div class="mt-5 mb-1 flex md:ml-5 md:mt-5 md:mb-5 text-white">
                &copy;2021&nbsp;<a href="https://www.instagram.com/ihsao2021/" target="_blank" class="text-pink-800 hover:text-pink-900 font-bold">Inter High School Accounting Olympiad (IHSAO)</a>
            </div>
            <div class="mb-5 mt-1 flex md:mr-5 md:mb-5 md:mt-5 text-white">
                Design by&nbsp;<a href="https://www.instagram.com/andikarizkipradana/" target="_blank" class="text-pink-800 hover:text-pink-900 font-bold">Andika Rizki Pradana</a>
            </div>
        </footer>

    </div>

    <!-- Jquery Js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Preloader Js -->
    <script src="/src/public/js/preloader.js"></script>
    <!-- Countdown Js -->
    <script src="<?php echo BASE_URL; ?>/src/public/js/jquery.countdown.min.js"></script>
    <!-- Particles Js -->
    <script src="<?php echo BASE_URL; ?>/src/public/js/particles.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/src/public/js/particles-config.min.js"></script>
    <!-- Alphine Js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script>
        // initialize countdown
        var now = new Date();
        var day = now.getDate();
        var month = now.getMonth() + 1;
        var year = now.getFullYear() + 1;

        $('#event-countdown').countdown({
            date: '08/14/2021 00:00:00', // TODO Date format: 07/27/2017 17:00:00
            offset: +7, // TODO Your Timezone Offset
            day: 'Day',
            days: 'Days',
            hideOnComplete: false
        }, function(container) {
            // alert('Done!');
        });

        // Smooth scrolling for browsers that don't support CSS smooth scrolling
        if (window.getComputedStyle(document.documentElement).scrollBehavior !== 'smooth') {
            document.querySelectorAll('a[href^="#"]').forEach(internalLink => {
                const targetElement = document.querySelector(internalLink.getAttribute('href'));
                if (targetElement) {
                    internalLink.addEventListener('click', (e) => {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                        });
                        e.preventDefault();
                    });
                }
            });
        }

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            // add some class if scroll
            if (scroll >= 50) {
                $("#nav").addClass("bg-ihsao-primary");
                $("#nav").addClass("shadow-2xl");
                $("#nav").addClass("transition-all");

                $("#header-title").removeClass("text-3xl")
                $("#header-title").addClass("text-2xl")
                $("#header-title").addClass("transition-all")

                $("#header-icon").removeClass("h-14");
                $("#header-icon").addClass("h-12");
                $("#header-icon").addClass("transition-all")
            } else {
                $("#header-title").addClass("text-3xl");
                $("#header-icon").addClass("h-14");
                $("#nav").removeClass("bg-ihsao-primary");
                $("#nav").removeClass("shadow-2xl");
            }

            // add active class when clicked
            $("a").click(function() {
                $(this).siblings().removeClass("active");
                $(this).addClass("active");
            });

        });

        // ScrollSpy
        // Cache selectors
        var lastId,
            topMenu = $("#navigation"),
            topMenuHeight = topMenu.outerHeight() + -1,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function() {
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });

        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function(e) {
            var href = $(this).attr("href"),
                offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
            $('html, body').stop().animate({
                scrollTop: offsetTop
            }, 300);
            e.preventDefault();
        });

        // Bind to scroll
        $(window).scroll(function() {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function() {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("font-bold text-yellow-400").addClass("hover:text-gray-300")
                    .end().filter("[href='#" + id + "']").parent().addClass("font-bold text-yellow-400").removeClass("hover:text-gray-300");
            }

            if (id == 'timeline') {
                $("#nav").removeClass("bg-ihsao-primary");
                $("#nav").addClass("bg-black");
            } else {
                $("#nav").removeClass("bg-black");
                $("#nav").addClass("bg-ihsao-primary");
            }
        });
    </script>
</body>

</html>