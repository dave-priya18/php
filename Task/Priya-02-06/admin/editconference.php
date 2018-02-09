<?php  include('include/connection.php'); ?>

<?php

    $date = date("d/m/Y");

    echo $date;
    $_conference_title_error= $_conference_desc_error = $_conference_image_error=
    $_conference_end_date_error = $_conference_start_date_error = "";
    $error=0;
    $count=0;
    $var_conference_title =  $var_conference_desc = $var_conference_image  =
   $var_conference_start_date = $var_conference_end_date="";
    $display_title = $display_desc= $display_image =  $display_start_date=$display_end_date = "";
    $id = "";
    $adminid= $_SESSION['admin_credential']['admin_id'];

    $load_conference_id = $_GET['id'];
    echo $load_conference_id;

   $edit_select_query = "SELECT * FROM conference_detail WHERE conference_id='".$load_conference_id."'and admin_id='".$_SESSION['admin_credential']['admin_id']."'";
   

    $edit_result = mysqli_query($_connection,$edit_select_query);
    while($edit_rows = mysqli_fetch_array($edit_result)){
        $display_title = $edit_rows['conference_title'];
        $display_desc = $edit_rows['conference_desc'];
        $display_image = $edit_rows['conference_image'];
       
        $display_start_date = $edit_rows['conference_start_date'];
        $display_end_date = $edit_rows['conference_end_date'];
    }


    if(isset($_POST['edit_conference'])){


//About us title Validation

        if(!($_POST['_conference_title'])==""){
            if (!(strlen($_POST['_conference_title']) < 31)) {
                $count++;
                $_conference_title_error = "Title should be under 30 characters";
            }
            else{
                    //echo "Title: ".$_POST['_conference_title']."<br>";
                    $var_conference_title = $_POST['_conference_title'];
              }
        }
        else{
            $count++;
            $_conference_title_error = "Title is required";
        }


//Description Validation
        if(!($_POST['_conference_desc']== "")){
            if(!(strlen($_POST['_conference_desc']) < 201 )) {
                $count++;
                $_conference_desc_error = "Length problem";
            }
            else{
                //echo "Description : ".$_POST['_conference_desc']."<br>";
                $var_conference_desc = $_POST['_conference_desc'];
            }
        }
        else{
            $count++;
            $_conference_desc_error = "Address is required";
        }
// Image Validation

        if(!(empty($_FILES['_conference_image']['name']))){
          $var_conference_image = $_FILES['_conference_image']['name'];
          $target_folder = "../upload/";
          $target_file = $target_folder . basename($_FILES['_conference_image']['name']);


// Select file type
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
          $extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
          if( in_array($imageFileType,$extensions_arr) ){
 // Upload file
              move_uploaded_file($_FILES['_conference_image']['tmp_name'],$target_folder.$var_conference_image);
          }
          else{
            $count++;
            $_conference_image_error = "Please upload image file";
          }
        }
        else{
          $count++;
          $_conference_image_error = "Image is required";
        }



//Start Date Validation
        if(!($_POST['_conference_start_date'] == "")) { 
            if(($_POST['_conference_start_date'] <= $date )){
                $count++;
                $_conference_start_date_error = "Date is invalid";
            }

            else{
                 $var_conference_start_date =$_POST['_conference_start_date'];
            }
        }
        else{
            $count++;
            $_conference_start_date_error = "Can not be empty";
        }

//End Date Validation
        if(!($_POST['_conference_end_date'] == "")) {
            print_r($_POST['_conference_end_date'] > $_POST['_conference_start_date']);
            if(!($_POST['_conference_end_date'] > $_POST['_conference_start_date']) ){
                $count++;
                $_conference_end_date_error = "Date is invalid";
            }
            else{
                 $var_conference_end_date =$_POST['_conference_end_date'];
            }
        }
        else{
            $count++;
            $_conference_end_date_error = "Can not be empty";
        }





//Insert Query

        if($count>0){
            echo "Invalid Input";
        }
        else{
           echo $update_query ="UPDATE `conference_detail` SET conference_title='$var_conference_title',conference_image='$var_conference_image',conference_desc='$var_conference_desc',conference_start_date='$var_conference_start_date',conference_end_date='$var_conference_end_date',
           updated_by='$adminid' WHERE 
           conference_id='$load_conference_id' and 
           admin_id='".$_SESSION['admin_credential']['admin_id']."'";
            if (mysqli_query($_connection, $update_query)) {
                echo "<script type='text/javascript'>alert('Record Updated Successfully!')</script>";
                ob_start();
                header('Location: conference.php');
            } else {
                echo "Error updating record: " . mysqli_error($_connection);
            }
        }          
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
                        <h4 class="title">About Us</h4>

                    </div>

                    <div class="content">
                        <form method="POST" action="" enctype='multipart/form-data'>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Title of About Us" name="_conference_title" value="<?php echo $display_title;?>">
                                        <span class="error" style="color:red">* <?php echo $_conference_title_error;?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" placeholder="Description of About Us" rows="5" cols="20" name="_conference_desc"> <?php echo $display_desc;?> </textarea>
                                        <span class="error" style="color:red">* <?php echo $_conference_desc_error;?></span>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Image</label>

                                    
                                        <img src="../upload/<?php echo $display_image; ?>" height=100 weight=100 >
                                            <input type="file" name="_conference_image" class="form-control" value="<?php echo $display_image ?>" >


                                       
                            
                                        
                                        <span class="error" style="color:red">* <?php echo $_conference_image_error;?></span>
                                    </div>
                                </div>
                            </div>

                               <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="Date" class="form-control" placeholder="Start Date" name="_conference_start_date" value="<?php echo $display_start_date; ?>">
                                        <span class="error" style="color:red">* <?php echo $_conference_start_date_error;?></span> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="Date" class="form-control" placeholder="End Date" name="_conference_end_date" value="<?php echo $display_end_date; ?>">
                                        <span class="error" style="color:red">* <?php echo $_conference_end_date_error;?></span> 
                                    </div>
                                </div>
                                </div>
                            </div>


                              <button type="submit" class="btn btn-info btn-fill pull-right" name="edit_conference">Edit About Us</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>
