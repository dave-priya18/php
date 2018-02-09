
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
<a href="Priya-01-30.php"> Next </a>
</div>

<?php
	//array initialization

	//   	$_alphabet_array = array ();

	//   	$_alphabet_array[] = "A";
	//   	$_alphabet_array[] = "B";
	// $_alphabet_array[] = "C";
	// $_alphabet_array[] = "D";
	// $_alphabet_array[] = "E";
	// $_alphabet_array[] = "F";
	// $_alphabet_array[] = "G";
	// $_alphabet_array[] = "H";
	// $_alphabet_array[] = "I";
	// $_alphabet_array[] = "J";
	// $_alphabet_array[] = "K";
	// $_alphabet_array[] = "L";
	// $_alphabet_array[] = "M";
	// $_alphabet_array[] = "N";
	// $_alphabet_array[] = "O";
	// $_alphabet_array[] = "P";
	// $_alphabet_array[] = "Q";
	// $_alphabet_array[] = "R";
	// $_alphabet_array[] = "S";
	// $_alphabet_array[] = "T";
	// $_alphabet_array[] = "U";
	// $_alphabet_array[] = "V";
	// $_alphabet_array[] = "W";
	// $_alphabet_array[] = "X";
	// $_alphabet_array[] = "Y";
	// $_alphabet_array[] = "Z";

	// echo "<pre>";
	// print_r($_alphabet_array);
	//echo "</pre>";

// 	$_assosiative_array = array();

// 	$_assosiative_array['A'] = "a";
// 	$_assosiative_array['B'] = "b";
// 	$_assosiative_array['C'] = "c";
// 	$_assosiative_array['D'] = "d";
// 	$_assosiative_array['E'] = "e";
// 	$_assosiative_array['F'] = "f";
// 	$_assosiative_array['G'] = "g";
// 	$_assosiative_array['H'] = "h";
// 	$_assosiative_array['I'] = "i";
// 	$_assosiative_array['J'] = "j";
// 	$_assosiative_array['K'] = "k";
// 	$_assosiative_array['L'] = "l";
// 	$_assosiative_array['M'] = "m";
// 	$_assosiative_array['N'] = "n";
// 	$_assosiative_array['O'] = "o";
// 	$_assosiative_array['P'] = "p";
// 	$_assosiative_array['Q'] = "q";
// 	$_assosiative_array['R'] = "r";
// 	$_assosiative_array['S'] = "s";
// 	$_assosiative_array['T'] = "t";
// 	$_assosiative_array['U'] = "u";
// 	$_assosiative_array['V'] = "v";
// 	$_assosiative_array['W'] = "w";
// 	$_assosiative_array['X'] = "x";
// 	$_assosiative_array['Y'] = "y";
// 	$_assosiative_array['Z'] = "z";


// 	// echo "<pre>";
// 	// print_r($_assosiative_array);
// 	// echo "</pre>";


// 	$_first_two_array = array();
// 	foreach ($_assosiative_array as $key => $value) {
// 	$_first_two_array[$value] = array(
// 	$value."a" => array(),
// 	$value."b" => array(),
// 	$value."c" => array(),
// 	$value."d" => array(),
// 	$value."e" => array(),
// 	$value."f" => array(),
// 	$value."g" => array(),
// 	$value."h" => array(),
// 	$value."i" => array(),
// 	$value."j" => array(),
// 	$value."k" => array(),
// 	$value."l" => array(),
// 	$value."m" => array(),
// 	$value."n" => array(),
// 	$value."o" => array(),
// 	$value."p" => array(),
// 	$value."q" => array(),
// 	$value."r" => array(),
// 	$value."s" => array(),
// 	$value."t" => array(),
// 	$value."u" => array(),
// 	$value."v" => array(),
// 	$value."w" => array(),
// 	$value."x" => array(),
// 	$value."y" => array(),
// 	$value."z" => array()

// 	);



// 	}

// 	$_find_name = array();
// 	foreach ($_first_two_array as $first_two_key => $first_two_value) {
// 		foreach($first_two_value as $name_initial => $name_key){
// 			$_find_name[$name_initial] = array();
// 		}
// 	}

// 	$name = "Aarti";
// 	$name = strtolower($name);

// 	$input_name = array();

// 	//echo $name[0];

// 	foreach($_first_two_array as $firsttwo_initital => $firsttwo_resident){
// 	// echo $firsttwo_resident;
// 	// exit;

// 		if($name[0] == $firsttwo_initital){
// 			foreach($firsttwo_resident as $nkey => $nvalue){

// 				$two_letter = $name[0].$name[1];
// 				if($two_letter == $nkey){
				
// 					$input_name[] = $name;
// 					$input_name[] = "aakash";
				
// 				}

// 			}
// 		}

// 	}		


// echo "<pre>";
// print_r($input_name);
// echo "</pre>";

//Index Array

