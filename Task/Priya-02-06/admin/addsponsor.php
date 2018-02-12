<?php include('include/connection.php'); ?>

<?php
    $_sponsor_companyname_error= $_sponsor_speaking_error = $_sponsor_designation_error = $_sponsor_image_error = $_sponsor_conference_title_error = "";
    $conference_title_data = array();
    $count =0;
    $error=0;
    $var_s_name = $var_s_speaking =   $var_s_image = $var_s_designation = $var_conference_title = "";


        $select_conference_title_query = "SELECT conference_id,conference_title FROM conference_detail WHERE admin_id='".$_SESSION['admin_credential']['admin_id']."'";

        $result_conference_title = mysqli_query($_connection,$select_conference_title_query);

    if(isset($_POST['add_sponsor'])){


//Conference Name Validation
            if(!($_POST['_conference_title'])==""){
                //echo "Conference: ".$_POST['_conference_title']."<br>";
               $var_conference_title = $_POST['_conference_title'];

            }
            else{
                $count++;
                $var_conference_title_error = "var_conference_title is Required";
            }

//Speaking Validation Validation


        if(!($_POST['_sponsor_speaking']== "")){
            if(!(strlen($_POST['_sponsor_speaking']) < 201 )) {
                $count++;
                $_sponsor_speaking_error = "Length problem";
            }
            else{
                //echo "Address: ".$_POST['_sponsor_speaking']."<br>";
                $var_s_speaking = $_POST['_sponsor_speaking'];
            }
        }
        else{
            $count++;
            $_sponsor_speaking_error = "Address is required";
        }


//sponsor Name Validation
        if(!($_POST['_sponsor_companyname']) == ""){
            if(!(strlen($_POST['_sponsor_companyname']) <= 50)){
                $count++;
                $_sponsor_companyname_error ="First name should be less than 50 characters";
            }
            else{
                //echo "First Name: ". $_POST['_sponsor_companyname'] . "<br>";
                $var_s_name = $_POST['_sponsor_companyname'];
            }
        }
        else{
            $count++;
            $_sponsor_companyname_error = "First Name Required";
        }

//sponsor Designation Validation

        if(!($_POST['_sponsor_designation']) == ""){
            if(!(strlen($_POST['_sponsor_designation']) <= 50)){
                $count++;
                $_sponsor_designation_error = "Last name should be less than 50 characters";
            }
        else{
                //echo "Last Name: ".$_POST['_sponsor_designation'] ."<br>";
                $var_s_designation = $_POST['_sponsor_designation'];
            }
        }
        else{
            $count++;
            $_sponsor_designation_error = "Last Name Required";
        }




// Image Validation
 // print_r($_FILES);exit;
        if((!empty($_FILES['_sponsor_image']['name']))){
          $var_s_image = $_FILES['_sponsor_image']['name'];
          $target_folder = "../upload/";
          $target_file = $target_folder . basename($_FILES['_sponsor_image']['name']);

// Select file type
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
          $extensions_arr = array("jpg","jpeg","png","gif");
          //echo "$imageFileType";
          //echo "$extensions_arr";
          //exit;
// Check extension
          if(in_array($imageFileType,$extensions_arr) ){
 // Upload file
              move_uploaded_file($_FILES['_sponsor_image']['tmp_name'],$target_folder.$var_s_image);
          }
          else{
            $count++;
            $_sponsor_image_error = "Please upload image file";
          }
        }
        else{
          $count++;
          $_sponsor_image_error = "Image is required";
        }
//Insert Query

        if($count>0){
            echo "Invalid Input";
        }
        else{
          // DB Connection and Insert
            $select_query_all = "SELECT sponsor_companyname, conference_id FROM conference_sponsor_detail WHERE sponsor_companyname='".$var_s_name."' and conference_id = '".$var_conference_title."'";

            $result_all=mysqli_query($_connection,$select_query_all);
            if($row_all = mysqli_fetch_array($result_all)){
                 echo "<script type='text/javascript'>alert('sponsor is already there!')</script>";
            }
            else{
               echo  $insert_query = "INSERT INTO `conference_sponsor_detail`(`speaking_desc`, `sponsor_companyname`, `sponsor_designation`, `sponsor_image`, `conference_id`, `admin_id`,`created_by`) VALUES ('".$var_s_speaking."','".$var_s_name."','".$var_s_designation."','".$var_s_image."','".$var_conference_title."','".$_SESSION['admin_credential']['admin_id']."','".$_SESSION['admin_credential']['admin_id']."')";
                    if (mysqli_query($_connection,$insert_query)) {
                        echo "<script type='text/javascript'>alert('Record inserted successfully!')</script>";
                        ob_start();
                        header('Location: sponsor.php');
                    }
                    else {
                        $error= mysqli_error($_connection);
                         echo "<script type='text/javascript'>alert('$error!')</script>";
                     }
                    }
              }

    }


?>
<?php //include('layout/header.php'); ?>

<?php //include('layout/leftsidebar.php'); ?>


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">User Profile</h4>

                    </div>

                    <div class="content">
                        <form method="POST" enctype="multipart/form-data" >

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Conference Title</label>
                                        <select name="_conference_title">
                                            <option value=""> select -</option>
             <?php  while($rows_conference_title =mysqli_fetch_assoc($result_conference_title)){ ?>
                 <option value="<?php echo $rows_conference_title['conference_id']; ?>"><?php echo $rows_conference_title['conference_title']; ?></option>
            <?php } ?>

                                        </select>
                                        <span class="error" style="color:red">* <?php echo $_sponsor_conference_title_error;?></span>


                                    </div>
                                </div>
                            </div>

                               <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Topic Brief</label>
                                        <textarea rows="5" class="form-control" placeholder="what they'll talk" name="_sponsor_speaking"> </textarea>
                                        <span class="error" style="color:red">* <?php echo $_sponsor_speaking_error;?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" name="_sponsor_companyname">
                                        <span class="error" style="color:red">* <?php echo $_sponsor_companyname_error;?></span>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" class="form-control" placeholder="Designation" name="_sponsor_designation">
                                        <span class="error" style="color:red">* <?php echo $_sponsor_designation_error;?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="_sponsor_image" class="form-control">
                                        <span class="error" style="color:red">* <?php echo $_sponsor_image_error;?></span>
                                    </div>
                                </div>
                            </div>




                            </div>
                              <button type="submit" class="btn btn-info btn-fill pull-right" name="add_sponsor">Add sponsor Profile</button>

                              <button type="submit" class="btn btn-info btn-fill pull-right" name="cancle_profile">Cancle</button>

                            <!-- <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button> -->

              </form>
        </div>
    </div>
</div>

<?php //include('layout/footer.php'); ?>
