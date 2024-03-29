<?php
include('../../config.php');

$PageTitle = "Edit Data Sekolah";
$PageFile = "editsekolah";

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
                                            Edit Data Sekolah
                                        </h2>

                                        <!-- Content Body -->
                                        <form id="form-sekolah">
                                            <div class="flex flex-col">
                                                <div class="md:flex">
                                                    <input type="hidden" name="id">
                                                    <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="sekolah">
                                                            Nama Sekolah
                                                        </label>
                                                        <input type="text" placeholder="Nama Sekolah" id="sekolah" name="sekolah" autocomplete="off" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-1 px-2">
                                                    </div>
                                                    <div class="md:w-full mr-3 mb-6 md:mb-0 flex-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="sekolah">
                                                            Jenis sekolah
                                                        </label>
                                                        <select id="jenis_sekolah" name="is_smk" style="width: 100%;">
                                                            <option value="0">SMA</option>
                                                            <option value="1">SMK</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="float-right bg-yellow-500 text-white active:bg-yellow-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                Edit Data Sekolah
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

    <!-- Select 2 Js -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="<?php echo BASE_URL ?>/api-routing.js"></script>

    <script type="text/javascript">
        $('#jenis_sekolah').select2({
            placeholder : "Jenis sekolah"
        });

        // get data sekolah
        const currentQueryString = new URLSearchParams(window.location.search);
        const sekolahId = currentQueryString.get("id");
        const endpoint = `${API_SEKOLAH}?id=${sekolahId}`;
        const fetchConfig = {
            mode : "cors",
            method : 'get',
            headers : {
                "Authorization" : API_KEY
            }
        }

        fetch( endpoint, fetchConfig )
        .then( response => response.json() )
        .then( response => {
            fillForm( response.data[0] );
        } )

        /**
         * fungsi yang digunakan untuk mengisi data
         * kedalam form yang telah dibuat
         */
        function fillForm( dataset ) {
            $( `[name="id"]` ).val( dataset.id );
            $( `[name="sekolah"]` ).val( dataset.sekolah );
        }

        /**
         * fungsi saat form disubmit
         */
        $(`#form-sekolah`).submit(function(e) {
            e.preventDefault();

            $(`button[ type="submit" ]`).text(`Loading...`);

            let serializeData = $(this).serializeArray()
            let formData = {};

            for (let i = 0; i < serializeData.length; i++) {
                const data = {
                    [serializeData[i].name]: serializeData[i].value
                };

                formData = {
                    ...formData,
                    ...data
                };
            }


            formData = JSON.stringify(formData)

            fetch(API_SEKOLAH, {
                    method: `put`,
                    mode: `cors`,
                    headers: {
                        "Authorization": API_KEY,
                        "Content-Type": "application/json"
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(result => {
                    $(`button[ type="submit" ]`).text(`Submit Data Sekolah`);

                    alert(result.msg);

                    if (result.code == 200) {
                        $(`input[ name="sekolah" ] `).val("");
                        $(`input[ name="sekolah" ] `).focus();

                        window.location = `${BASE_URL}/panitia/sekolah/dsekolah.php`;
                    }
                })
        })
    </script>
</body>

</html>
<script src="<?php echo BASE_URL ?>/panitia/templates/footer.js"></script>