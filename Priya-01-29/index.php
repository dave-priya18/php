<?php include('include/header.php'); ?>

<?php include('include/left.php'); ?>

		<!-- Center Column -->
		<div class="col-sm-6">
		
			<!-- Alert -->
			<div class="alert alert-success alert-dismissible" role="alert">



				<?php



	//Variable Declaration
		$_item_name_Err = $_item_desc_Err = $_item_sku_Err = $_item_time_Err = $_item_price_Err =
    	$_item_service_Err = $_item_payment_Err =$_item_staff_Err = "";
    	$var_name = $var_desc = $var_sku = $var_time = $var_time_ampm = $var_price =
    	$var_payment =$var_staff = "";
    	$_service = "";
    	$var_service = array();
    	$count = 0;
		//Validate Button Click Event
		if(isset($_POST['insertButton'])){
		//Item Name Required
			if(!($_POST['_item_name']) == ""){
		//Item Name Length <51
				if(!(strlen($_POST['_item_name']) <= 50 )){
          			$count++;
					$_item_name_Err ="Item Name can't be more than 50 characters";
				}
				else{
					$var_name = $_POST['_item_name'];
				}
			}
			else{
        		$count++;
				$_item_name_Err = "Item Name is Required";
			}

		//Description Required
			if(!($_POST['_item_desc']) == ""){
		//Item Name < 251
				if(!(strlen($_POST['_item_desc']) <= 250)){
          			$count++;
					$_item_desc_Err = "Description can't be more than 250 letters";
				}
				else{
					$var_desc = $_POST['_item_desc'];
				}
			}
			else{
        			$count++;
					$_item_desc_Err = "Description is required";
			}
      	// SKU Required
     		if(!($_POST['_item_sku'])==""){
     			// SKU Format: Example(WE2304)
				if (!(preg_match("/^([A-Z]+)([0-9])*$/",$_POST['_item_sku']))) {
          			$count++;
					$_item_sku_Err = "SKU Number Format: First two Alphabet then Numeric";
				}
				else{
					$var_sku = $_POST['_item_sku'];
				}
      		}
      		else{
        		$count++;
        		$_item_sku_Err = "SKU Field is empty";
      		}

      		//Price Reuired
      		if(!($_POST['_item_price'])==""){
      			//Price Format: Example(60 || 60,000 || 60,000.000)
        		if (!(preg_match("/^[(\d*),(\d*).(\d*)]*$/",$_POST['_item_price']))) {
          			$count++;
          			$_item_price_Err = "Price formation is wrong";
        		}
        		else{
          			$var_price=$_POST['_item_price'];
        		}
      		}
      		else{
        		$count++;
        		$_item_price_Err = "Price Field is empty";
      		}

      	// Time Required
      		if(!($_POST['_item_time'])==""){
      			//Time Format: Example(08:30) && check AM/PM
        		if (!(preg_match("/([012]|[0-9]):([0-5][0-9])/",$_POST['_item_time'])) && (isset($_POST['_item_time_ampm']))) {
          			$count++;
          			$_item_time_Err = "Time formation is wrong";
        		}
        		else{
          			$var_time = $_POST['_item_time'];
          			$var_time_ampm = $_POST['_item_time_ampm'];
        		}
      		}
      		else{
        		$count++;
        		$_item_time_Err = "Time Field is empty";
      		}

      	//Staff Required - DropDown
		  	if(!(empty($_POST['_item_staff']))){
				$var_staff = $_POST['_item_staff'];
		  	}
		  	else{
		  		$count++;
		  		$_item_staff_Err = "Must select one";
		  	}


		//Payment Required - Radio Button
			if(!(isset($_POST['_item_payment']) == "")){
				$var_payment = $_POST['_item_payment'];
			}
			else{
				$count++;
				$_item_payment_Err = "must select one";
			}

      	//Service Required - CheckBox
			if(!(empty($_POST['_item_service']))){
				$var_service = array();
		  		foreach ($_POST['_item_service'] as $checked) {
		  			$var_service[] = $checked;
		  		}
		  	}
		  	else{
		  		$count++;
		  		$_item_service_Err = "Must select atlest 1 service";
		  	}


		// Print if No Error	
			if($count == 0){
				echo "Name: ".$var_name."<br>";
				echo "Desc: ".$var_desc."<br>";
				echo "SKU: ".$var_sku."<br>";
				echo "Price: ".$var_price." Rupees <br>";
				echo "Time: ".$var_time.$var_time_ampm." <br>";
				echo "Staff: ".$var_staff."<br>";
				echo "Payment: ".$var_payment."<br>";
				echo "Service: ";
				foreach($var_service as $key){
					echo $key."<br>";
				}
			}
			else{
				echo "Invalid Input";
			}
			
		}
	?>

  <form method="POST" >
  <h2 class="contentTitle"> Item Details </h2>

  	Name:
	<input type="text" maxlength="50" name="_item_name"  value="<?php if(($count >0) && (isset($_POST['_item_name']))) { echo $_POST['_item_name']; } ?>" >
	<span class="error">* <?php echo $_item_name_Err;?> </span> <br> <br>

  Description:
	<textarea  name="_item_desc" rows="3" cols="40" maxlength="250" value="" > <?php if(($count >0) && (isset($_POST['_item_desc']))) { echo $_POST['_item_desc']; } ?> </textarea>
	<span class="error">* <?php echo $_item_desc_Err;?></span><br> <br>

	SKU:
	<input type="text"  maxlength="20" name="_item_sku" value="<?php if(($count >0) && (isset($_POST['_item_sku']))) { echo $_POST['_item_sku']; } ?>" >
	<span class="error">* <?php echo $_item_sku_Err;?></span> <br> <br>

  Price:
	<input type="text"  maxlength="10" name="_item_price" value="<?php if(($count >0) && (isset($_POST['_item_price']))) { echo $_POST['_item_price']; } ?>" >
	<span class="error">* <?php echo $_item_price_Err;?></span> <br> <br>

  Time:
	<input type="text"  maxlength="08" name="_item_time" value="<?php if(($count >0) && (isset($_POST['_item_time']))) { echo $_POST['_item_time']; } ?>" >
	<input type="radio"  name="_item_time_ampm" <?php if(($count >0) && (isset($_POST['_item_time_ampm']) && ($_POST['_item_time_ampm'] == "AM"))) echo "checked";   ?> value = "AM"> AM
	<input type="radio"  name="_item_time_ampm" <?php if(($count >0) && (isset($_POST['_item_time_ampm']) && ($_POST['_item_time_ampm'] == "PM")))  echo "checked";  ?> value = "PM"> PM
	<span class="error">* <?php echo $_item_time_Err;?></span> <br> <br>

  Staff:
		<select  name="_item_staff">
			<option  value="receptionist"  "<?php if(($count>0) && isset($_POST["_item_staff"]) && $_POST["_item_staff"] == "receptionist") { echo " selected"; } ?>" > Receptionist </option>
			<option  value="technician" "<?php if(($count>0) && isset($_POST["_item_staff"]) && $_POST["_item_staff"] == "technician") { echo " selected"; } ?>" > Technician </option>
			<option  value="ground_staff" "<?php if(isset($_POST["_item_staff"]) && $_POST["_item_staff"] == "ground_staff") { echo " selected"; } ?>" > Ground Staff </option>
			<option  value="manager" "<?php if(($count>0) && isset($_POST["_item_staff"]) && $_POST["_item_staff"] == "manager") { echo " selected"; } ?>"  > Manager </option>
		</select>
		<span class="error">* <?php echo $_item_staff_Err;?></span><br> <br>

	Payment:
	<input type="radio"  name="_item_payment" value="card"  <?php if(($count >0) && (isset($_POST['_item_payment']) && ($_POST['_item_payment'] == "card"))) echo "checked";   ?>> Credit/Debit Card
	<input type="radio"  name="_item_payment" value="wallet"  <?php if(($count >0) && (isset($_POST['_item_payment']) && ($_POST['_item_payment'] == "wallet"))) echo "checked";   ?>> E-Wallet
  <input type="radio"  name="_item_payment" value="banking"  <?php if(($count >0) && (isset($_POST['_item_payment']) && ($_POST['_item_payment'] == "banking"))) echo "checked";   ?>> Net Banking
  <input type="radio"  name="_item_payment" value="cod"  <?php if(($count >0) && (isset($_POST['_item_payment']) && ($_POST['_item_payment'] == "cod"))) echo "checked";   ?>> COD
	<span class="error">* <?php echo $_item_payment_Err;?></span><br> <br>

	Service:.
	<input type="checkbox"  name="_item_service[]" value="Battery Check"
		<?php
			if(($count > 0) && isset($_POST['_item_service'])){
				foreach ($var_service as $key) {
					if($key == "Battery Check"){
						echo "checked='checked'";
					}
				}
			}
		?>
	> Battery Check
	<input type="checkbox" name="_item_service[]" value="Screen Display" 
	<?php
			if(($count > 0) && isset($_POST['_item_service'])){
				foreach ($var_service as $key) {
					if($key == "Screen Display"){
						echo "checked='checked'";
					}
				}
			}
		?>> Screen Display
	<input type="checkbox"  name="_item_service[]" value="Charger Issue"
	<?php
			if(($count > 0) && isset($_POST['_item_service'])){
				foreach ($var_service as $key) {
					if($key == "Charger Issue"){
						echo "checked='checked'";
					}
				}
			}
		?> > Charger
	<input type="checkbox"  name="_item_service[]" value="Factory Reset"
	<?php
			if(($count > 0) && isset($_POST['_item_service'])){
				foreach ($var_service as $key) {
					if($key == "Factory Reset"){
						echo "checked='checked'";
					}
				}
			}
		?>> Factory Reset
	<span class="error">* <?php echo $_item_service_Err;?></span><br> <br>

	

	<input type="submit"  name="insertButton" value="Submit">


	</form>

					</div>
			<hr>
		</div><!--/Center Column-->


		<?php include('include/right.php'); ?>

		<?php include('include/footer.php'); ?>


	
	
	