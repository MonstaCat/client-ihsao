<?php
include('../../config.php');

$PageTitle = "Edit Data Soal";
$PageFile = "editmchoice";

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
                                            Edit Data
                                        </h6>
                                        <h2 class="text-xl font-semibold mb-8">
                                            Edit Data Soal Multiplechoice
                                        </h2>

                                        <!-- Content Body -->
                                        <form id="form-soal">
                                            <div class="flex flex-col">
                                                <div class="md:flex">
                                                    <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="soal">
                                                            Pertanyaan Soal
                                                        </label>
                                                        <textarea cols="30" rows="5" placeholder="Pertanyaan..." id="pertanyaan" name="pertanyaan" autocomplete="off" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2"></textarea>
                                                        <input type="hidden" name="pertanyaan-id">
                                                    </div>
                                                </div>
                                                <div class="md:flex">
                                                    <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="soal">
                                                            Centang Jawaban Benar
                                                        </label>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban1-id">
                                                            <input type="checkbox" id="jawaban1" name="jawaban1-checkbox" value="">
                                                            <input type=" text" placeholder="Jawaban 1" name="jawaban1-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2" style="margin-left: 10px;">
                                                        </div>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban2-id">
                                                            <input type="checkbox" id="jawaban2" name="jawaban2-checkbox" value="">
                                                            <input type=" text" placeholder="Jawaban 2" name="jawaban2-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2" style="margin-left: 10px;">
                                                        </div>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban3-id">
                                                            <input type="checkbox" id="jawaban3" name="jawaban3-checkbox" value="">
                                                            <input type=" text" placeholder="Jawaban 3" name="jawaban3-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2" style="margin-left: 10px;">
                                                        </div>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban4-id">
                                                            <input type="checkbox" id="jawaban4" name="jawaban4-checkbox" value="">
                                                            <input type=" text" placeholder="Jawaban 4" name="jawaban4-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2" style="margin-left: 10px;">
                                                        </div>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban5-id">
                                                            <input type="checkbox" id="jawaban5" name="jawaban5-checkbox" value="">
                                                            <input type=" text" placeholder="Jawaban 5" name="jawaban5-text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2" style="margin-left: 10px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="float-right bg-yellow-500 text-white active:bg-yellow-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                Edit Data Soal
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
    <script type="text/javascript" src="../../api-routing.js"></script>

    <script type="text/javascript">
        const currentQueryString = new URLSearchParams( window.location.search );
        const soalId = currentQueryString.get( "id" );
        const endpoint = `${API_SOAL_MULTIPLE}?id=${soalId}`;
        
        fetch( endpoint, {
            mode: "cors",
            method: "get",
            headers: {
                "Authorization": API_KEY,
                "Content-Type": "application/json"
            }
        } )
        .then( response => response.json() )
        .then( response => {
            const dataset = response.data;

            setSoalValue( dataset );
        } )

        /**
         * fungsi yang digunakan untuk mengisi value ke setiap
         * input element
         */
        function setSoalValue( dataset )
        {
            $( `[name="pertanyaan"]` ).val( dataset[0].soal );
            $( `[name="pertanyaan-id"]` ).val( dataset[0].id );

            const MAX_OPSI = dataset[0].opsi.length;

            for( let i = 0; i < MAX_OPSI; i++ )
            {
                const opsiList = dataset[0].opsi[i];
                const jawaban = {
                    id : $( `[name="jawaban${i+1}-id"]` ),
                    checkbox : $( `[name="jawaban${i+1}-checkbox"]` ),
                    text :    $( `[name="jawaban${i+1}-text"]` )
                } 

                jawaban.checkbox.prop( 'checked', opsiList.is_true );
                jawaban.id.val( opsiList.id );
                jawaban.text.val( opsiList.keterangan );
            }
        }

        $(`#form-soal`).submit( function( e) {
            e.preventDefault();

            const _this = $( this );
            const formData = new FormData();

            const soal = {
                id: _this.find( `[name="pertanyaan-id"]` ),
                text: _this.find( `[name="pertanyaan"]` )
            }

            formData.append( `soal_id`, JSON.stringify( soal.id.val() ) );
            formData.append( `soal_text`, JSON.stringify( soal.text.val() ) );

            const MAX_OPSI = 5;
            let opsi = {
                id       : [],
                checkbox : [],
                text     : [] 
            };

            for( let i = 1; i <= MAX_OPSI; i++ ) {
                const dataset = {
                    id : _this.find( `[name="jawaban${i}-id"]` ),
                    checkbox : _this.find( `[name="jawaban${i}-checkbox"]` ),
                    text : _this.find( `[name="jawaban${i}-text"]` )
                }

                opsi.checkbox = [ ...opsi.checkbox, dataset.checkbox.prop( `checked` ) ]; 
                opsi.text     = [ ...opsi.text, dataset.text.val() ]; 
                opsi.id       = [ ...opsi.id, dataset.id.val() ]; 
            }

            formData.append( "opsi_id", JSON.stringify( opsi.id ) )
            formData.append( "opsi_checkbox", JSON.stringify( opsi.checkbox ) )
            formData.append( "opsi_text", JSON.stringify( opsi.text ) )

            fetch( API_SOAL_MULTIPLE, {
                mode: `cors`,
                method: "put",
                headers: {
                    "Authorization" : API_KEY,
                },
                body : formData
            } )
            .then( response => response.json() )
            .then( response => {
                console.log(response);
            } )
        } )

    </script>
</body>

</html>