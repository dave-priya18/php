<?php include('connection.php');  ?>
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
	$count =0;
	$FNameErr = $LNameErr = "";
	$fname = $lname = "";
	$displayid = "";
	if(isset($_GET['updateButton'])){
		if(!(isset($_GET['FName']))==""){
			$fname = $_GET['FName'];
		}
		else{
			$count++;
			$FNameErr = "Insert First Name";
		}

		if(!(isset($_GET['LName']))==""){
			$lname = $_GET['LName'];
		}
		else{
			$count++;
			$LNameErr = "Insert Last Name";
		}


		if($count>0){
			echo "Invalid Input";
		}
		else{
			$_connection = create_connection();
			echo "Connection Successful <br>";

			$select_query =  "SELECT first_name,last_name FROM `User_Info` WHERE first_name='".$fname."' and last_name='".$lname."'";
				//echo $select_query;
				

				$result = mysqli_query($_connection,$select_query);
				// echo $result;
				// exit;
				$rows = mysqli_num_rows($result);
				if($rows == 1){
					
				}
				else{
					echo "Invalid Credentials";
				}
			

		}


	}

	


	?>


	
<form method="GET" action="updateData.php">

	First Name:
	<input type="text" maxlength="50" name="FName" id="regTxt1">
	<span class="error">* <?php echo $FNameErr;?></span> <br> <br>
	Last Name:
	<input type="text"  maxlength="50" name="LName" id="regTxt2">
	<span class="error">* <?php echo $LNameErr;?></span> <br> <br>

	<input type="submit"  name="updateButton" value="Update">
	<input type="submit"  name="deleteButton" value="Delete">


</form>




<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>
		