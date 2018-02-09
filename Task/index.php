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
	$UNameErr = $PwdErr = "";
	$uname = $pwd = "";
	if(isset($_POST['loginButton'])){
		if(!(isset($_POST['UName']))==""){
			$uname = $_POST['UName'];
		}
		else{
			$count++;
			$UNameErr = "Insert Username";
		}

		if(!(isset($_POST['Pwd']))==""){
			$pwd = $_POST['Pwd'];
		}
		else{
			$count++;
			$PwdErr = "Insert Password";
		}


		if($count>0){
			echo "Invalid Input";
		}
		else{

			$_connection = create_connection();
				echo "Connection Successful <br>";

				$select_query =  "SELECT username,password FROM `User_Info` WHERE username='".$uname."' and password='".$pwd."'";
				//echo $select_query;
				

				$result = mysqli_query($_connection,$select_query);
				// echo $result;
				// exit;
				$rows = mysqli_num_rows($result);
				if($rows == 1){
					echo '<script>window.location="dashboard.php"</script>';
				}
				else{
					echo "Invalid Credentials";
				}

		}
	}



	if(isset($_POST['registerButton'])){
		 echo '<script>window.location="registration.php"</script>';
	}
	


	?>

<form method="POST">
	Username:
	<input type="text"  minlength="6" maxlength="10" name="UName" id="regTxt4">
	<span class="error">* <?php echo $UNameErr;?></span> <br> <br>
	Password:
	<input type="password" minlength="6" maxlength="16" name="Pwd" id="regPwd1"> 
	<span class="error">* <?php echo $PwdErr;?></span> <br> <br>

	<input type="submit"  name="loginButton" value="Login">



	<input type="submit"  name="registerButton" value="Register">
</form>




<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>
		