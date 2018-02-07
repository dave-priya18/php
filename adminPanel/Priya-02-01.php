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
<a href="Priya-02-02.php"> Next </a>
</div>


<?php
if(isset($_POST['push_element'])){

  //array Declaration

$insert_array = array();

$insert_array = array(
          '1' => array(   ),
          '2' => array(
                  ),
          "3" => array(
                  ),
          "4" => array(
                  ),
          "5" => array(
                 ),
          "6" => array(
                 ),
          "7" => array(
                  ),
          "8" => array(
                  ),
          "9" => array()
        );




  $number = $_POST['push_value'];

  function insert_element($push_array,$value){
    $value_array = explode(" ", $value);
   //print_r($value_array);
    foreach ($push_array as $digit_key => $number_value) {
      foreach ($value_array as $single_number) {

        if($digit_key == $single_number[0]){
           echo $single_number[0];
              array_push($push_array[$digit_key], $single_number);
        }
      }
      
    }
    return $push_array;
  
  }

echo "<pre>";
print_r(insert_element($insert_array, $number));
echo "</pre>";
}


if(isset($_POST['pop_element'])){

  //array Declaration

$delete_array = array();

$delete_array = array(
          '1' => array(  1, 11, 100, 1211 ),
          '2' => array( 23, 234 ),
          "3" => array( 33),
          "4" => array( 456 ),
          "5" => array(50, 567  ),
          "6" => array( 67),
          "7" => array( 789
                  ),
          "8" => array( 89
                  ),
          "9" => array( 93)
        );




  $number = $_POST['pop_value'];
echo "<pre>";
  function delete_element($pop_array,$value){
    foreach ($pop_array as $index_key => $index_value) {
      //print_r($index_key)."<br>";
         foreach ($index_value as $qkey => $qvalue) {
          if($qvalue == $value){
            unset($pop_array[$index_key][$qkey]);  
         }
      }
     
    }
    return $pop_array;
  }
   
  
  

echo "<pre>";
print_r(delete_element($delete_array, $number));
echo "</pre>";
}


if(isset($_POST['merge_element'])){
$array1 = array(
          array(
            'fname' => "Priya",
            'lname' => "Dave",
            'flat no' => '498/A/2',
            'sector' => '1 C',
            'landmark' => 'Opp. Samdarshan Aashram',
            'city' => 'Gandhinagar',
            'state' => 'Gujarat'
          ),
           array(
            'fname' => "Parth",
            'lname' => "Sheth",
            'flat no' => '10, Vardayini Society',
            'sector' => 'Fatehpura, Paldi',
            'landmark' => 'Nr. BOB Bank',
            'city' => 'Ahmedabad',
            'state' => 'Gujarat'
          )
        );
echo "Array 1"."<br>";
echo "<pre>";
print_r($array1);
echo "</pre>";

$array2 = array(
          array(
            'fname' => "Ramya",
            'lname' => "Dave",
            'flat no' => '165/2',
            'sector' => '3 A',
            'landmark' => 'Gh1',
            'city' => 'Gandhinagar',
            'state' => 'Gujarat'
          ),
          array(
            'fname' => "Kavisha",
            'lname' => "Shah",
            'flat no' => '11, Shreyas Apartment',
            'sector' => ' Paldi',
            'landmark' => 'River Front',
            'city' => 'Ahmedabad',
            'state' => 'Gujarat'
          )
        );
echo "Array 2"."<br>";
echo "<pre>";
print_r($array2);
echo "</pre>";



function merge_array($a1, $a2){

  $a1 = array_merge($a2);

  return $a1;
}
echo "Merge Output"."<br>";
echo "<pre>";
print_r(merge_array($array1, $array2));
echo "</pre>";

}


if(isset($_POST['combine_element'])){
$array1 = array(
      
            'fname',
            'lname',
            'flat no',
            'sector' ,
            'landmark' ,
            'city' ,
            'state' 
             );

echo "Array 1"."<br>";
echo "<pre>";
print_r($array1);
echo "</pre>";
$array2 = 
      
           
          array(
            "Kavisha",
             "Shah",
            '11, Shreyas Apartment',
            ' Paldi',
           'River Front',
            'Ahmedabad',
         'Gujarat'
          
        );
echo "Array 2"."<br>";
echo "<pre>";
print_r($array2);
echo "</pre>";

$output_combine= array();

function combine_array($a1, $a2){

 $output_combine = array_combine($a1, $a2);

 return $output_combine;

}
echo "Combine Output"."<br>";
echo "<pre>";
print_r(combine_array($array1, $array2));
echo "</pre>";

}





?>

  <form method="post">

    Enter Number:
    <input type="text" name="push_value"> <br>

    <input type="submit"  name="push_element" value="Push"> <br> <br>

    Enter Number: <br>
    Pick from: 1,11,23,33,50,100,456,789,234,567,89,93,67,1211 only <br>
    <input type="text" name="pop_value"> <br>
    <input type="submit"  name="pop_element" value="Pop"> <br> <br>

    <input type="submit"  name="merge_element" value="Merge"> 
    <input type="submit"  name="combine_element" value="Combine"> <br> <br>

  </form>

<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>