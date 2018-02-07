<<?php
session_start();
?>

<?php require('include/connection.php'); ?>
<?php

$login_username = $login_password =$login_username_error = $login_password_error =$var_password = $var_username= "";
$count = 0;
if(isset($_POST['login'])){
//Username Validation

    if(!($_POST['login_username'])==""){
        $var_username = $_POST['login_username'];
    }
    else{
        $count++;
        $login_username_error = "Username is required";
    }               

//Password Validation

    if(!($_POST['login_password'])==""){
        $var_password = md5($_POST['login_password']);
    }
    else{
        $count++;
        $login_password_error = "Password is Required";
    }

    if($count != 0){
        echo "Invalid Input";
    }
    else{
        //echo "Connection Successful <br>";

        $select_query =  "SELECT * FROM `admin_login` WHERE admin_username='".$var_username."' and admin_password='".$var_password."'";
        //echo $select_query;
                

        $result = mysqli_query($_connection,$select_query);
        $record = mysqli_fetch_assoc($result);
        if(!empty($record)){
            ob_start();
            header('Location:dashboard.php');
            //echo '<script>window.location="dashboard.php"</script>';
            $_SESSION['admin_credential'] = $record; 
        }
        else{
            ob_start();
             header('Location:index.php');
            //echo '<script>window.location="index.php"</script>';
           
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
                        <h4 class="title">Login</h4>
                    </div>
                    <div class="content">
                        <form method="POST">
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="login_username"placeholder="Username">
                                    <span style="color:red">* <?php echo $login_username_error;?></span> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="login_password" placeholder="Password" >
                                    <span style="color:red">* <?php echo $login_password_error;?></span> 
                                </div>
                            </div>
                        </div>


                        <button type="submit" name="login" class="btn btn-info btn-fill pull-right">Login</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

        <?php 
                //Right Side Bar 
        ?>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                </div>
                <div class="content">
                    <div class="author">
                     <a href="#">
                        <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                        <h4 class="title">Mike Andrew<br />
                         <small>michael24</small>
                     </h4>
                 </a>
             </div>
             <p class="description text-center"> "Lamborghini Mercy <br>
                Your chick she so thirsty <br>
                I'm in that two seat Lambo"
            </p>
        </div>
        <hr>
        <div class="text-center">
            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

        </div>
    </div>
</div>

</div>
</div>
</div>

<?php include('layout/footer.php'); ?>