<?php
$array = array();
$array['first_name'] = "kunal";
echo  "<pre>";
print_r($array);

$obj = new stdClass();

$obj->first_name = array('kunal');

print_r($obj);

echo $obj->first_name[0];

class abc{
	function test(){
		return "Hi";
	}
	
}

$obj = new abc();
echo $obj->test();


$_array = array();

$_array = array(
		'input' =>array(
		'fname' => "Priya",
		'lname' => "Dave",
		'location' => array(
			'city' => "Gandhinagar",
			'state' => "Gujarat"
			)
		),
		'input1' =>	array(
		'fname' => "Kavisha",
		'lname' => "Shah",
		'location' => array(
			'city' => "Ahmedabad",
			'state' => "Gujarat"
			)
		)
		
		);

echo "<pre>";
print_r($_array);
echo "</pre>";

$obj1 = new stdClass();
$obj1->input = new stdClass();
$obj1->input->fname = "Priya";
$obj1->input->lname = "Dave";
$obj1->input->location = array();
 
$obj1->input->location['city'] = "Gandhinagar";
$obj1->input->location['state'] = "Gujarat";
 echo "<pre>";
print_r($obj1);
echo "</pre>";

echo $obj1->input->location['state'];
foreach($obj1 as $key=>$value){
	
	echo $value->fname;
	if(is_array($value->location)){
		echo $value->location['city'];
	}
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}
?>