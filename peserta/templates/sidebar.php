<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-center text-2xl md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap uppercase font-bold p-4 px-0" href="index.html">
            IHSAO 2021
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-center text-2xl md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap uppercase font-bold p-4 px-0" href="index.html">
                            IHSAO 2021
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="my-2 md:min-w-full" />

            <div class="flex flex-col pt-2 pb-4">
                <div class="items-center">
                    <div class="mt-1">
                        <h3 class="text-center text-base text-gray-900 font-semibold leading-8" id="user-name"></h3>
                        <div class="text-center text-gray-400 text-xs font-semibold">
                            <p class="user-sekolah"></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="my-2 md:min-w-full" />

            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/peserta/home.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "home" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-th-large w-5 mr-2 text-sm text-blueGray-300"></i>
                        Dashboard
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/peserta/ujian.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "ujian" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-tv w-5 mr-2 text-sm text-blueGray-300"></i>
                        Ujian
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/peserta/hasil.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "hasil" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-bookmark w-5 mr-2 text-sm text-blueGray-300"></i>
                        Hasil
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/peserta/leaderboard.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "leaderboard" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-trophy w-5 mr-2 text-sm text-blueGray-300"></i>
                        Leaderboard
                    </a>
                </li>

                <!-- Divider -->
                <hr class="my-2 md:min-w-full" />

                <li class="items-center">
                    <a href="#" id="logout-button" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "logout" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-lock w-5 mr-2 text-sm text-blueGray-300"></i>
                        Logout
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<script defer="" type="text/javascript">
    const UToken = localStorage.getItem( `token` );

    getUserDetail( API_PESERTA, `token=${UToken}` )
    .then( response => {
        document.querySelector( `#user-name` ).innerText = response.data[0].nama;
        document.querySelector( `.user-sekolah` ).innerText = response.data[0].Sekolah.sekolah;
    } )
</script>