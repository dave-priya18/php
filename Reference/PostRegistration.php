
<?php include('header.php'); ?>

        <div id="content">
            <div id="content-wrapper">
							<?php include('sidebar.php');  ?>
							<!-- Main content area -->
							<main class="container-fluid">
									<div class="row">

											<!-- Main content -->
											<div class="col-md-8">
                        <?php


                        if(isset($_POST['regButton'])){
                          display();
                        }
                        ?>


												<form method="post" >
													<h2 class="contentTitle"> Registration Details </h2>
													<br> <br>
												 First Name:
													<input type="text" maxlength="50" class="typeText" name="regFName" id="regTxt1">   <br> <br>
													Last Name:
													<input type="text" maxlength="50" class="typeText" name="regLName" id="regTxt2">   <br> <br>
													Address:
													<textarea class="typeTextarea" name="regAdd" id="regTxtarea1" rows="5" cols="40">  </textarea> <br> <br>
													Email-Id:
													<input type="text" class="typeText" name="regEmail" id="regTxt3"> <br> <br>
													Username:
													<input type="text" class="typeText" name="regUName" id="regTxt4"> <br> <br>
													Password:
													<input type="password" class="typeText" name="regPwd" id="regPwd1"> <br> <br>
													Gender:
													<input type="radio" class="typeRadio" name="regRadio" value="Female" id="regRadio1"> Female
													<input type="radio" class="typeRadio" name="regRadio" value="Male" id="regRadio2"> Male <br> <br>
													Address:
													<input type="textarea" cols="5" rows="30" name="regAddress">
													Contact Number:
													<input type="text" name="regCNumber">
													Hobbies:
													<input type="checkbox" class="typeCheckbox" name="regCheckbox[]" value="Reading" id="regCheckbox1"> Reading
													<input type="checkbox" class="typeCheckbox" name="regCheckbox[]" value="Watching TV Series/Movies" id="regCheckbox2">Watching TV Series/Movies
													<input type="checkbox" class="typeCheckbox" name="regCheckbox[]" value="Listening Songs" id="regCheckbox3"> Listening Songs
													<input type="checkbox" class="typeCheckbox" name="regCheckbox[]" value="Cooking" id="regCheckbox4">Cooking
													<input type="checkbox" class="typeCheckbox" name="regCheckbox[]" value="Traveling" id="regCheckbox5"> Traveling
													<input type="checkbox" class="typeCheckbox" name="regCheckbox[]" value="Dancing" id="regCheckbox6"> Dancing <br> <br>
													Country:
													<select class="dropDownList" name="regCountry" id="regDropDown1">
														<option  value="India" id="regCountry1"> India </option>
														<option  value="Sri-Lanka" id="regCountry1"> Sri-Lanka </option>
														<option  value="Bhutan" id="regCountry1"> Bhutan </option>
														<option  value="Pakistan" id="regCountry1">Pakistan </option>
														<option  value="China" id="regCountry1">China </option>
													</select> <br> <br>
													Language Known:
													<select class="dropDownList" name="regLanguage[]" id="regDropDown1" multiple>
														<option  value="Gujarati" id="regLanguage1"> Gujarati </option>
														<option  value="English" id="regLanguage2"> English </option>
														<option  value="Hindi" id="regLanguage3"> Hindi </option>
													</select> <br> <br>

													<input type="submit" class="typeButton" name="regButton" value="Register" id="regbtn1">


												</form>
                        <?php
                        function display(){
                          echo "Registered Details <br> <br>";
                          echo "First Name: ".$_POST['regFName']."<br>";
                          echo "Last Name: ".$_POST['regLName']."<br>";
                          echo "Address: ".$_POST['regAdd']."<br>";
                          echo "Email Id: ".$_POST['regEmail']."<br>";
                          echo "Username: ".$_POST['regUName']."<br>";
                          echo "Password: ".$_POST['regPwd']."<br>";
                          echo "Gender: ".$_POST['regRadio']."<br>";
                          echo "Hobbies: ";
                          if(!empty($_POST['regCheckbox'])){
                            foreach ($_POST['regCheckbox'] as $checked) {
                              echo $checked." ";
                            }
                          }
                          echo "<br>";
                          echo "Image Path:"."<br>";
                          echo "Country: ".$_POST['regCountry']."<br>";
                          echo "Language Known: ";
                          foreach ($_POST['regLanguageDrop'] as $checked) {
                            echo $checked." ";
                          }
                        }
                         ?>






												<?php include('rightSidebar.php'); ?>

<?php include('footer.php'); ?>
