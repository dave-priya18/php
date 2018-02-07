
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


		$FNameErr= $LNameErr = $EmailErr = $GenderErr =$UNameErr= $PwdErr = 
		$AddErr = $CNumErr = $CountryErr = $CityErr = $StateErr = $ZipErr =
		$HobbyErr = $LangErr ="";
		$hobbies =  array();
		$count =0;
		$fname = $lname = $gender = $email = $username = $pwd = $add = $city = 
		$state = $country = $zipcode = $cno = $hobby = $language = "";
//INSERT QUERY
		if(isset($_POST['insertButton'])){

			echo "Registration Details <br>";

//First Name Validation
			if(!($_POST['regFName']) == ""){
				if(!(strlen($_POST['regFName']) <= 50)){
					$count++;
					$UNameErr ="First name should be less than 50 characters";
				}
				else{
					echo "First Name: ". $_POST['regFName'] . "<br>";
					$fname = $_POST['regFName'];
				}
			}
			else
			{
				$count++;
				$FNameErr = "First Name Required";
			}

//Last Name Validation
				
			if(!($_POST['regLName']) == ""){
				if(!(strlen($_POST['regLName']) <= 50)){
					$count++;
					$LNameErr = "Last name should be less than 50 characters";
				}
			else{
					echo "Last Name: ".$_POST['regLName'] ."<br>";
					$lname = $_POST['regLName'];
				}
			}
			else{
				$count++;
				$LNameErr = "Last Name Required";
			}

//Gender Validation

			if(!($_POST['regGender']) == ""){
				echo "Gender: ".$_POST['regGender']."<br>";
				$gender = $_POST['regGender'];
				
			}
			else{
				$count++;
				$GenderErr = "Must Choose one";
			}

//Email-id Validation

			  
			if(!($_POST['regEmail'])== ""){
				// if (!(filter_var($_POST['regEmail'], FILTER_VALIDATE_EMAIL))) {
				// 	$EmailErr = "Wrong Email Format";
				//  $count++;
				//}
				if (!(preg_match("/^([-a-zA-Z0-9_.]+)@([-a-zA-Z0-9_.]+)\.([a-zA-Z])*$/",$_POST['regEmail']))) {
					$count++;
					$EmailErr = "Wrong Email Format";
				}
				else{
					echo "Email Id(regex): ".$_POST['regEmail']."<br>";
					$email = $_POST['regEmail'];
				}
					
			}
			else{
				$count++;
				$EmailErr = "Email is Required";	
			}
			
//Username Validation
			
			if(!($_POST['regUName'])==""){
				if (!(strlen($_POST['regUName']) >5 && strlen($_POST['regUName']) < 11)) {
					$count++;
					$UNameErr = "Username Must be between 6 to 10  characters";
				}
				else{
					if(!(preg_match("/^[_A-Za-z0-9]*$/", $_POST['regUName']))){
						$count++;
						$UNameErr = "Format Problem";
					}
					else{
						echo "UserName: ".$_POST['regUName']."<br>";
						$username = $_POST['regUName'];
					}
				}
			}
			else{
				$count++;
				$UNameErr = "Username is required";
			}				

//Password Validation
				
			if(!($_POST['regPwd'])==""){
				if(!(strlen($_POST['regPwd']) >5 && strlen($_POST['regPwd']) < 16)) {
					$count++;
					$PwdErr = "Password Length should be between 6 tio 16";
				}
				else{
					// if(!(preg_match("/^[-_a-zA-Z0-9@*#!$%^&*+=,.:;?]*$/", $_POST['regPwd']))){
					//  $count++;
					// 	$PwdErr = "Password must contain atlest one Uppercase, Lowercase, Number and Special Character";
					// }
					$lcount = $ucount = $ncount = $pcount = 0;
					$pwd = $_POST['regPwd'];
					for($i=0;$i<strlen($pwd);$i++){
						if(ctype_lower($pwd[$i])){
							$lcount++;
						}
						elseif(ctype_upper($pwd[$i])){
							$ucount++;
						}
						elseif(ctype_digit($pwd[$i])){
							$ncount++;
						}
						elseif(ctype_punct($pwd[$i])){
							$pcount++;
						}	
					}
					if(!($lcount >0 && $ucount > 0 && $ncount>0 && $pcount >0)){
						$count++;
						$PwdErr = "Password must contain atlest one Uppercase, Lowercase, Number and Special Character";
					}
					else{

						echo "Password: ".$_POST['regPwd']."<br>";
					}
				}
			}
			else{
				$count++;
				$PwdErr = "Password is Required";
			}
		
//Address Validation


			if(!($_POST['regAdd']== "")){
				if(!(strlen($_POST['regAdd']) < 201 )) {
					$count++;
					$AddErr = "Length problem";
				}
				else{
					echo "Address: ".$_POST['regAdd']."<br>";
					$add = $_POST['regAdd'];
				}
			}
			else{
				$count++;
				$AddErr = "Address is required";
			}
			
				
//Contact Number Validation

			if(!($_POST['regCNumber'])==""){
				if(!(strlen($_POST['regCNumber']) == 10 )){
					$count++;
					$CNumErr = "Length must be 10";
				}
				else{
					if(!(preg_match("/^[6789][0-9]*$/", $_POST['regCNumber']))){
						$count++;
						$CNumErr = "Format probelm";
					}
					else{
						echo "Contact Number: ".$_POST['regCNumber']."<br>";
						 $cno = $_POST['regCNumber'];
					}
				}
			}
			else{
				$count++;
				$CNumErr = "Contact Number  is Required";	
			}
			
//City Validation

			if(!($_POST['regCity'])== ""){
				if(!(strlen($_POST['regCity']) < 101)){
					$count++;
					$CityErr = "Too Long City Name";
				}
				else{
					echo "City: ".$_POST['regCity']."<br>";
					$city = $_POST['regCity'];
				}
				  
			}
			else{	
				$count++;
				$CityErr = "City is Required";	
			}
			
//State Validation

			if(!($_POST['regState'])==""){
				if(!(strlen($_POST['regState']) < 101)){
					$count++;
					$StateErr = "Too Long State Name";
				}
				else{
					echo "State: ".$_POST['regState']."<br>";
					$state = $_POST['regState'];
				}
			}
			else{
				$count++;
				$StateErr = "State is Required";	
			}
			

//Country Validation
			if(!($_POST['regCountry'])==""){
				echo "Country: ".$_POST['regCountry']."<br>";
				$country = $_POST['regCountry'];
			}	
			else{
				$count++;
				$CountryErr = "Country is Required";	   
			}

//Zip Code Validation

			if(!(($_POST['regZipCode']) == "")){
				if(!(strlen($_POST['regZipCode']) == 6 )) {
					$count++;
					$ZipErr = "Must be 6 digits";
				}
				else{
					if(!(preg_match("/^[1-9][0-9]{5}/", $_POST['regZipCode']))){
						$ZipErr = "format Problem";
						$count++;
					}
					else{
						echo "Zip-Code: ".$_POST['regZipCode']."<br>";
						$zipcode = $_POST['regZipCode'];
					}
				}
			}
			else{
				$count++;
				$ZipErr = "Zip code is Required";	
			}

//Hobby Validation
				
			
			if(!(isset($_POST['regCheckbox']))){
				$count++;
				$HobbyErr = "Hobbies are required";
			}
			else{
				if(!(count($_POST['regCheckbox']) >= 3)){
					$count++;
					$HobbyErr = "Must select 3 hobbies";
				}
				else{
					echo "Hobbies: ";
					foreach ($_POST['regCheckbox'] as $checked) {
		      			echo $checked." ";
		      			$hobby .= $checked.",";
		    		}
				}
		    		
		  	}

		  	

//Language Known Validation
		
		  	
		  	if(!(empty($_POST['regLanguage']))){
		  		echo "<br>"."Language Known: ";
		  		foreach ($_POST['regLanguage'] as $checked) {
		    		echo $checked." ";
		    		$language .= $checked.",";
		    		echo "<br>";	
		  		}
		  	}
		  	else{
		  		$count++;
		  		$LangErr = "Language Required";
		  		
		  	}

		  	if($count>0){
		  		echo "Invalid Input";
		  	}
		  	else{
		  		//DB Connection and Insert
				
		  		$_connection = create_connection();
				echo "Connection Successful <br>";
				$insert_query = "insert into User_Info(first_name,last_name,gender,email_id,username,password,address,city,state,country,zip_code,
			contact_number,hobby,language_known) values ('".$fname."','".$lname."','".$gender."','".$email."','".$username."','".$pwd."','".$add."','".$city."','".$state."','".$country."','".$zipcode."','".$cno."','".$hobby."','".$language."')";
				if (mysqli_query($_connection,$insert_query)) {
    				echo "New record created successfully <br>";
				} else {
    				echo mysqli_error($_connection,$insert_query);
				}
				close_connection($_connection);
		  	}

		 
		}




	?>



	<form method="POST" >
	<a href="Priya-01-22.php"> Next </a>
	<h2 class="contentTitle"> Registration Details </h2>
	<br> <br>

	First Name:
	<input type="text" maxlength="50" name="regFName" id="regTxt1">
	<span class="error">* <?php echo $FNameErr;?></span> <br> <br>
	Last Name:
	<input type="text"  maxlength="50" name="regLName" id="regTxt2">
	<span class="error">* <?php echo $LNameErr;?></span> <br> <br>
	Gender:
	<input type="radio"  name="regGender" value="F" id="regRadio1"> F
	<input type="radio"  name="regGender" value="M" id="regRadio2"> M
	<span class="error">* <?php echo $GenderErr;?></span><br> <br>
	Email-Id:
	<input type="text"  name="regEmail" id="regTxt3"> 
	<span class="error">* <?php echo $EmailErr;?></span><br> <br>
	Username:
	<input type="text"  minlength="6" maxlength="10" name="regUName" id="regTxt4">
	<span class="error">* <?php echo $UNameErr;?></span> <br> <br>
	Password:
	<input type="password" minlength="6" maxlength="16" name="regPwd" id="regPwd1"> 
	<span class="error">* <?php echo $PwdErr;?></span> <br> <br>
	Address:
	<textarea  name="regAdd" id="regTxtarea1" rows="5" maxlength="200" cols="40">  </textarea> 
	<span class="error">* <?php echo $AddErr;?></span><br> <br>
	City:
	<input type="text" name="regCity" maxlength="100"> 
	<span class="error">* <?php echo $CityErr;?></span>
	State:
	<input type="text" name="regState" maxlength="100"> 
	<span class="error">* <?php echo $StateErr;?></span> <br> <br>
	Country:
		<select  name="regCountry" id="regDropDown1">
			<option  value="India" id="regCountry1"> India </option>
			<option  value="Sri-Lanka" id="regCountry1"> Sri-Lanka </option>
			<option  value="Bhutan" id="regCountry1"> Bhutan </option>
			<option  value="Pakistan" id="regCountry1">Pakistan </option>
			<option  value="China" id="regCountry1">China </option>
		</select> 
		<span class="error">* <?php echo $CountryErr;?></span><br> <br>
	Zip Code:
	<input type="text" name="regZipCode"> 
	<span class="error">* <?php echo $ZipErr;?></span> <br> <br>
	Contact Number:
	<input type="text" name="regCNumber"> 
	<span class="error">* <?php echo $CNumErr;?></span><br> <br>
	Hobbies:
	<input type="checkbox"  name="regCheckbox[]" value="Reading" id="regCheckbox1"> Reading
	<input type="checkbox" name="regCheckbox[]" value="Watching TV Series/Movies" id="regCheckbox2">Watching TV Series/Movies
	<input type="checkbox"  name="regCheckbox[]" value="Listening Songs" id="regCheckbox3"> Listening Songs
	<input type="checkbox"  name="regCheckbox[]" value="Cooking" id="regCheckbox4">Cooking
	<input type="checkbox"  name="regCheckbox[]" value="Traveling" id="regCheckbox5"> Traveling
	<input type="checkbox"  name="regCheckbox[]" value="Dancing" id="regCheckbox6"> Dancing 
	<span class="error">* <?php echo $HobbyErr;?></span><br> <br>
		
	Language Known:
	<select  name="regLanguage[]" id="regDropDown1" multiple>
		<option  value="Gujarati" id="regLanguage1"> Gujarati </option>
		<option  value="English" id="regLanguage2"> English </option>
		<option  value="Hindi" id="regLanguage3"> Hindi </option>
	</select> 
	<span class="error">* <?php echo $LangErr;?></span><br> <br>

	<input type="submit"  name="insertButton" value="Insert">

	<input type="submit"  name="updateButton" value="Update">

	<input type="submit"  name="selectButton" value="Select">

	<input type="submit"  name="deleteButton" value="Delete">


	</form>







<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>
		