$_num_array = array();
$_num_array[] = 0;
$_num_array[] = 1;
$_num_array[] = 2;
$_num_array[] = 3;
$_num_array[] = 4;
$_num_array[] = 5;
$_num_array[] = 6;
$_num_array[] = 7;
$_num_array[] = 8;
$_num_array[] = 9;

echo "Index Array"."<br>";
//print_r
echo "<pre>";
print_r($_num_array);
echo "</pre>";

//access last value of array
$last_value = 0;

foreach ($_num_array as $key => $value) {
	$last_value = $value;
}

echo "Last Value of array is: ".$last_value."<br>";

$_indexnum_array = array();

$_indexnum_array['starts with 1'] = 1;
$_indexnum_array['starts with 2'] = 2;
$_indexnum_array['starts with 3'] = 3;
$_indexnum_array['starts with 4'] = 4;
$_indexnum_array['starts with 5'] = 5;
$_indexnum_array['starts with 6'] = 6;
$_indexnum_array['starts with 7'] = 7;
$_indexnum_array['starts with 8'] = 8;
$_indexnum_array['starts with 9'] = 9;

echo "<br> <br>";
echo "Assosiative Array"."<br>";
//print_r
echo "<pre>";
print_r($_indexnum_array);
echo "</pre>";

//access last value of array
$last_value = 0;
$last_key =0;

foreach ($_indexnum_array as $key => $value) {
	$last_key = $key;
	$last_value = $value;
}
echo "Last Key of array is: ".$last_key."<br>";
echo "Last Value of array is: ".$last_value."<br>";


$_multinum_array = array();

$_multinum_array = array(
					'1' => array( 	0 => 1,
									1 => 11,
									2 => 111,
									3 => 121),
					'2' => array(
									0 => 2,
									1 => 21,
									2 => 22,
									3 => 222),
					"3" => array(
									0 => 3,
									1 => 33,
									2 => 343,
									3 => 3456),
					"4" => array(
									0 => 44,
									1 => 404,
									2 => 456,
									3 => 4890),
					"5" => array(
									0 => 56,
									1 => 56.55,
									2 => 580),
					"6" => array(
									0 => 6,
									1 => 61,
									2 => 67,
									3 => 600),
					"7" => array(
									0 => 7,
									1 => 77),
					"8" => array(
									0 => 8,
									1 => 81,
									2 => 890,
									3 => 8880),
					"9" => array()
				);

echo "<br> <br>";
echo "Array inside Array"."<br>";

//print_r
echo "<pre>";
print_r($_multinum_array);
echo "</pre>";

$last_key = 0;
$last_value = 0;
foreach ($_multinum_array as $key => $value) {
	foreach ($value as $index_key => $num_value) {
		$last_key = $index_key;
		$last_value = $num_value;
	}
}

echo "Last Key: ".$last_key."<br>";
echo "Last Value: ".$last_value."<br>";

$copy_multinum_array = array();
foreach ($_multinum_array as $key => $value) {
	foreach ($value as $index_key => $num_value) {
		$copy_multinum_array[$key] = $value;
	}
}

echo "<br> <br>";
echo "Copy- Array inside Array"."<br>";
//print_r
echo "<pre>";
print_r($copy_multinum_array);
echo "</pre>";


$multi_array = array();

$multi_array =  array(
					0 => array(
						'fname' => "Priya",
						'lname' => "Dave",
						'address' => array(
								'flat no' => '498/A/2',
								'sector' => '1 C',
								'landmark' => 'Opp. Samdarshan Aashram'),
						'city' => 'Gandhinagar',
						'state' => 'Gujarat'
					),
					1 => array(
						'fname' => "Parth",
						'lname' => "Sheth",
						'address' => array(
								'flat no' => '10, Vardayini Society',
								'sector' => 'Fatehpura, Paldi',
								'landmark' => 'Nr. BOB Bank'),
						'city' => 'Ahmedabad',
						'state' => 'Gujarat'
					)

				
			);

echo "<br> <br>";
echo "Multidimensional Array"."<br>";
//print_r
echo "<pre>";
print_r($multi_array);
echo "</pre>";

//last value from multi_array
$last_key = 0;
$last_value = "";
$landmark_value = 0;
foreach ($multi_array as $key => $value) {
	foreach ($value as $index_key => $info_value) {
		$last_key = $index_key;
		$last_value = $info_value;
		
	}
}
echo "Last Key: ".$last_key."<br>";
echo "Last Value: ".$last_value."<br>";

//access landmark 
	foreach ($multi_array as $key => $value) {
		foreach ($value as $index_key => $info_value) {
			if(is_array($info_value)){
				foreach ($info_value as $address_key => $address_value) {
					$landmark_value = $address_value;
					
				}
			}

		}
	}

echo "<br> <br>";
echo "Access Last Value of Address Array"."<br>";

echo "Landmark value: ".$address_value."<br>";


?>



<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>

