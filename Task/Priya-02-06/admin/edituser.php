<?php include('include/connection.php'); ?>

<?php
    $user_profile_fname_error= $user_profile_lname_error = $user_profile_email_error 
    = $user_profile_username_error= $user_profile_address_error =  
    $user_profile_country_error = $user_profile_city_error  = 
    $user_profile_postalcode_error = $user_profile_aboutme_error ="";
       
        
    $count =0;
    $error=0;
    $var_vp_fname = $var_vp_lname =  $var_vp_email = $var_up_username =  
    $var_vp_address = $var_vp_city = 
    $var_vp_country = $var_vp_postalcode = $var_vp_aboutme ="";
    $load_user_id = "";

    $display_username  = $display_emailid = $display_fname = $display_lname = 
    $display_address = $display_city = $display_country =$display_postalcode = 
    $display_aboutme = "";
//load event-fetching data from DB
    $load_user_id = $_GET['id'];

    $edit_select_query = "SELECT * FROM user_profile WHERE user_userid='".$load_user_id."'";

    $edit_result = mysqli_query($_connection,$edit_select_query);
    while($edit_rows = mysqli_fetch_array($edit_result)){
        $display_username = $edit_rows['user_username'];
        $display_emailid = $edit_rows['user_email'];
        $display_fname = $edit_rows['user_fname'];
        $display_lname = $edit_rows['user_lname'];
        $display_address = $edit_rows['user_address'];
        $display_city = $edit_rows['user_city'];
        $display_country = $edit_rows['user_country'];
        $display_postalcode = $edit_rows['user_postalcode'];
        $display_aboutme = $edit_rows['user_aboutme'];
    }

//when click on edit profile
    if(isset($_POST['edit_profile'])){

        
//Username Validation
            
        if(!($_POST['user_profile_username'])==""){
            if (!(strlen($_POST['user_profile_username']) >5 && strlen($_POST['user_profile_username']) < 11)) {
                $count++;
                $user_profile_username_error = "Username Must be between 6 to 10  characters";
            }
            else{
                if(!(preg_match("/^[_A-Za-z0-9]*$/", $_POST['user_profile_username']))){
                    $count++;
                    $user_profile_username_error = "Format Problem";
                }
                else{
                    //echo "UserName: ".$_POST['user_profile_username']."<br>";
                    $var_up_username = $_POST['user_profile_username'];
                    }
            }
        }
        else{
            $count++;
            $user_profile_username_error = "Username is required";
        }    


    //Email-id Validation

                  
        if(!($_POST['user_profile_email'])== ""){
            // if (!(filter_var($_POST['user_profile_email'], FILTER_VALIDATE_EMAIL))) {
            //  $user_profile_email_error = "Wrong Email Format";
            //  $count++;
            //}
            if (!(preg_match("/^([-a-zA-Z0-9_.]+)@([-a-zA-Z0-9_.]+)\.([a-zA-Z])*$/",$_POST['user_profile_email']))) {
                $count++;
                $user_profile_email_error = "Wrong Email Format";
            }
            else{
                //echo "Email Id(regex): ".$_POST['user_profile_email']."<br>";
                $var_vp_email = $_POST['user_profile_email'];
            }               
        }
        else{
            $count++;
            $user_profile_email_error = "Email is Required";    
        }
                
               
    //First Name Validation
        if(!($_POST['user_profile_fname']) == ""){
            if(!(strlen($_POST['user_profile_fname']) <= 50)){
                $count++;
                $user_profile_username_error ="First name should be less than 50 characters";
            }
            else{
                //echo "First Name: ". $_POST['user_profile_fname'] . "<br>";
                $var_vp_fname = $_POST['user_profile_fname'];
            }
        }
        else
        {
            $count++;
            $user_profile_fname_error = "First Name Required";
        }

    //Last Name Validation
                    
        if(!($_POST['user_profile_lname']) == ""){
            if(!(strlen($_POST['user_profile_lname']) <= 50)){
                $count++;
                $user_profile_lname_error = "Last name should be less than 50 characters";
            }
            else{
                //echo "Last Name: ".$_POST['user_profile_lname'] ."<br>";
                $var_vp_lname = $_POST['user_profile_lname'];
            }
        }
        else{
            $count++;
            $user_profile_lname_error = "Last Name Required";
        }


    //Address Validation

        if(!($_POST['user_profile_address']== "")){
            if(!(strlen($_POST['user_profile_address']) < 201 )) {
                $count++;
                $user_profile_address_error = "Length problem";
            }
            else{
                //echo "Address: ".$_POST['user_profile_address']."<br>";
                $var_vp_address = $_POST['user_profile_address'];
            }
        }
        else{
            $count++;
            $user_profile_address_error = "Address is required";
        }
                
                
    //City Validation

        if(!($_POST['user_profile_city'])== ""){
            if(!(strlen($_POST['user_profile_city']) < 101)){
                $count++;
                $user_profile_city_error = "Too Long City Name";
            }
            else{
                //echo "City: ".$_POST['user_profile_city']."<br>";
                $var_vp_city = $_POST['user_profile_city'];
            }             
        }
        else{   
            $count++;
            $user_profile_city_error = "City is Required";  
        }
                


    //Country Validation
        if(!($_POST['user_profile_country'])==""){
            //echo "Country: ".$_POST['user_profile_country']."<br>";
            $var_vp_country = $_POST['user_profile_country'];
        }   
        else{
            $count++;
            $user_profile_country_error = "Country is Required";       
        }

    //Postal Code Validation

        if(!(($_POST['user_profile_postalcode']) == "")){
            if(!(strlen($_POST['user_profile_postalcode']) == 6 )) {
                $count++;
                $user_profile_postalcode_error = "Must be 6 digits";
            }
            else{
                if(!(preg_match("/^[1-9][0-9]{5}/", $_POST['user_profile_postalcode']))){
                    $user_profile_postalcode_error = "format Problem";
                    $count++;
                }
                 else{
                    //echo "Postal-Code: ".$_POST['user_profile_postalcode']."<br>";
                    $var_vp_postalcode = $_POST['user_profile_postalcode'];
                }
            }
        }
        else{
            $count++;
            $user_profile_postalcode_error = "Postal code is Required";   
        }

    //About me Validation

        if(!(strlen($_POST['user_profile_aboutme']) < 201 )) {
            $count++;
            $user_profile_aboutme_error = "Length problem";
        }
        else{
            //echo "About me: ".$_POST['user_profile_aboutme']."<br>";
            $var_vp_aboutme = $_POST['user_profile_aboutme'];
        }

    //Insert Query

        if($count>0){
            echo "Invalid Input";
        }
        else{      
            $update_query = "UPDATE user_profile SET user_username='$var_up_username', user_email = '$var_vp_email',user_fname='$var_vp_fname', user_lname= '$var_vp_lname',user_address='$var_vp_address',user_city = '$var_vp_city',user_country= '$var_vp_country', user_postalcode = '$var_vp_postalcode', user_aboutme = '$var_vp_aboutme' WHERE user_userid='$load_user_id' and admin_id = '".$_SESSION['admin_credential']['admin_id']."'";
            if (mysqli_query($_connection, $update_query)) {
                echo "<script type='text/javascript'>alert('Record Updated Successfully!')</script>";
                ob_start();
                header('Location: userprofile.php');
            } else {
                echo "Error updating record: " . mysqli_error($_connection);
            }
        }          
    }

