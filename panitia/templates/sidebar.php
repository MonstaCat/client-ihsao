<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="index.html">
            Admin Panel IHSAO 2021
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="notification-dropdown">
                    <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Logout</a>
                </div>
            </li>
            <li class="inline-block relative">
                <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex">
                        <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="<?php echo BASE_URL; ?>/panitia/assets/img/ihsao.png" /></span>
                    </div>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="user-responsive-dropdown">
                    <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Logout</a>
                </div>
            </li>
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="index.html">
                            Admin Panel IHSAO 2021
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
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Fitur Peserta
            </h6>

            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/peserta/dpeserta.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "dpeserta" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                        Data Peserta
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/sekolah/dsekolah.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "dsekolah" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                        Data Sekolah
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/tim/dtim.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "dtim" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                        Data Tim
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/soal/mchoice.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "mchoice" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                        Data Multiplechoice
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/kasus/dkasus.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "dkasus" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                        Data Soal Kasus
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/kasus/jawabankasus.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "jawabankasus" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-alt mr-2 text-sm text-blueGray-300"></i>
                        Data Jawaban Soal Kasus
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Fitur Pengawas
            </h6>

            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/monitoring/monitoring.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "monitoring" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-ban mr-2 text-sm text-blueGray-300"></i>
                        Monitoring
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Input Data
            </h6>

            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/soal/soal.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "soal" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-upload mr-2 text-sm text-blueGray-300"></i>
                        Input Soal Multi
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/kasus/kasus.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "kasus" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-upload mr-2 text-sm text-blueGray-300"></i>
                        Input Soal Kasus
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/peserta/peserta.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "peserta" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-upload mr-2 text-sm text-blueGray-300"></i>
                        Input data peserta
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/tim/tim.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "tim" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-upload mr-2 text-sm text-blueGray-300"></i>
                        Input data tim
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/sekolah/sekolah.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "sekolah" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-upload mr-2 text-sm text-blueGray-300"></i>
                        Input data sekolah
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Generate Token
            </h6>

            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/token/tpeserta.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "tpeserta" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-upload mr-2 text-sm text-blueGray-300"></i>
                        Generate Token Peserta
                    </a>
                </li>

                <li class="items-center">
                    <a href="<?php echo BASE_URL; ?>/panitia/token/tpanitia.php" class="text-xs uppercase py-3 font-bold block <?= ($PageFile) == "tpanitia" ? "text-pink-500 hover:text-pink-600" : "text-blueGray-700 hover:text-blueGray-500" ?>">
                        <i class="fas fa-file-upload mr-2 text-sm text-blueGray-300"></i>
                        Generate Token Panitia
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>