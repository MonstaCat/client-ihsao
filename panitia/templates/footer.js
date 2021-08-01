const CHECK_CREDENTIAL = false;
const LOGOUT = true;

$( `#logout-button` ).click( e => {
	logout( LOGOUT );
} )

function logout( destroy ) {
	const token = localStorage.getItem( `token` );
	const redirPath = `${BASE_URL}/panitia`;

	fetch( `${API_ADMIN}/logout`, {
		mode 	: "cors",
		method 	: "post",
		body 	: JSON.stringify( { token : token } ),
		headers : {
			"Authorization" : API_KEY,
			"Content-Type"	: "application/json"
		}
	} )
	.then( response => response.json() )
	.then( response => {
		
		if( response.logout && destroy ) {
			localStorage.removeItem( `token` );
			window.location = redirPath;
		}
	} )
	.catch( e =>  {
		window.location = redirPath;
	})
}

$( document ).ready( function() {
	logout( CHECK_CREDENTIAL );
} )
