<?php
class b{
	public static function getData(){
		$h = '<div class = "row">';
		$h = $h. '<div class = "span1">';
		$h = $h. '</div>'; 

		$url="http://open.dapper.net/RunDapp?dappName=HT_bussiness_news&v=1&applyToUrl=http%3A%2F%2Fwww.hindustantimes.com%2Fbusiness-news%2Fsid311.aspx&filter=true";
			 $proxy="10.3.100.212";
		 $port="8080";
		  $ch = curl_init();
		 curl_setopt($ch,CURLOPT_PROXYPORT,$port);
		 curl_setopt($ch, CURLOPT_PROXY, $proxy);
		 curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

		$output=curl_exec($ch);
		curl_close($ch);
		$element =  new SimpleXMLElement($output);

			$h = $h. '<div class = "span4">';
				$h = $h. '<b><u><h3>Business</h3></u></b>';
					$count = $element->count() - 1;
					for ($i=0; $i < $count && $i < 4; $i++) { 
						$h = $h. '<div class = "">';
						$h = $h. '<h5>'.htmlentities($element->section[$i]->a_heading, ENT_QUOTES).'</h5></br>';
						$h = $h. '<p>'.htmlentities($element->section[$i]->a_subheading, ENT_QUOTES).'</p>';
						$h = $h. '</div>';
					}

			$url="http://open.dapper.net/RunDapp?dappName=HT_technology_news&v=1&applyToUrl=http%3A%2F%2Fwww.hindustantimes.com%2Ftechnology%2Fsid121.aspx&filter=true";
			 $proxy="10.3.100.212";
		 	$port="8080";
		  	$ch = curl_init();
		 	curl_setopt($ch,CURLOPT_PROXYPORT,$port);
		 	curl_setopt($ch, CURLOPT_PROXY, $proxy);
		 	curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

			$output=curl_exec($ch);
			curl_close($ch);

			$element =  new SimpleXMLElement($output);

				$h = $h. '<b><u><h3>Technology</h3></u></b>';
					$count = $element->count() - 1;
					for ($i=0; $i < $count && $i < 2; $i++) { 
						$h = $h. '<div class = "">';
						$h = $h. '<h5>'.htmlentities($element->section[$i]->a_heading, ENT_QUOTES).'</h5></br>';
						$h = $h. '<p>'.htmlentities($element->section[$i]->a_subheading, ENT_QUOTES).'</p>';
						$h = $h. '</div>';
					}			
				$h = $h. '</div>';
			$url="http://open.dapper.net/RunDapp?dappName=TOI_national_news&v=1&applyToUrl=http%3A%2F%2Ftimesofindia.indiatimes.com%2Findia&filter=true";
			 $proxy="10.3.100.212";
		 $port="8080";
		  $ch = curl_init();
		 curl_setopt($ch,CURLOPT_PROXYPORT,$port);
		 curl_setopt($ch, CURLOPT_PROXY, $proxy);
		 curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

		$output=curl_exec($ch);
		curl_close($ch);
		$element =  new SimpleXMLElement($output);

			$h = $h. '<div class = "span4">';
				$h = $h. '<b><u><h3>National</h3></u></b>';
					$count = $element->count() - 1;
					for ($i=0; $i < $count && $i < 7; $i++) { 
						$h = $h. '<div class = "">';
						$h = $h. '<h5>'.htmlentities($element->section[$i]->a_heading, ENT_QUOTES).'</h5></br>';
						$h = $h. '<p>'.htmlentities($element->section[$i]->a_subheading, ENT_QUOTES).'</p>';
						$h = $h. '</div>';
					}	
				$h = $h. '</div>';
				$url="http://open.dapper.net/RunDapp?dappName=TH_international_news&v=1&applyToUrl=http%3A%2F%2Fwww.thehindu.com%2Fnews%2Finternational%2F&filter=true";
			 $proxy="10.3.100.212";
		 $port="8080";
		  $ch = curl_init();
		 curl_setopt($ch,CURLOPT_PROXYPORT,$port);
		 curl_setopt($ch, CURLOPT_PROXY, $proxy);
		 curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

		$output=curl_exec($ch);
		curl_close($ch);
		$element =  new SimpleXMLElement($output);

			$h = $h. '<div class = "span3">';
				$h = $h. '<b><u><h3>International</h3></u></b>';
					$count = $element->count() - 1;
					for ($i=0; $i < $count && $i < 4; $i++) { 
						$h = $h. '<div class = "">';
						$h = $h. '<h5>'.htmlentities($element->section[$i]->a_heading, ENT_QUOTES).'</h5></br>';
						$h = $h. '<p>'.htmlentities($element->section[$i]->a_subheading, ENT_QUOTES).'</p>';
						$h = $h. '</div>';
					}	
				$h = $h. '<a href="http://www.telegraphindia.com/"<p>Get More...</p></a>';	
				$h = $h. '</div>';			
		$h = $h. '</div>';
		return $h;
	}
}		
?>