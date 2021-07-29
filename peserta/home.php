<?php
include('../config.php');

$PageTitle = "Home Peserta";
$PageFile = "home";

include_once('templates/header.php');
?>

<body class="text-blueGray-700 antialiased bg-blueGray-50">
	<noscript>You need to enable JavaScript to run this app.</noscript>
	<div id="root">
		<?php include_once('templates/sidebar.php'); ?>
		<div class="relative md:ml-64">

			<!-- Content -->
			<div class="px-4 md:px-10 mx-auto w-full mt-16">
				<div class="flex flex-wrap">
					<!-- Content Header -->
					<h2 class="text-2xl font-semibold mb-6">
						Profil Peserta
					</h2>
					<div class="w-full mb-12 xl:mb-0">
						<div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded shadow-lg bg-white">
							<div class="rounded-t mb-0 px-4 py-3 bg-transparent">
								<div class="flex flex-wrap items-center">
									<div class="relative w-full max-w-full flex-grow flex-1">

										<!-- Content Body -->
										<div class="w-72 mt-5 mb-5 ml-3">
											<div class="bg-white shadow-lg rounded-lg py-3">
												<div class="p-2">
													<h3 class="text-center text-xl text-gray-900 font-medium leading-8" id="user-name">Loading...</h3>
													<div class="text-center text-gray-400 text-xs font-semibold mb-5">
														<p id="user-tim">Loading...</p>
													</div>
													<table class="text-xs my-3">
														<tbody>
															<tr>
																<td class="px-2 py-2 text-gray-500 font-semibold flex">Asal Sekolah</td>
																<td class="px-2 py-2" id="user-sekolah">Loading...</td>
															</tr>
															<tr>
																<td class="px-2 py-2 text-gray-500 font-semibold flex">Email</td>
																<td class="px-2 py-2" id="user-email">Loading...</td>
															</tr>
															<tr>
																<td class="px-2 py-2 text-gray-500 font-semibold flex">Pembimbing</td>
																<td class="px-2 py-2" id="user-pembimbing">Loading...</td>
															</tr>
															<!-- <tr>
																<td class="px-2 py-2 text-gray-500 font-semibold flex">ID</td>
																<td class="px-2 py-2">P-1955301018</td>
															</tr> -->
														</tbody>
													</table>

												</div>
											</div>
										</div>
										<!-- End of content body -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Content Header -->
					<h2 class="text-2xl font-semibold mb-6 mt-10">
						Tim
					</h2>
					<div class="w-full mb-12 xl:mb-0">
						<div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded shadow-lg bg-white">
							<div class="rounded-t mb-0 px-4 py-3 bg-transparent">
								<div class="flex flex-wrap items-center">
									<div class="relative w-full max-w-full flex-grow flex-1">

										<!-- Content Body -->
										<div class="flex" id="tim-list-container">
											<p>Loading...</p>
											<!-- <div class="w-72 mt-5 mb-5 ml-3">
												<div class="bg-white shadow-lg rounded-lg py-3">
													<div class="p-2">
														<h3 class="text-center text-xl text-gray-900 font-medium leading-8">Andika Rizki Pradana</h3>
														<div class="text-center text-gray-400 text-xs font-semibold mb-5">
															<p>Tim Labor A</p>
														</div>
														<table class="text-xs my-3">
															<tbody>
																<tr>
																	<td class="px-2 py-2 text-gray-500 font-semibold flex">Asal Sekolah</td>
																	<td class="px-2 py-2">SMKS Labor Binaan FKIP UR Pekanbaru</td>
																</tr>
																<tr>
																	<td class="px-2 py-2 text-gray-500 font-semibold flex">Email</td>
																	<td class="px-2 py-2">andikarizkipradanaa@gmail.com</td>
																</tr>
																<tr>
																	<td class="px-2 py-2 text-gray-500 font-semibold flex">Pembimbing</td>
																	<td class="px-2 py-2">Kurnia Rahman Agus</td>
																</tr>
																<tr>
																	<td class="px-2 py-2 text-gray-500 font-semibold flex">ID</td>
																	<td class="px-2 py-2">P-1955301018</td>
																</tr>
															</tbody>
														</table>

													</div>
												</div>
											</div> -->
										</div>
										<!-- End of content body -->
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<?php include_once('templates/footer.php'); ?>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		async function getUserDetail(endpoint, queryString) {
			const user = await fetch( `${endpoint}?${queryString}`, {
				mode   : "cors",
				method : "get"
			} )

			return await user.json(); 
		}

		const UToken = localStorage.getItem("token");

		getUserDetail( API_PESERTA, `token=${UToken}` )
		.then( response => {
			const user = response.data[0];

			$( `#user-name` ).text( user.nama );
			$( `#user-tim` ).text( user.kelompok.nama_tim );
			$( `#user-sekolah` ).text( user.Sekolah.sekolah );
			$( `#user-email` ).text( user.email );
			$( `#user-pembimbing` ).text( user.kelompok.nama_pembina );
			localStorage.setItem( `isSmk`, user.Sekolah.is_smk )

			const TId = user.kelompok.id

			getUserDetail( API_PESERTA, `tim=${TId}` )
			.then( response => {
				const elContainer = $( `#tim-list-container` );

				elContainer.html("");

				for( let user of response.data ) {
					const element = `
					<div class="w-72 mt-5 mb-5 ml-3">
					<div class="bg-white shadow-lg rounded-lg py-3">
					<div class="p-2">
					<h3 class="text-center text-xl text-gray-900 font-medium leading-8">${user.nama}</h3>
					<div class="text-center text-gray-400 text-xs font-semibold mb-5">
					<p>${user.kelompok.nama_tim}</p>
					</div>
					<table class="text-xs my-3">
					<tbody>
					<tr>
					<td class="px-2 py-2 text-gray-500 font-semibold flex">Asal Sekolah</td>
					<td class="px-2 py-2">${user.Sekolah.sekolah}</td>
					</tr>
					<tr>
					<td class="px-2 py-2 text-gray-500 font-semibold flex">Email</td>
					<td class="px-2 py-2">${user.email}</td>
					</tr>
					<tr>
					<td class="px-2 py-2 text-gray-500 font-semibold flex">Pembimbing</td>
					<td class="px-2 py-2">${user.kelompok.nama_pembina}</td>
					</tr>
					</tbody>
					</table>

					</div>
					</div>
					</div>`;

					elContainer.append( element );
				}
			} )
		} )
	</script>
</body>

</html>