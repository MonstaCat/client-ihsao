<?php  

require '../../config.php';

$query = array(
	"page" => isset( $_GET[ "page" ] ) ? $_GET[ "page" ] : 1,
	"limit" => isset( $_GET[ "limit" ] ) ? intval($_GET[ "limit" ]) : 30,
	"nama_tim" => isset( $_GET[ "q" ] ) ? $_GET[ "q" ] : "",
	"token" => $_GET[ "token" ],
); 

$endpoint = BASE_URL_API . "api/lomba";
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

// mengatur untuk pagination
$currentRecordTotal = intval( $query[ "page" ] ) * intval( $query[ "limit" ] );
$hasMore = $currentRecordTotal < intval($output->total);

// mengatur data record
$items = [];
foreach( $output->data as $dataset ){
	$items[] = [
		"id" => $dataset->id,
		"text" => $dataset->lomba
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