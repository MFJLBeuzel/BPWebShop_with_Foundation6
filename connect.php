<?php
$site_title = 'Maarten Vinyl Shop';
$site_url = 'http://localhost/BPWebShop(foundation)/';
$document_path = $site_url;

$serverName = "MFJL\SQLEXPRESS";
$connectionInfo = array( "Database"=>"WEBSHOP",  "UID"=>"sa",
"PWD"=>"SQL");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

//use the next section for testing
if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>
