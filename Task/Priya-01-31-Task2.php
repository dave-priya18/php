<?php include('include/header.php'); ?>

<div id="content">
<div id="content-wrapper">
<?php include('include/sidebar.php');  ?>
<!-- Main content area -->
<main class="container-fluid">
<div class="row">
<!-- Main content -->
<div class="col-md-8">
<div style="text-align:left">
<a href="index.php" > Home </a>
</div>
<div style="text-align:right">
<a href="Priya-02-01.php"> Next </a>
</div>


<?php
//object creation
$user_profile = new stdClass();

$user_profile->vid = 5631;
$user_profile->uid = 1002043255;
$user_profile-> title = "Appointment with idevtest11 hyphenlabere (idev@hyphenlab.com)";
$user_profile->log=null;
$user_profile->status = 1;
$user_profile->comment = 0;
$user_profile->promote = 0;
$user_profile->sticky = 0;
$user_profile->nid = 5631;
$user_profile->type = "appointment";
$user_profile->language = "und";
$user_profile->created = 1517407102;
$user_profile->changed = 1517407102;
$user_profile->tnid = 0;
$user_profile->translate = 0;
$user_profile->revision_timestamp = 1517407102;
$user_profile->revision_uid = 1002043255;

$user_profile->field_appointment_from = array();
$user_profile->field_appointment_from["und"] = array();
$user_profile->field_appointment_from["und"][] = array();
$user_profile->field_appointment_from["und"][0]["targer_id"] = 1000033195;

$user_profile->field_appointment_to = array();
$user_profile->field_appointment_to["und"] = array();
$user_profile->field_appointment_to["und"][] = array();
$user_profile->field_appointment_to["und"][0]["targer_id"] = 1002039747;


$user_profile->field_appointment_note = array();
$user_profile->field_appointment_note["und"] = array();
$user_profile->field_appointment_note["und"][] = array();
$user_profile->field_appointment_note["und"][0]["value"] = "test";
$user_profile->field_appointment_note["und"][0]["format"] = null;
$user_profile->field_appointment_note["und"][0]["safe_value"] = "test";

$user_profile->field_appointment_status = array();
$user_profile->field_appointment_status["und"] = array();
$user_profile->field_appointment_status["und"][] = array();
$user_profile->field_appointment_status["und"][0]["tid"] = 2984;

$user_profile->field_calendar_date = array();
$user_profile->field_calendar_date["und"] = array();
$user_profile->field_calendar_date["und"][] = array();
$user_profile->field_calendar_date["und"][0]["value"] = 1517411400;
$user_profile->field_calendar_date["und"][0]["timezone"] = "America/New_York";
$user_profile->field_calendar_date["und"][0]["timezone_db"] = "UTC";
$user_profile->field_calendar_date["und"][0]["date_type"] = "datastamp";

$user_profile->field_appointment_services = array();
$user_profile->field_appointment_services["und"] = array();
$user_profile->field_appointment_services["und"][] = array();
$user_profile->field_appointment_services["und"][0]["tid"] = 3358;

$user_profile->field_calendar_date_end = array();
$user_profile->field_calendar_date_end["und"] = array();
$user_profile->field_calendar_date_end["und"][] = array();
$user_profile->field_calendar_date_end["und"][0]["value"] = 1517412000;
$user_profile->field_calendar_date_end["und"][0]["timezone"] = "America/New_York";
$user_profile->field_calendar_date_end["und"][0]["timezone_db"] = "UTC";
$user_profile->field_calendar_date_end["und"][0]["date_type"] = "datastamp";

$user_profile->field_appointment_client_request = array();
$user_profile->field_appointment_client_request["und"] = array();
$user_profile->field_appointment_client_request["und"][] = array();
$user_profile->field_appointment_client_request["und"][0]["value"] = 1;


$user_profile->field_email_confirm = array();
$user_profile->field_email_confirm["und"] = array();
$user_profile->field_email_confirm["und"][] = array();
$user_profile->field_email_confirm["und"][0]["value"] = 1;


$user_profile->field_appointment_newsletter = array();
$user_profile->field_appointment_newsletter["und"] = array();
$user_profile->field_appointment_newsletter["und"][] = array();
$user_profile->field_appointment_newsletter["und"][0]["value"] = 0;


$user_profile->field_appoint_delete_unique_id = array();
$user_profile->field_appoint_delete_unique_id["und"] = array();
$user_profile->field_appoint_delete_unique_id["und"][] = array();
$user_profile->field_appoint_delete_unique_id["und"][0]["value"] = 10000331951517407102;
$user_profile->field_appoint_delete_unique_id["und"][0]["format"] = null;
$user_profile->field_appoint_delete_unique_id["und"][0]["safe_value"] =10000331951517407102;

$user_profile->field_first_selected_staff = array();
$user_profile->field_first_selected_staff["und"] = array();
$user_profile->field_first_selected_staff["und"][] = array();
$user_profile->field_first_selected_staff["und"][0]["value"] = 1002039747;
$user_profile->field_first_selected_staff["und"][0]["format"] = null;
$user_profile->field_first_selected_staff["und"][0]["safe_value"] =1002039747;


$user_profile->field_appointment_modified_date = array();

$user_profile->field_no_preference = array();
$user_profile->field_no_preference["und"] = array();
$user_profile->field_no_preference["und"][] = array();
$user_profile->field_no_preference["und"][0]["value"] = 2;
$user_profile->field_no_preference["und"][0]["format"] = null;
$user_profile->field_no_preference["und"][0]["safe_value"] = 2;

$user_profile->field_appointment_delete_by = array();

$user_profile->field_appointment_rebook = array();
$user_profile->field_appointment_rebook["und"] = array();
$user_profile->field_appointment_rebook["und"][] = array();
$user_profile->field_appointment_rebook["und"][0]["value"] = 0;
$user_profile->field_appointment_rebook["und"][0]["format"] = null;
$user_profile->field_appointment_rebook["und"][0]["safe_value"] = 0;


$user_profile->field_primary_id = array();




$user_profile->cid = 0;
$user_profile->last_comment_timestamp = 1517407102;
$user_profile->last_comment_name = null;
$user_profile->last_comment_uid = 1002043255;
$user_profile->comment_count = 0;
$user_profile->name = "sm_test@hlab.com";
$user_profile->picture = 0;
$user_profile->data = "a:1:{s:7:"."contact".";i:0;}";




$_array = array();
foreach ($user_profile as $key => $value) {
  if($key == "field_calendar_date_end"){
    $user_profile->field_calendar_date_end = new stdClass();
    foreach ($value as $und_key => $und_value) {
      $user_profile->field_calendar_date_end->$und_key = new stdClass();
      foreach ($und_value as $index_key => $index_value) {
        $user_profile->field_calendar_date_end->$und_key->$index_key = new stdClass();
        foreach ($index_value as $array_key => $array_value) {
          $_array[$array_key] = $array_value;
        }
      }
    }
  }
}


echo "<pre>";
print_r($_array);
echo "</pre>";


?>

<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>
