<footer>

</footer>
<script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
<script>
	const socket = io(API_ORIGIN);
	const token = localStorage.getItem(`token`);
	const email = localStorage.getItem(`email`);

	socket.on(`connect`, () => {
		socket.emit(`join-to-system`, token);
		console.log("socket connected");
	})

	socket.on(`reset-mc`, token => {
		localStorage.removeItem(`status_ujian`);
		window.location.reload();
	})

	socket.on(`banned`, token => {
		const sekolah = localStorage.getItem(`isSmk`);
		const endpoint = `${API_SOAL_MULTIPLE}/jawaban/submit/${token}/${sekolah}?allow_banned=true`
		const conf = {
			mode: `cors`,
			method: "post",
			headers: {
				"Content-Type": `application/json`
			}
		}

		fetch(endpoint, conf)
			.then(response => response.json())
			.then(response => {
				const redirPath = `${BASE_URL}/peserta`
				window.location = redirPath;
				// localStorage.setItem( `status_ujian`, `Sudah dikerjakan` );
			})
	})

	const CHECK_CREDENTIAL = false;
	const LOGOUT = true;
	const logoutButton = document.getElementById('logout-button')

	if (logoutButton) {
		logoutButton.onclick = e => {
			const conf = confirm(`Keluar dari sistem ?`);

			if (conf)
				logout(LOGOUT);
		}
	}

	function logout(destroy) {
		const sekolah = localStorage.getItem(`isSmk`);
		const token = localStorage.getItem(`token`);
		const redirPath = `${BASE_URL}/peserta`;

		fetch(`${API_PESERTA}/logout/${token}/${sekolah}`, {
				mode: "cors",
				method: "post",
				body: JSON.stringify({
					token: token
				}),
				headers: {
					"Authorization": API_KEY,
					"Content-Type": "application/json"
				}
			})
			.then(response => response.json())
			.then(response => {
				if (response.logout && destroy) {
					localStorage.removeItem(`token`);
					socket.emit(`logout`, token);
					window.setTimeout(() => {
						window.location = redirPath;
					}, 300)
				}

				// if (response.code == 403) {
				// 	window.location = redirPath;
				// }
			})
			.catch(e => {
				window.location = redirPath;
			})
	}

	logout(CHECK_CREDENTIAL);
</script>