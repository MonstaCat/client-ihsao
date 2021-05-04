<?php  

$endpoint = "http://localhost:3000/api/peserta";
$endpoint .= "?";
$endpoint .= http_build_query( $_GET );

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
		$data->tim,
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