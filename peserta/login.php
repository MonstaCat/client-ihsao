<?php
include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IHSAO 2021 - Login</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>/src/public/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/src/public/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/src/public/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL; ?>/src/public/img/favicon/site.webmanifest">
    <!-- Tailwind Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/public/css/tailwind.css">
    <!-- Preloader Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/public/css/preloader.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/public/css/custom.css">
</head>

<body class="bg-ihsao-primary overflow-x-hidden lg:overflow-x-auto">
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
                        <a href="<?php echo BASE_URL; ?>#beranda" id="section-1">Beranda</a>
                    </div>
                    <div class="uppercase text-sm ml-5 flex items-center font-mono tracking-wide hover:text-gray-300">
                        <a href="<?php echo BASE_URL; ?>#tentang" id="section-2">Tentang IHSAO</a>
                    </div>
                    <div class="uppercase text-sm ml-5 flex items-center font-mono tracking-wide hover:text-gray-300">
                        <a href="<?php echo BASE_URL; ?>#kategori" id="section-3">Kategori Perlombaan</a>
                    </div>
                    <div class="uppercase text-sm ml-5 mr-9 flex items-center font-mono tracking-wide hover:text-gray-300">
                        <a href="<?php echo BASE_URL; ?>#timeline">Timeline</a>
                    </div>
                    <div>
                        <a href="" class="ml-5 mt-4 mb-4 flex items-center w-32 h-10 justify-center font-mono tracking-widest bg-ihsao-yellow text-black border-2 border-black box-shadow-black hover:bg-ihsao-purple hover:text-white">Masuk!</a>
                    </div>
                </nav>
            </div>
        </header>

        <main class="container mx-auto my-auto mb-auto flex justify-between">
            <div class="text-white invisible w-0 m-0 p-0 md:visible md:w-1/2">
                Space for content
            </div>

            <div class="w-full h-auto border-2 border-black bg-yellow-500 box-shadow-black mx-6 md:w-1/2">
                <div class="flex justify-between">
                    <div class="flex mx-4 my-2 left-0">
                        <div class="border-2 border-black rounded-full bg-red-600" style="height: 20px; width: 20px;">
                        </div>
                        <div class="ml-2 border-2 border-black rounded-full bg-yellow-400" style="height: 20px; width: 20px;">
                        </div>
                        <div class="ml-2 border-2 border-black rounded-full bg-green-800" style="height: 20px; width: 20px;">
                        </div>
                    </div>
                </div>

                <form action="#" id="form-login" class="text-left my-6 mx-4">
                    <div class="bg-ihsao-purple p-1 px-2 mb-5 border-2 border-black box-shadow-black">
                        <label class="block text-white" for="email">Email:</label>
                        <input class="bg-transparent w-full text-xl focus:outline-none text-white mt-1" type="email" id="email" autocomplete="off">
                    </div>
                    <div class="bg-ihsao-purple p-1 px-2 mb-6 border-2 border-black box-shadow-black">
                        <label class="block text-white" for="password">Password:</label>
                        <input class="bg-transparent w-full text-xl focus:outline-none text-white mt-1" type="password" id="password">
                    </div>
                    <button type="submit" class="flex items-center w-full h-10 mb-9 justify-center font-mono tracking-widest bg-ihsao-yellow text-black border-2 border-black box-shadow-black">Masuk!</button>
                </form>
            </div>
        </main>

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

    <!-- Alphine Js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
    <script src="../api-routing.js"></script>
    <script>
        const socket = io(`http://localhost:3000`);
        // const API_PESERTA = `http://localhost:3000/api/peserta`;

        /**
         * jalankan semua fungsi jika socket sudah terhubung
         */
        socket.on(`connect`, () => {
            authenticaion();
        })

        /**
         * fungsi untuk melakukan login
         */
        authenticaion = () => {
            $(`#form-login`).submit(e => {
                e.preventDefault();

                $(`button[type='submit']`).text(`Loading...`);

                const request = JSON.stringify({
                    email: $(`#email`).val(),
                    password: $(`#password`).val(),
                })

                fetch(`${API_PESERTA}/login`, {
                        mode: `cors`,
                        method: "POST",
                        body: request,
                        headers: {
                            "Content-Type": `application/json`
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        setUserData(data)
                        $(`button[type='submit']`).text(`Masuk!`);
                    });

            })
        }

        setUserData = data => {
            console.log(data);

            if (data.code == 200) {
                socket.emit(`bind-peserta`, data.data.token);

                localStorage.setItem(`email`, data.data.email);
                localStorage.setItem(`token`, data.data.token);
                // sementara
                window.location = `http://localhost/ihsao/peserta/home.php`;
            } else {
                alert(data.msg);
            }

        }








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

            if (id == 'sec-4') {
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