<!DOCTYPE html>
<html>
<head>
	<title>Choose YOUR News!</title>
	
	<link href="bootstrap.css?body=1" media="all" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='jquery-1.9.1.js'></script>
	<script src="bootstrap.js?body=1" type="text/javascript"></script>
	<script src="bootstrap-combobox.js?body=1" type="text/javascript"></script>
	<script type="text/javascript">

		function national(name) {
			 switch(name)
			{
			  case "EN":
			  document.getElementById("data").innerHTML='<?php include("engineer.php"); $eng = engineer::getData(); echo $eng; ?>';
				break;
			  case "ST":
			  document.getElementById("data").innerHTML='<?php include("housewife.php"); $eng = housewife::getData(); echo $eng; ?>';
				break;
			  case "BU":
			  document.getElementById("data").innerHTML='<?php include("b.php"); $eng = b::getData(); echo $eng; ?>';
				break;		  
				default:
		        document.getElementById("data").innerHTML="";
			}
		}
	</script>
</head>
<body>
	<div class = "container">
		<div class = "well" ALIGN = "CENTER"> 
			<h4>Your NEWS!</h4>
		</div>
		<div class="row">  
			<select class="combobox" id = "profession" onchange="national(document.getElementById('profession').value)">
		      <option>Get your News!</option>
		      <option value="EN">Engineer</option>
		      <option value="ST">Student</option>
		      <option value="BU">Bussinessmen</option>
		      <option value="SP">Sportsmen</option>
		    </select>
		</div>
	    <div id= "data"></div> 
	</div>			
</body>
</html>
