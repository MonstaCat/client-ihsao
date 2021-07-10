<?php
include('../../config.php');

$PageTitle = "Input Data Soal";
$PageFile = "soal";

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
                                            Input Data
                                        </h6>
                                        <h2 class="text-xl font-semibold mb-8">
                                            Input Data Soal Multiplechoice
                                        </h2>

                                        <!-- Content Body -->
                                        <form id="form-soal" enctype="multipart/form-data">
                                            
                                        
                                        <div class="flex flex-col">
                                            <div class="md:flex">
                                                <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="soal">
                                                        Pertanyaan Soal
                                                    </label>
                                                    <textarea cols="30" rows="5" placeholder="Pertanyaan..." id="pertanyaan" name="pertanyaan" autocomplete="off" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2"></textarea>
                                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mt-4 mb-2" for="soal">
                                                        Input Gambar
                                                    </label>
                                                    <input type="file" name="soal-gambar" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="md:flex">
                                                <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="soal">
                                                        Centang Jawaban Benar
                                                    </label>
                                                    <div class="flex items-center mb-3">
                                                        <input type="checkbox" id="jawaban1" name="jawaban1-checkbox" value="a">
                                                        <input type=" text" placeholder="Jawaban 1" name="jawaban1-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                        <input type="file" name="jawaban1-gambar" accept="image/*">
                                                    </div>
                                                    <div class="flex items-center mb-3">
                                                        <input type="checkbox" id="jawaban2" name="jawaban2-checkbox" value="b">
                                                        <input type=" text" placeholder="Jawaban 2" name="jawaban2-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                        <input type="file" name="jawaban2-gambar" accept="image/*">
                                                    </div>
                                                    <div class="flex items-center mb-3">
                                                        <input type="checkbox" id="jawaban3" name="jawaban3-checkbox" value="c">
                                                        <input type=" text" placeholder="Jawaban 3" name="jawaban3-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                        <input type="file" name="jawaban3-gambar" accept="image/*">
                                                    </div>
                                                    <div class="flex items-center mb-3">
                                                        <input type="checkbox" id="jawaban4" name="jawaban4-checkbox" value="d">
                                                        <input type=" text" placeholder="Jawaban 4" name="jawaban4-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                        <input type="file" name="jawaban4-gambar" accept="image/*">
                                                    </div>
                                                    <div class="flex items-center mb-3">
                                                        <input type="checkbox" id="jawaban5" name="jawaban5-checkbox" value="e">
                                                        <input type=" text" placeholder="Jawaban 5" name="jawaban5-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                        <input type="file" name="jawaban5-gambar" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button name="btn-tambah" type="submit" class="float-right bg-lightBlue-500 text-white active:bg-lightBlue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                            Submit Data Soal
                                        </button>
                                        </form>
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

    <!-- jQuery-TE -->
    <script type="text/javascript" src="<?= BASE_URL ?>/src/public/plugin/jQuery-TE/jquery-te-1.4.0.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>/api-routing.js"></script>
    <script>
        $("textarea").jqte();

        /**
         * Ketika form soal di submit
         */
        $(`form#form-soal`).submit( function( e ){
            e.preventDefault();

            const _this = $(this);
            const formData = new FormData();
            const MAX_JAWABAN = 5;
            const button = $(`[name="btn-tambah"]`);

            let contentCollection = {}  // penyimpanan form field

            // tambahkan data soal
            const soal = {
                text: _this.find( `[name="pertanyaan"]` ).val(),
                image: _this.find( `[name="soal-gambar"]` )[0].files[0]
            }

            formData.append( `soal_text`, JSON.stringify( soal.text ) );
            formData.append( `soal_image`, soal.image );

            // tambahkan data jawaban
            let jawabanKey = [];
            let jawabanCheckbox = [];
            let jawabanText = [];
            let jawabanGambarName = [];

            for( let i = 1; i <= MAX_JAWABAN; i++ ){
                const collection = {
                    checkbox : _this.find( `[name="jawaban${i}-checkbox"]` ),
                    text : _this.find( `[name="jawaban${i}-text"]` ),
                    gambar : _this.find( `[name="jawaban${i}-gambar"]` )[0].files[0]
                }

                // tambahkan jawaban benar kedalam variable
                if( collection.checkbox.prop( `checked` ) ) {
                    jawabanKey = [ ...jawabanKey, collection.checkbox.val() ]
                }

                jawabanCheckbox = [ ...jawabanCheckbox, collection.checkbox.val() ];
                jawabanText = [ ...jawabanText, collection.text.val() ];

                if( collection.gambar != undefined ) {
                    jawabanGambarName = [ ...jawabanGambarName, collection.gambar.name ]
                    formData.append( `jawaban_image`, collection.gambar );
                }
                else {
                    jawabanGambarName = [ ...jawabanGambarName, false ]
                }
            }

            formData.append( `jawaban_gambar_name`, JSON.stringify( jawabanGambarName ) );
            formData.append( `jawaban_checkbox`, JSON.stringify( jawabanCheckbox ) );
            formData.append( `jawaban_text`, JSON.stringify( jawabanText ) );
            formData.append( `jawaban_key`, JSON.stringify(jawabanKey) );
            
            // kirim request melalui ajax
            fetch( API_SOAL_MULTIPLE, {
                method : "post",
                cors: true, 
                body: formData,
                headers: {
                    "Authorization": API_KEY,
                }
            } )
            .then( response => response.json() )
            .then( response => {
                if(response.success) {
                    alert( `berhasil menambahkan soal` );
                    // window.location = `http://localhost/ihsao/panitia/soal/mchoice.php`
                }
                else {
                    alert( `Terjadi kesalahan` );
                    console.log(response.msg);
                }
            } )
        } )
    </script>

</body>

</html>