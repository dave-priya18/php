<?php include('include/header.php'); ?>

<div id="content">
<div id="content-wrapper">
<?php include('include/sidebar.php');  ?>
<!-- Main content area -->
<main class="container-fluid">
<div class="row">
<!-- Main content -->
<div class="col-md-8">

<?php

	//URL of TOI
	$url = "https://timesofindia.indiatimes.com/rssfeedstopstories.cms";

	//convert url to xml
	$xml_url = simplexml_load_file($url);


	echo "Get XML from URL <br>";
	echo "<br> <br>";
	
	echo "<pre>";
	print_r($xml_url);
	echo "</pre>";

	$xml_encode = json_encode($xml_url);
	$xml_decode = json_decode($xml_encode);


	echo "Get StdClass Object from XML <br>";
	echo "<pre>";
	print_r($xml_decode);
	echo "</pre>";


	//access value of any variable

	echo $xml_decode->channel->title;
?>

<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>
		
