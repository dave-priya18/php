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
        <a href="Priya-01-26.php"> Next </a>
       </div>
      </form>

      <?php

        date_default_timezone_set("Asia/Kolkata");

    
        $date=date_create("2016-02-26");
        date_add($date,date_interval_create_from_date_string("30 days"));
        echo date_format($date,"d-m-Y")."<br>";

        $date1=date_create_from_format("j-M-Y","26-Feb-2015");
        echo date_format($date1,"Y/m/d")."<br>";

        $date1=date_create("2015-02-26");
        $date2=date_create("2016-02-26");
        $diff=date_diff($date1,$date2);
        echo $diff->format("%R%a days")."<br>";


        $date3=date_create("2018-03-03");
        date_modify($date3,"+15 days");
        echo date_format($date3,"Y-m-d");

        date_time_set($date, 5,55,55);
        echo date_format($date,"Y-m-d H:i:s")."<br>";

        print_r(getdate())."<br>";
        print_r(gettimeofday())."<br>";
      ?> 

</form>


<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>
