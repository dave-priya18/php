
<?php include('include/header.php'); ?>

<div id="content">
<div id="content-wrapper">
<?php include('include/sidebar.php');  ?>
<!-- Main content area -->
<main class="container-fluid">
<div class="row">
<!-- Main content -->
<div class="col-md-8">

<div style="text-align:left">
<a href="index.php" > Home </a>
</div>
<div style="text-align:right">
<a href="Priya-01-31-UserProfile.php"> Next </a>
</div>

<?php

echo "Index Array <br> <br>";

//index array declaration
	$_index_array = array();

//index array initalization
	$_index_array[] = 1;
	$_index_array[] = 2;
	$_index_array[] = 3;
	$_index_array[] = 4;
	$_index_array[] = 5;

//print index array

	//print object
	echo "<pre>";
	print_r($_index_array);
	echo "</pre>";

// index array Object creation
	$_index_array_obj = new stdClass();

// pasting value of index array into standard class object
	foreach($_index_array as $key => $value){
		$_index_array_obj->$key = $value;
	}


echo "Index Object <br> <br>";

//print object
	echo "<pre>";
	print_r($_index_array_obj);
	echo "</pre>";


//assosiative array declaration
	echo "Assosiative Array <br> <br>";
	$_array = array ();

//assosiative array initialization
	$_array = array(

				'fname' => "Priya",
				'lname' => "Dave",
				'emailid' => "dave.priya18@gmail.com",
				'password' => "Priya18!!",
				'username' =>  "priya1811_"
			);

//print assosiative array 

	echo "<pre>";
	print_r($_array);
	echo "</pre>";

//create assosiative array standard object
	$_array_obj = new stdClass();


//pasting value of assosiative array into standard class object

	foreach($_array as $key => $value){
		//echo $_array_obj->$key;
		$_array_obj->$key = $value;
	}

echo "Assosiative Object <br> <br>";
//print assosiative object

	echo "<pre>";
	print_r($_array_obj);
	echo "</pre>";


echo "Array inside Array <br> <br>";
//emurated array

	$_array_inarray = array();

	$_array_inarray = array(

						array(	
							'fname' => "Priya",
							'lname' => "Dave",
							'emailid' => "dave.priya18@gmail.com",
							'password' => "Priya18!!",
							'username' =>  "priya1811_"

						),

						array(	
							'fname' => "Parth",
							'lname' => "Sheth",
							'emailid' => "shethparth7@gmail.com",
							'password' => "Sheth!@34",
							'username' =>  "ParthS75"

						),

						array(	
							'fname' => "Ramya",
							'lname' => "Dave",
							'emailid' => "ramya_dave111@gmail.com",
							'password' => "GJ18@9585",
							'username' =>  "radave27"

						),

						array(	
							'fname' => "Kavisha",
							'lname' => "Shah",
							'emailid' => "kvshah@gmail.com",
							'password' => "Kavi@123",
							'username' =>  "Kavi_Shah"

						)


					);



//print emurated array 

	echo "<pre>";
	print_r($_array_inarray);
	echo "</pre>";

//create emulated array standard object
	$_array_inarray_obj = new stdClass();


//pasting value of emulated array into standard class object

	foreach($_array_inarray as $key => $value){
		$_array_inarray_obj->$key = new stdClass();
		foreach($value as $field_key => $info_value){
			$_array_inarray_obj->$key->$field_key = $info_value;
		}
	}
echo "Array inside Array Object <br> <br>";
//print emulated object

	echo "<pre>";
	print_r($_array_inarray_obj);
	echo "</pre>";


echo "MultiDimensional Array"."<br> <br>";

//multi-dimensional array

	$_array_multiarray = array();

	$_array_multiarray = array(
							array(
									'fname' => "Priya",
									'lname' => "Dave",
									'location' => array(
										'city' => "Gandhinagar",
										'state' => "Gujarat"
									)
								),
							array(
									'fname' => "Parth",
									'lname' => "Sheth",
									'location' => array(
										'city' => "Ahmedabad",
										'state' => "Gujarat"
									)
								),
							array(
									'fname' => "Ramya",
									'lname' => "Dave",
									'location' => array(
										'city' => "Gandhinagar",
										'state' => "Gujarat"
									)
								),
							array(
									'fname' => "Kavisha",
									'lname' => "Shah",
									'location' => array(
										'city' => "Ahmedabad",
										'state' => "Gujarat"
									)
								)
		
						);

//print multidimensional array

	echo "<pre>";
	print_r($_array_multiarray);
	echo "</pre>";

//create multidimenstional array standard object
	$_array_multiarray_obj = new stdClass();


//pasting value of emulated array into standard class object

	foreach($_array_multiarray as $key => $value){

		$_array_multiarray_obj->$key = new stdClass();

		foreach ($value as $index_key => $array_value) {

			if(is_array($array_value)){

				$_array_multiarray_obj->$key->$index_key = new stdClass();

				foreach ($array_value as $address_key => $address_value) {

					$_array_multiarray_obj->$key->$index_key->$address_key = $address_value;
				}
			}
			else{

				$_array_multiarray_obj->$key->$index_key = $array_value;
			}
		}
		
	}

echo "MultiDimensional Object"."<br> <br>";
//print multidimenstional object

	echo "<pre>";
	print_r($_array_multiarray_obj);
	echo "</pre>";

	
?>



<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>

