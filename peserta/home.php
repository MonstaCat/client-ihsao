<!DOCTYPE html>
<html>
<head>
	<title>Halaman home</title>
</head>
<body>
	<div id="greeting"></div>
</body>
</html>

<script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
<script>
	const socket = io( `http://localhost:3000` );
	const token  = localStorage.getItem( `token` );
	const email  = localStorage.getItem( `email` );

	socket.on( `connect`, () => {
		socket.emit( `join-to-system`, token );
		createGreeting();
	} )	

	createGreeting = () => {
		document.getElementById( `greeting` ).innerHTML = `SELAMAT DATANG, ${token}`;
	}

	socket.on( `banned`, token => {
		window.location = "http://localhost/ihsao/peserta/login.php";
	} )
</script>