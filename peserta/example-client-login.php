<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form>
	<label for="username">username</label>
	<input type="text" name="username">
	<label for="password">password</label>
	<input type="password" name="password">
	<button type="submit">login</button>
</form>

<!-- kode login akan tampil disini -->
<!-- 200 = user berhasil login -->
<!-- 401 = user salah -->
<!-- 403 = user telah digunakan -->
<h3 class="user"></h3>

</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.1/socket.io.min.js"></script>
<script>
	const socket = io( `ws://localhost:3000` );

	/**
	 * memastikan bahwa socket io sudah aktif
	 */
	socket.on( "connect", function(){
		authentication();
	} )

	var form = document.querySelector( `form` );

	/**
	 * contoh autentikasi login
	 */
	function authentication()
	{
		form.onsubmit = function (e) {
			e.preventDefault();

			const input = {
				username: e.target.querySelector( `input[name="username"]` ).value,
				password: e.target.querySelector( `input[name="password"]` ).value,
			}

			fetch( `http://localhost:3000/api/peserta/login`, {
				method: `POST`,
				headers: {
					"Content-Type": "application/json"
				},
				body: JSON.stringify( input ),
			} )
			.then( response => response.json() )
			.then( data => createConnection( data ) );
		}
	}

	/**
	 * menambahkan peserta baru kedalam koneksi socket io
	 */
	function createConnection( data )
	{
		// jika user berhasil login
		if(data.code == 200){
			socket.emit( `set-user-token`, data.data.token );

			socket.on( `success-login`, msg => {
				document.querySelector( `.user` ).innerHTML = `Status Code: ${msg}`;
			} )
		}
		else {
			document.querySelector( `.user` ).innerHTML = `Status Code: ${data.code}`;
		}
	}
</script>