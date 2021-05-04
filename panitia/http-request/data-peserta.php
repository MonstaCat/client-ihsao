<?php  

$query = array(
	"page" => $_GET[ "draw" ],
	"limit" => intval($_GET[ "length" ]),
	"offset" => intval($_GET[ "start" ]),
	"peserta" => $_GET[ "search" ][ "value" ]
); 

$endpoint = "http://localhost:3000/api/peserta";
$endpoint .= "?";
$endpoint .= http_build_query( $query );

$ch = curl_init();

curl_setopt_array($ch, array(
	CURLOPT_URL => $endpoint,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_HTTPHEADER => array(
		"Authorization: d033e22ae348aeb5660fc2140aec35850c4da997"
	)
));

$output = json_decode( curl_exec( $ch ) );

$dataset = [];

foreach( $output->data as $data ){
	$dataset[] = array(
		$data->nama,
		$data->kelompok->nama_tim,
		$data->is_used,
		$data->is_banned,
		$data->token
	);
}

echo json_encode( array(
	"draw" => $output->page,
	"recordsTotal" => intval( $output->total ),
	"recordsFiltered" => $output->filtered,
	"data" => $dataset
) );

curl_close($ch);

?>