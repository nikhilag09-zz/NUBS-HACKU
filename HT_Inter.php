<head>
<link href="bootstrap.css?body=1" media="all" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='jquery-1.9.1.js'></script>
	<script src="bootstrap.js?body=1" type="text/javascript"></script>
	<script src="bootstrap-combobox.js?body=1" type="text/javascript"></script>
</head>	
<?php
 $url="http://open.dapper.net/RunDapp?dappName=HT_international_news&v=1&applyToUrl=http%3A%2F%2Fwww.hindustantimes.com%2Fnews-feed%2Fworld-news%2Fsid113.aspx&filter=true";
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
	echo '<p>'.$element->section[$i]->a_subheading.'</p>';
}
?>
