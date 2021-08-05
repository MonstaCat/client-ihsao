<footer>

</footer>
<script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL ?>/api-routing.js"></script>
<script>
	const socket = io( API_ORIGIN );
	const token  = localStorage.getItem( `token` );
	const email  = localStorage.getItem( `email` );

	socket.on( `connect`, () => {
		socket.emit( `join-to-system`, token );
		console.log("socket connected");
	} )	

	socket.on( `banned`, token => {
		window.location = `${BASE_URL}/peserta`;
	} )
</script>