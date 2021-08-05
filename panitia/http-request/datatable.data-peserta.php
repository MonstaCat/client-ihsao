<?php  

require '../../config.php';

$query = array(
	"page" => ceil( $_GET[ "start" ] / $_GET[ "length" ] ) + 1,
	"limit" => intval($_GET[ "length" ]),
	"peserta" => $_GET[ "search" ][ "value" ],
	"token" => $_GET[ "token" ],
);

if( $query[ "page" ] < 1 ) {
	$query[ "page" ] = 1;
}

$endpoint = BASE_URL_API . "api/peserta";
$endpoint .= "?";
$endpoint .= http_build_query( $query );

$ch = curl_init();

curl_setopt_array($ch, array(
	CURLOPT_URL => $endpoint,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_HTTPHEADER => array(
		"Authorization: {$query['token']}"
	)
));

$output = json_decode( curl_exec( $ch ) );

foreach( $output->data as $data ){
	$dataset[] = array(
		$data->email,
		$data->kelompok->nama_tim,
		$data->is_used,
		$data->is_banned,
		$data->token,
		$data->nama,
		$data->Sekolah->sekolah
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