//when click on cancle profile 

    if(isset($_POST['cancle_profile'])){
        ob_start();
        header('Location: userprofile.php');
    }
?>

<?php include('layout/header.php'); ?>

<?php include('layout/leftsidebar.php'); ?>


<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">User Profile</h4>
                </div>
            <div class="content">
                <form method="POST" >
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Company (disabled)</label>
                                <input type="text" class="form-control" disabled placeholder="Company" name="Creative Code Inc.">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="user_profile_username" value="<?php echo $display_username; ?>" >
                                <span class="error" style="color:red">* <?php echo $user_profile_username_error;?></span> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="user_profile_email" value="<?php echo $display_emailid; ?>">
                                <span class="error" style="color:red">* <?php echo $user_profile_email_error;?></span> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="user_profile_fname" value="<?php echo $display_fname; ?>">
                                <span class="error" style="color:red">* <?php echo $user_profile_fname_error;?></span> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="user_profile_lname" value="<?php echo $display_lname; ?>">
                                <span class="error" style="color:red">* <?php echo $user_profile_lname_error;?></span> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Home Address" name="user_profile_address" value="<?php echo $display_address; ?>">
                                <span class="error" style="color:red">* <?php echo $user_profile_address_error;?></span> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City" name="user_profile_city" value="<?php echo $display_city; ?>">
                                <span class="error" style="color:red">* <?php echo $user_profile_city_error;?></span> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Country" name="user_profile_country" value="<?php echo $display_country; ?>">
                                <span class="error" style="color:red">* <?php echo $user_profile_country_error;?></span> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="number" class="form-control" placeholder="Postal Code" name="user_profile_postalcode" value="<?php echo $display_postalcode; ?>">
                                <span class="error" style="color:red">* <?php echo $user_profile_postalcode_error;?></span> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea rows="5" class="form-control" placeholder="Here can be your description" name="user_profile_aboutme"> <?php echo $display_aboutme; ?> </textarea>
                                <span class="error" style="color:red">* <?php echo $user_profile_aboutme_error;?></span> 
                            </div>
                        </div>
                    </div>
                      <button type="submit" class="btn btn-info btn-fill pull-right" name="edit_profile">Edit User Profile</button>

                      <button type="submit" class="btn btn-info btn-fill pull-right" name="cancle_profile">Cancle</button>

                    <!-- <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button> -->
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
   

</div>
</div>
</div>

<?php include('layout/footer.php'); ?> 