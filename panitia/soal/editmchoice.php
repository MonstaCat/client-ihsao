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
                                        <form id="form-soal" enctype="multipart/form-data">


                                            <div class="flex flex-col">
                                                <div class="md:flex">
                                                    <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="soal">
                                                            Pertanyaan Soal
                                                        </label>
                                                        <textarea cols="30" rows="5" placeholder="Pertanyaan..." id="pertanyaan" name="soal" autocomplete="off" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2"></textarea>
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mt-4 mb-2" for="soal">
                                                            Input Gambar
                                                        </label>
                                                        <input type="file" name="soal_image" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="md:flex">
                                                    <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="soal">
                                                            Centang Jawaban Benar
                                                        </label>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban_id[]">
                                                            <input type="checkbox" id="jawaban1" id="jawaban1_is_key" name="jawaban_key[]" value="a">
                                                            <input type=" text" placeholder="Jawaban 1" name="jawaban[]" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                            <input type="file" name="jawaban_image[]" accept="image/*">
                                                        </div>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban_id[]">
                                                            <input type="checkbox" id="jawaban2" name="jawaban_key[]" value="b">
                                                            <input type=" text" placeholder="Jawaban 2" name="jawaban[]" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                            <input type="file" name="jawaban_image[]" accept="image/*">
                                                        </div>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban_id[]">
                                                            <input type="checkbox" id="jawaban3" name="jawaban_key[]" value="c">
                                                            <input type=" text" placeholder="Jawaban 3" name="jawaban[]" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                            <input type="file" name="jawaban_image[]" accept="image/*">
                                                        </div>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban_id[]">
                                                            <input type="checkbox" id="jawaban4" name="jawaban_key[]" value="d">
                                                            <input type=" text" placeholder="Jawaban 4" name="jawaban[]" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                            <input type="file" name="jawaban_image[]" accept="image/*">
                                                        </div>
                                                        <div class="flex items-center mb-3">
                                                            <input type="hidden" name="jawaban_id[]">
                                                            <input type="checkbox" id="jawaban5" name="jawaban_key[]" value="e">
                                                            <input type=" text" placeholder="Jawaban 5" name="jawaban[]" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2 mr-2" style="margin-left: 10px;">
                                                            <input type="file" name="jawaban_image[]" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="sekolah">
                                                        Jenis Soal
                                                    </label>
                                                    <select id="is_smk" name="is_smk" style="width: 100%;">
                                                        <option value="0">SMA</option>
                                                        <option value="1">SMK</option>
                                                    </select>
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
    <!-- Select 2 Js -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL ?>/api-routing.js"></script>
    <script type="text/javascript">

        async function MCDataset( url, apiKey )
        {
            const f = await fetch( url, {
                mode    : "cors",
                method  : "get",
                headers : {
                    "Authorization" : apiKey
                }
            } )
            return f.json();
        }

        const currentQueryString = new URLSearchParams(window.location.search);
        const soalId    = currentQueryString.get("id");
        const endpoint  = `${API_SOAL_MULTIPLE}?id=${soalId}&with_assoc=true`;
        
        /**
         * mengisi tiap form
         */
        MCDataset( endpoint, API_KEY )
        .then( response => {
            const data = response.data[0];
            const MAX_JAWABAN = $( `[name="jawaban[]"]` ).length;

            $( `[name="soal"]` ).val( data.soal );

            for( let i = 0; i < MAX_JAWABAN; i++ ) {
                const dataJawaban = data.jawaban[i];

                $( `[name="jawaban_id[]"]` )[i].value = dataJawaban.id;
                $( `[name="jawaban[]"]` )[i].value = (dataJawaban.jawaban == `null`) ? "" : dataJawaban.jawaban;
                $( `[name="jawaban_key[]"]` )[i].checked = dataJawaban.is_key;

            }

            const jenisSekolah = $( `[name="is_smk"]` ).find( `option` );

            for( let i = 0; i < jenisSekolah.length; i++ ) {
                if( Number( jenisSekolah[i].value ) == Number( data.is_smk ) ) {
                    jenisSekolah[i].setAttribute( `selected`, true )
                }
            }
        } )

        /**
         * kirim data request ke server
         */
        $( `#form-soal` ).submit( e => {
            e.preventDefault();

            const formData = new FormData;

            formData.append( `soal_id`, soalId );

            // tambahkan data soal kedalam form data
            const soal = {
                soal  : $(`[name="soal"]`),
                image : $( `[name="soal_image"]` )[0].files[0],
                is_smk : $(`[name="is_smk"]`).val()
            }

            formData.append( `soal`, soal.soal.val() );
            formData.append( `is_smk`, soal.is_smk );
            formData.append( `soal_image`, soal.image );
            formData.append( `soal_image_name`, soal.image?.name );

            // tambahkan data jawaban kedalam formdata
            for( let i = 0; i < $(`[name="jawaban[]"]`).length; i++ ) {
                const jawaban = {
                    id          : $(`[name="jawaban_id[]"]`)[i].value,
                    key         : $(`[name="jawaban_key[]"]`)[i].value,
                    jawaban     : $(`[name="jawaban[]"]`)[i].value,
                    is_key      : $(`[name="jawaban_key[]"]`)[i].checked,
                    image_name  : $(`[name="jawaban_image[]"]`)[i].files[0]?.name,
                    image       : $(`[name="jawaban_image[]"]`)[i].files[0]
                }

                formData.append( `jawaban_id[]`, jawaban.id );
                formData.append( `jawaban_key[]`, jawaban.key );
                formData.append( `jawaban[]`, jawaban.jawaban );
                formData.append( `jawaban_is_key[]`, jawaban.is_key );
                formData.append( `jawaban_image_name[]`, jawaban.image_name );
                formData.append( `jawaban_image[]`, jawaban.image );

            }

            // kirim request ke server
            $(`[name="btn-tambah"]`).text( `Loading...` );
            fetch( API_SOAL_MULTIPLE, {
                mode : `cors`,
                method : "put",
                body : formData,
                headers : {
                    "Authorization" : API_KEY,
                }
            } )
            .then( response => response.json() )
            .then( response => {
                alert( response.msg );

                $(`[name="btn-tambah"]`).text(`Submit Data Soal`);

                if( response.code == 200 ) {
                    const redirectPage = `${BASE_URL}/panitia/soal/mchoice.php`;

                    window.location = redirectPage;
                }
            } )
        } )
    </script>
</body>

</html>
<script src="<?php echo BASE_URL ?>/panitia/templates/footer.js"></script>