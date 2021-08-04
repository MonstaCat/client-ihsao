<?php
include('../../config.php');

$PageTitle = "Panel Mulai Ujian";
$PageFile = "beginexam";

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
                                            Tekan tombol untuk memulai ujian
                                        </h6>
                                        <h2 class="text-xl font-semibold mb-8">
                                            Panel Ujian
                                        </h2>

                                        <!-- Content Body -->
                                        <button id="button-ujian" class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 w-full" type="button">
                                            Mulai Ujian
                                        </button>

                                        <div class="my-12" id="loading-indicator" x-data="{ width: '0' }" x-init="
                                        $watch('width', value => { 
                                            if (value > 100) { 
                                                width = 100 
                                            } if (value == 0) { 
                                                width = 10 
                                            }
                                        })">

                                            <!-- Start Regular with text version -->
                                            <div id="loading-bar" class="bg-gray-200 rounded h-6 mt-5 hidden" role="progressbar" :aria-valuenow="width" aria-valuemin="0" aria-valuemax="100">
                                                <div class="bg-orange-500 rounded h-6 text-center text-white text-sm transition mb-2" :style="`width: ${width}%; transition: width 2s;`" x-text="`${width}%`">
                                                </div>
                                                <p class="justify-center flex" id="loading-description"></p>
                                                <!-- <p class="justify-center flex" id="load-cache" x-text="(width >= 1 && width < 50) ? 'Memuat asset...' : ''"></p>
                                                <p class="justify-center flex" x-text="(width >= 50 && width < 80) ? 'Inisialisasi...' : ''"></p>
                                                <p class="justify-center flex" x-text="(width >= 80) ? 'Finishing...' : ''"></p> -->
                                            </div>
                                            <!-- End Regular with text version -->

                                            <!-- <div class="mt-10 mx-32">
                                                Value loading
                                                <input class="border border-gray-500 rounded" type="number" class="form-input" x-model="width" min="1" max="100">
                                            </div> -->
                                        </div>
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

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script type="text/javascript" src="<?php echo BASE_URL ?>/api-routing.js"></script>

    <script>
        var loadingBar = document.getElementById("loading-bar");
        var buttonText = document.getElementById("button-ujian");
        var loadingIndicator = $( "#loading-indicator" );
        var loadingDescription = $( `#loading-description` );
        
        buttonText.onclick = function() {
            loadingBar.style.display = "block";
            
            loadCache();
        }

        /**
         * load semua cache dan konfigurasi disini
         */
        async function loadCache()
        {
            buttonText.setAttribute( `disabled`, true );
            buttonText.classList.add( `disabled:opacity-80` )

            loadMC();
        }

        /**
         * memuat soal mc
         */
        function loadMC( page = 1, offset = 0 ) {
            return new Promise( PromiseResponse => { 
                let total = 0;
                let currentOffset = offset;
                let cluster = page;
                let limit   = 30;
                let endpoint = `${API_SOAL_MULTIPLE}/cache?page=${cluster}&limit=${limit}`;

                loadingIndicator.attr( `x-data`, `{ width : ${20} }` )

                fetch( endpoint, { headers : { Authorization : API_KEY } } )
                .then( response => response.json() )
                .then( response => {
                    total = response.total;
                    currentOffset += response.data.length;
                    
                    
                    loadingIndicator.attr( `x-data`, `{ width : ${40} }` )
                    
                    if( currentOffset >= total ) {
                        currentOffset = total;
                    }

                    const loadMcMsg  = `Memuat soal mc (${currentOffset} / ${total})`
                    const loadMcCond = `(width >= 1 && width < 50) ? '${loadMcMsg}' : ''` 
                    
                    loadingDescription.attr( `x-text`,  loadMcCond);
                    if( currentOffset < total ) {
                        cluster++;
                        loadMC( cluster, currentOffset );
                    }
                    else {
                        PromiseResponse( true )
                    }
                } )
            } )
        }
    </script>

</body>

</html>
<script src="<?php echo BASE_URL ?>/panitia/templates/footer.js"></script>