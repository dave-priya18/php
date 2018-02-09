<html>
	<head>
		<title> Array </title>
	</head>

	<body>
		
		<form method="get">
		Input Indexed Array:
		<input type="text" name="input_index_array">
		<br> <br>

		Input Assosiative Array:
		<input type="text" name="input_associative_key">
		<input type="text" name="input_associative_value">

		Input MultiDimensional Array:
		<input type="text" name="input_multi_key">
		<input type="text" name="input_multi_array1">
		<input type="text" name="input_multi_array2">
		<input type="text" name="input_multi_array3">
		<input type="text" name="input_multi_array4">

		<button name="Push" value="Insert"> Push </button>

		</form>

	</body>


</html>

<?php

	$_indexarray = array();
	$_associative_array = array();
	$_multidimensional_array =array();
	$_multidimensional = " ";
	$_multiarray_value = array();
	$_multiarray_value = array();
	$_multiarray_key = array();
	if(isset($_GET['Push'])){
		$array_value = $_GET['input_index_array'];

		$_indexarray = explode(" ",$array_value);

		echo "<pre>";
		print_r($_indexarray);
		echo "</pre>";

		$array_key = $_GET['input_associative_key'];
		$array_value = $_GET['input_associative_value'];

		$_arraykey = explode(" ", $array_key);
		$_arrayvalue = explode(" ", $array_value);


		foreach ($_arraykey as $key=> $value) {
			$_associative_array[$value] = $_arrayvalue[$key];	
		}

		echo "<pre>";
		print_r($_associative_array);
		echo "</pre>";

		array_push($_multiarray_key, $_GET['input_multi_key']);
		array_push($_multiarray_value, $_GET['input_multi_array1']);
		array_push($_multiarray_value, $_GET['input_multi_array2']);
		array_push($_multiarray_value, $_GET['input_multi_array3']);
		array_push($_multiarray_value, $_GET['input_multi_array4']);

		
		foreach($_multiarray_key as $keyi => $valuei){

			foreach ($_multiarray_value as $key => $value){
				$_multidimensional .= $_multiarray_value[$key];
			}
			$_multidimensional_array[$valuei] = $_multidimensional;

		}
		
			
		echo "<pre>";
		print_r($_multidimensional_array);
		echo "</pre>";

	}

	


	
?>


