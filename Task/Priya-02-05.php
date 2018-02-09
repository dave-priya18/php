
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

	//Array Declaration

	$movies = array();

	//Array Initialization - Method 1

	// $movies = array(
	// 	"comedy" => array(
	// 		0=> "Pink Panther",
	// 		1=> "John English",
	// 		2=> "See no evil hear no evil"),

	// 	"action" => array(
	// 		0=> "Die Hard",
	// 		1=> "Expandables"),

	// 	"epic" => array(
	// 		0=> "the Lord of the Ring" ),

	// 	"romance" => array(

	// 		0=> "Romeo and Juliet")

	// 	);

	//Array Initialization - Method 2

	// $movies['comedy'] = array( "Pink Panther", "John English", "See no evil hear no evil" );
	// $movies['action'] = array( "Die Hard", "Expandables");
	// $movies['epic'] = array( "The Lord of the Rings" );
	// $movies['romance'] = array( "Romeo and Juliet" );
	

	//Array Initialization - Method 3

	$movies['comedy'] = array(
		0=> "Pink Panther",
		1=> "John English",
		2=> "See no evil hear no evil"
	);
	$movies['action'] = array(
		0=> "Die Hard",
		1=> "Expandables"
	);
	$movies['epic'] = array(
		0=>"The Lord of the Rings"
	);
	$movies['romance'] = array(
		0=>"Romeo and Juliet"
	);

	//Print Array

	echo "Array Movies: <br> <br>";
	echo "<pre>";
	print_r($movies);
	echo "</pre>";

	echo "<br> <br>";
	echo "------------------------------------------------------------- <br>";

	
	//Object Initalization

	$object_movies = new stdClass();


	//Value from Array to stdClass Object

	foreach ($movies as $key => $genre) {
		if(is_array($genre)){
			$object_movies->$key = new stdClass();	
			foreach ($genre as $index_key => $movie_value) {
				$object_movies->$key->$index_key = $movie_value;
			}
		}
		
	}

	
	//Print Object

	echo "Object Movies: <br> <br>";
	echo "<pre>";
	print_r($object_movies);
	echo "</pre>";

	echo "<br> <br>";

	echo "------------------------------------------------------------- <br>";

	//Array to JSON Encode


	$jsonarray_movies_encode = json_encode($movies);

	//Print JSON - Encode

	echo "Array - JSON Movies Encryption: <br> <br>";
	echo "<pre>";
	print_r($jsonarray_movies_encode);
	echo "</pre>";

	echo "<br> <br>";

	echo "------------------------------------------------------------- <br>";

	//JSON to Array

	$jsonarray_movies_decode = json_decode($jsonarray_movies_encode);

	//Print JSON- Decode

	echo "Array - JSON Movies Decryption: <br> <br>";
	echo "<pre>";
	print_r($jsonarray_movies_decode);
	echo "</pre>";

	echo "<br> <br>";

	echo "------------------------------------------------------------- <br>";


	//serialize 

	$serialize_movies = serialize($movies);


	//Print Serialize

	echo "Serialize Movies: <br> <br>";
	echo "<pre>";
	print_r($serialize_movies);
	echo "</pre>";

	echo "<br> <br>";

	echo "------------------------------------------------------------- <br>";


	//Unserialize

	$unserialize_movies = unserialize($serialize_movies);

	//Print Unserialize

	echo "Unserialize Movies: <br> <br>";
	echo "<pre>";
	print_r($unserialize_movies);
	echo "</pre>";

	echo "<br> <br>";

	echo "------------------------------------------------------------- <br>";

	//xml declaration and initilization

	$xml_movies = "<?xml version='1.0' encoding='UTF-8'?>

		<movies>
			<comedy>
				<index> Pink Panther </index>
				<index> John English </index>
				<index> See no evil hear no evil </index>
			</comedy>

			<action>
				<index> Die Hard </index>
				<index> Expendables </index>
			</action>

			<Epic>
				<index> The Lord of the Rings </index>
			</Epic>

			<Romance>
				<index> Romeo and Juliet </index>
			</Romance>
		</movies>";

	//print xml
	echo "XML Movies: <br> <br>";
	echo "<pre>";
	$xml = simplexml_load_string($xml_movies);
	print_r($xml);
	echo "</pre>";

	echo "<br> <br>";

	echo "------------------------------------------------------------- <br>";

	//convert xml-object to stdClass Object

	$xml_encode = json_encode($xml);
	$xml_decode = json_decode($xml_encode);


	echo "SimpleXMLElement Object to Standard Object Class: <br> <br>";
	echo "<pre>";
	print_r($xml_decode);
	echo "</pre>";

	echo "------------------------------------------------------------- <br>";







	?>

	
<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>
		
