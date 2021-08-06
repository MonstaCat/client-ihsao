<?php  

require '../../config.php';

$query = array(
	"page" => isset( $_GET[ "page" ] ) ? $_GET[ "page" ] : 1,
	"limit" => isset( $_GET[ "limit" ] ) ? intval($_GET[ "limit" ]) : 30,
	"sekolah" => isset( $_GET[ "q" ] ) ? $_GET[ "q" ] : "",
	
); 

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

// mengatur untuk pagination
$currentRecordTotal = intval( $query[ "page" ] ) * intval( $query[ "limit" ] );
$hasMore = $currentRecordTotal < intval($output->total);

// mengatur data record
$items = [];
foreach( $output->data as $dataset ){
	$items[] = [
		"id" => $dataset->id,
		"text" => $dataset->sekolah
	];
}

$results = [
	"items" => $items,
	"total_count" => intval( $output->total ),
	"pagination" => [
		"more" => $hasMore
	]
];

echo json_encode( $results );

curl_close($ch);

?>