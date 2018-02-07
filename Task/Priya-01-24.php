 <?php include('include/header.php'); ?>

 <div id="content">
  <div id="content-wrapper">
   <?php include('include/sidebar.php');  ?>
   <!-- Main content area -->
   <main class="container-fluid">
    <div class="row">
     <!-- Main content -->
     <div class="col-md-8">

      <form method="get">

       <div style="text-align:left">
        <a href="index.php" > Home </a>
       </div>
       <div style="text-align:right">
        <a href="Priya-01-25.php"> Next </a>
       </div>
      </form>

      <?php

     echo $display = "
       Difference between Array Functions: <br> <br> 


1. arsort() v/s rsort() <br> 
	
	arsort() - index association in reverse & doesn't change the indexing <br>

	rsort() - value association in reverse & reindex with the ordering <br> <br>

2. array_search() v/s in_array() <br>

	array_search() - returns correspondent key if value exists <br>

	in_array() - returns boolean True/False if value exists/ doesn't exist <br> <br>

3. array_map() v/s array_walk() <br> 
	
	array_map() <br> - doesn't concern about internal pointer of array; walk through every data eventually <br>
				- doesn't change the actual state of data <br> <br>

	array_walk() <br> - works as foreach loop <br>
				- change the actual state of data <br>

				<br>

	
	"



 ?>


<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>






