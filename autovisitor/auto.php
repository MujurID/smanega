<?php
$url = $_GET["url"];
$a = $_GET["a"];
$i = 0;
while($i <= $a){
	$i++;
    echo "$i- ";
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "$url",
    CURLOPT_USERAGENT => 'IDRadiation'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
}
?>