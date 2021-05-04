<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IHSAO 2021 - Login</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../src/public/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../src/public/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../src/public/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../src/public/img/favicon/site.webmanifest">

    <link rel="stylesheet" href="../src/public/particles/particles.css">
    <link rel="stylesheet" href="../src/public/css/tailwind.css">
</head>

<body class="bg-ihsao-primary">

    <div class="flex flex-col h-screen">

        <header class="py-3 text-white text-base bg-ihsao-primary">
            <div class="container mx-auto flex justify-between">
                <div class="flex left-0">
                    <a href="" class="flex items-center">
                        <div class="block font-extrabold text-2xl tracking-widest text-ihsao-green">
                            <p>IHSAO</p>
                            <p>2021</p>
                        </div>
                        <img class="h-16 m-1" src="../src/public/img/ihsao png.png" alt="">
                    </a>
                </div>
                <div class="flex right-0">
                    <a href="" class="ml-14 flex items-center">Beranda</a>
                    <a href="" class="ml-14 flex items-center">Tentang IHSAO</a>
                    <a href="" class="ml-14 flex items-center">Kategori Olimpiade</a>
                    <a href="" class="ml-14 flex items-center">Timeline</a>
                    <a href=""
                        class="ml-14 mt-4 mb-4 flex items-center w-32 h-10 justify-center font-mono tracking-widest bg-ihsao-yellow text-black border-2 border-black box-shadow-black">Masuk!</a>
                </div>
            </div>
        </header>

        <main class="container mx-auto mt-14 mb-auto flex justify-between">
            <div class="text-white">
                Space for content
            </div>
            <div class="w-1/2 h-auto border-2 border-black bg-yellow-500 box-shadow-black">
                <div class="flex justify-between">
                    <div class="flex mx-4 my-2 left-0">
                        <div class="border-2 border-black rounded-full bg-red-600" style="height: 20px; width: 20px;">
                        </div>
                        <div class="ml-2 border-2 border-black rounded-full bg-yellow-400"
                            style="height: 20px; width: 20px;">
                        </div>
                        <div class="ml-2 border-2 border-black rounded-full bg-green-800"
                            style="height: 20px; width: 20px;">
                        </div>
                    </div>
                </div>

                <form action="#" id="form-login" class="text-left my-6 mx-4">
                    <div class="bg-ihsao-purple p-1 px-2 mb-5 border-2 border-black box-shadow-black">
                        <label class="block text-white" for="email">Email:</label>
                        <input class="bg-transparent w-full text-xl focus:outline-none text-white mt-1" type="email"
                            id="email" autocomplete="off">
                    </div>
                    <div class="bg-ihsao-purple p-1 px-2 mb-6 border-2 border-black box-shadow-black">
                        <label class="block text-white" for="password">Password:</label>
                        <input class="bg-transparent w-full text-xl focus:outline-none text-white mt-1" type="password"
                            id="password">
                    </div>
                    <button type="submit"
                        class="flex items-center w-full h-10 mb-9 justify-center font-mono tracking-widest bg-ihsao-yellow text-black border-2 border-black box-shadow-black">Masuk!</button>
                </form>
            </div>
        </main>

        <footer
            class="flex text-sm font-bold font-mono items-center justify-between bg-yellow-500 border-t-2 h-7 border-black">
            <div class="flex ml-5">
                &copy;2021&nbsp;<a href="https://www.instagram.com/andikarizkipradana/" target="_blank"
                    class="text-pink-800 hover:text-pink-900">IHSAO</a>
            </div>
            <div class="flex mr-5">
                Design by&nbsp;<a href="https://www.instagram.com/andikarizkipradana/" target="_blank"
                    class="text-pink-800 hover:text-pink-900">Andika Rizki Pradana</a>
            </div>
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
    <script>
        const socket = io( `http://localhost:3000` );
        const API_PESERTA = `http://localhost:3000/api/peserta`;

        /**
         * jalankan semua fungsi jika socket sudah terhubung
         */
        socket.on( `connect`, () => {
            authenticaion();
        } )    

        /**
         * fungsi untuk melakukan login
         */
        authenticaion = () => {
            $( `#form-login` ).submit( e => {
                e.preventDefault();

                $( `button[type='submit']` ).text( `Loading...` );

                const request = JSON.stringify({
                    email: $( `#email` ).val(),
                    password: $( `#password` ).val(),
                })

                fetch( `${API_PESERTA}/login`, {
                    mode: `cors`,
                    method: "POST",
                    body: request,
                    headers: {
                        "Content-Type": `application/json`
                    }
                } )
                .then( response => response.json() )
                .then( data => { 
                    setUserData( data ) 
                    $( `button[type='submit']` ).text( `Masuk!` );
                } );

            } )
        }

        setUserData = data => {

            socket.emit( `bind-peserta`, data.data.token );

            if( data.code == 403 ){
                alert( data.msg );
            }
            else {
                localStorage.setItem( `email`, data.data.email );
                localStorage.setItem( `token`, data.data.token );
                // sementara
                window.location = `http://localhost/ihsao/peserta/home.php`;
            }

        }
    </script>
</body>

</html>