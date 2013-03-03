<?php
 $url="http://open.dapper.net/RunDapp?dappName=TOI_international_news&v=1&applyToUrl=http%3A%2F%2Ftimesofindia.indiatimes.com%2Fworld&filter=true";
	 $proxy="10.3.100.212";
 $port="8080";
  $ch = curl_init();
 curl_setopt($ch,CURLOPT_PROXYPORT,$port);
 curl_setopt($ch, CURLOPT_PROXY, $proxy);
	error_log("url=".$url);
 curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

$output=curl_exec($ch);
//error_log("output=".$output);
curl_close($ch);
$element =  new SimpleXMLElement($output);

for ($i=0; $i < $element->count() - 1; $i++) { 
	echo '<b>'.$element->section[$i]->a_heading.'</b></br>';
	// echo '<p>'.$element->section[$i]->a_subheading.'</p>';
}
?>
