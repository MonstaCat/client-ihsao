<?php  

require '../../config.php';

$query = array(
	"page" => ceil( $_GET[ "start" ] / $_GET[ "length" ] ) + 1,
	"limit" => intval($_GET[ "length" ]),
	"sekolah" => $_GET[ "search" ][ "value" ],
	
);

if( $query[ "page" ] < 1 ) {
	$query[ "page" ] = 1;
}

$endpoint = BASE_URL_API . "api/sekolah";
$endpoint .= "?";
$endpoint .= http_build_query( $query );
$admin_token = $_GET["token"];

$ch = curl_init();

curl_setopt_array($ch, array(
	CURLOPT_URL => $endpoint,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_HTTPHEADER => array(
		"Authorization: {$admin_token}"
	)
));

$output = json_decode( curl_exec( $ch ) );

$dataset = [];

foreach( $output->data as $data ){
	$dataset[] = array(
		$data->id,
		$data->sekolah,
		$data->is_smk
	);
}

echo json_encode( array(
	"draw" => $_GET[ "draw" ],
	"recordsTotal" => intval( $output->total ),
	"recordsFiltered" => $output->filtered,
	"data" => $dataset ?? []
) );

curl_close($ch);

?>