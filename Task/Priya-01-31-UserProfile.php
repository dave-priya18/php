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

$user_profile_object = new stdClass();

$user_profile_object->pid = 2049143;
$user_profile_object->{"type as"} = "er_profile";
$user_profile_object->label = "ER profile";
$user_profile_object->uid = 1000033195;
$user_profile_object->created = 1370584052;
$user_profile_object->changed = 1517206404;
$user_profile_object->entityType = "profile2";
$user_profile_object->entityInfo = array ();

$user_profile_object->entityInfo['label'] ="Profile";
$user_profile_object->entityInfo['plural label'] = "Profiles";
$user_profile_object->entityInfo['description'] = "Profile2 user profiles.";
$user_profile_object->entityInfo['entity class'] = "Profile";
$user_profile_object->entityInfo['controller class'] = "EntityAPIController";
$user_profile_object->entityInfo['base table'] = "profile";
$user_profile_object->entityInfo['fieldable'] = 1;
$user_profile_object->entityInfo["view modes"] = array();

$user_profile_object->entityInfo["view modes"]['account'] = array();
$user_profile_object->entityInfo["view modes"]['account']['label'] = "User Account";
$user_profile_object->entityInfo["view modes"]['account']['custom settings'] = 1;

$user_profile_object->entityInfo["view modes"]['sa_minimal'] = array();
$user_profile_object->entityInfo["view modes"]['sa_minimal']['label'] = "SA: Picture, Name, Boutique_name, Phones";
$user_profile_object->entityInfo["view modes"]['sa_minimal']['custom settings'] = 1;
            
$user_profile_object->entityInfo["view modes"]['sa_hours'] = array();
$user_profile_object->entityInfo["view modes"]['sa_hours']['label'] = "SA: Hours";
$user_profile_object->entityInfo["view modes"]['sa_hours']['custom settings'] = 1;
            
$user_profile_object->entityInfo["view modes"]['token'] = array();
$user_profile_object->entityInfo["view modes"]['token']['label'] = "Tokens";
$user_profile_object->entityInfo["view modes"]['token']['custom settings'] = 1;
            


$user_profile_object->entityInfo["entity keys"] = array();
$user_profile_object->entityInfo["entity keys"]['id']= "pid";
$user_profile_object->entityInfo["entity keys"]['bundle']= "type";
$user_profile_object->entityInfo["entity keys"]['label']= "label";
$user_profile_object->entityInfo["entity keys"]['revision']= null;

$user_profile_object->entityInfo["bundles"] = array();
$user_profile_object->entityInfo["bundles"]["main"] = array();
$user_profile_object->entityInfo["bundles"]["main"]['label'] = "main profile" ;
$user_profile_object->entityInfo["bundles"]["main"]['admin'] = array();

$user_profile_object->entityInfo["bundles"]["main"]['admin']['path'] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["main"]['admin']['real path'] = "admin/structure/profiles/manage/main";
$user_profile_object->entityInfo["bundles"]["main"]['admin']['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["main"]['admin']['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["main"]['admin']['access arguments'][] = "administer profiles";

$user_profile_object->entityInfo["bundles"]["ba_profile"]= array();
$user_profile_object->entityInfo["bundles"]["ba_profile"]["label"] = "BA Profile";
$user_profile_object->entityInfo["bundles"]["ba_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["ba_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["ba_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/ba_profile";
$user_profile_object->entityInfo["bundles"]["ba_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["ba_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["ba_profile"]["admin"]['access arguments'][] = "administer profiles";


$user_profile_object->entityInfo["bundles"]["sm_profile"]= array();
$user_profile_object->entityInfo["bundles"]["sm_profile"]["label"] = "SM Profile";
$user_profile_object->entityInfo["bundles"]["sm_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["sm_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["sm_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/sm_profile";
$user_profile_object->entityInfo["bundles"]["sm_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["sm_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["sm_profile"]["admin"]['access arguments'][] = "administer profiles";

$user_profile_object->entityInfo["bundles"]["er_profile"]= array();
$user_profile_object->entityInfo["bundles"]["er_profile"]["label"] = "ER Profile";
$user_profile_object->entityInfo["bundles"]["er_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["er_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["er_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/er_profile";
$user_profile_object->entityInfo["bundles"]["er_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["er_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["er_profile"]["admin"]['access arguments'][] = "administer profiles";


$user_profile_object->entityInfo["bundles"]["rr_profile"]= array();
$user_profile_object->entityInfo["bundles"]["rr_profile"]["label"] = "RR Profile";
$user_profile_object->entityInfo["bundles"]["rr_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["rr_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["rr_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/rr_profile";
$user_profile_object->entityInfo["bundles"]["rr_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["rr_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["rr_profile"]["admin"]['access arguments'][] = "administer profiles";


$user_profile_object->entityInfo["bundles"]["rr_preferences"]= array();
$user_profile_object->entityInfo["bundles"]["rr_preferences"]["label"] = "RR Preferences";
$user_profile_object->entityInfo["bundles"]["rr_preferences"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["rr_preferences"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["rr_preferences"]["admin"]['real path'] = "admin/structure/profiles/manage/rr_preferences";
$user_profile_object->entityInfo["bundles"]["rr_preferences"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["rr_preferences"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["rr_preferences"]["admin"]['access arguments'][] = "administer profiles";


$user_profile_object->entityInfo["bundles"]["r_intern"]= array();
$user_profile_object->entityInfo["bundles"]["r_intern"]["label"] = "R intern";
$user_profile_object->entityInfo["bundles"]["r_intern"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["r_intern"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["r_intern"]["admin"]['real path'] = "admin/structure/profiles/manage/r_intern";
$user_profile_object->entityInfo["bundles"]["r_intern"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["r_intern"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["r_intern"]["admin"]['access arguments'][] = "administer profiles";


$user_profile_object->entityInfo["bundles"]["ae_profile"]= array();
$user_profile_object->entityInfo["bundles"]["ae_profile"]["label"] = "AE Profile";
$user_profile_object->entityInfo["bundles"]["ae_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["ae_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["ae_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/ae_profile";
$user_profile_object->entityInfo["bundles"]["ae_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["ae_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["ae_profile"]["admin"]['access arguments'][] = "administer profiles";
               

$user_profile_object->entityInfo["bundles"]["aa_profile"]= array();
$user_profile_object->entityInfo["bundles"]["aa_profile"]["label"] = "AA Profile";
$user_profile_object->entityInfo["bundles"]["aa_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["aa_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["aa_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/aa_profile";
$user_profile_object->entityInfo["bundles"]["aa_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["aa_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["aa_profile"]["admin"]['access arguments'][] = "administer profiles";              

              
$user_profile_object->entityInfo["bundles"]["cc_profile"]= array();
$user_profile_object->entityInfo["bundles"]["cc_profile"]["label"] = "CC Profile";
$user_profile_object->entityInfo["bundles"]["cc_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["cc_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["cc_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/cc_profile";
$user_profile_object->entityInfo["bundles"]["cc_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["cc_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["cc_profile"]["admin"]['access arguments'][] = "administer profiles";
                    

$user_profile_object->entityInfo["bundles"]["corporate_profile"]= array();
$user_profile_object->entityInfo["bundles"]["corporate_profile"]["label"] = "Corporate Profile";
$user_profile_object->entityInfo["bundles"]["corporate_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["corporate_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["corporate_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/corporate_profile";
$user_profile_object->entityInfo["bundles"]["corporate_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["corporate_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["corporate_profile"]["admin"]['access arguments'][] = "administer profiles";                   

$user_profile_object->entityInfo["bundles"]["lm_profile"]= array();
$user_profile_object->entityInfo["bundles"]["lm_profile"]["label"] = "LM Profile";
$user_profile_object->entityInfo["bundles"]["lm_profile"]["admin"] = array();
$user_profile_object->entityInfo["bundles"]["lm_profile"]["admin"]["path"] = "admin/structure/profiles/manage/%profile2_type";
$user_profile_object->entityInfo["bundles"]["lm_profile"]["admin"]['real path'] = "admin/structure/profiles/manage/lm_profile";
$user_profile_object->entityInfo["bundles"]["lm_profile"]["admin"]['bundle argument'] =4;        
$user_profile_object->entityInfo["bundles"]["lm_profile"]["admin"]['access arguments'] = array();
$user_profile_object->entityInfo["bundles"]["lm_profile"]["admin"]['access arguments'][] = "administer profiles";

                    
$user_profile_object->entityInfo["bundles key"] = array();
$user_profile_object->entityInfo["bundles"]["bundle"]= "type";


$user_profile_object->entityInfo['uri callback'] ="entity_class_uri";
$user_profile_object->entityInfo['access callback'] = "Profile2_access";
$user_profile_object->entityInfo['module'] = "profile2";
$user_profile_object->entityInfo['metadata controller class'] = "Profile2MetadataController";
$user_profile_object->entityInfo['static cache'] = 1;
$user_profile_object->entityInfo['field cache'] = 1;
$user_profile_object->entityInfo['load hook'] = "profile2_load";
$user_profile_object->entityInfo["translation"] = array();

$user_profile_object->entityInfo["base table field types"] = array();

$user_profile_object->entityInfo["base table field types"]['pid'] = "serial";
$user_profile_object->entityInfo["base table field types"]['type'] = "varchar";
$user_profile_object->entityInfo["base table field types"]['uid'] = "int";
$user_profile_object->entityInfo["base table field types"]['label'] = "varchar";
$user_profile_object->entityInfo["base table field types"]['created'] = "int";
$user_profile_object->entityInfo["base table field types"]['changed'] = "int";

$user_profile_object->entityInfo["schema_fields_sql"] = array();

$user_profile_object->entityInfo["schema_fields_sql"]["base table"] = array();

$user_profile_object->entityInfo["schema_fields_sql"]["base table"][] = 'pid';
$user_profile_object->entityInfo["schema_fields_sql"]["base table"][] = 'type';
$user_profile_object->entityInfo["schema_fields_sql"]["base table"][] = 'uid';
$user_profile_object->entityInfo["schema_fields_sql"]["base table"][] = 'label';
$user_profile_object->entityInfo["schema_fields_sql"]["base table"][] = 'created';
$user_profile_object->entityInfo["schema_fields_sql"]["base table"][] = 'changed';


$user_profile_object->entityInfo['token type'] ="profile2";
$user_profile_object->entityInfo['configuration'] = null;


$user_profile_object->idKey = "pid";
$user_profile_object->nameKey = "pid";
$user_profile_object->statusKey = "status";
$user_profile_object->defaultLabel = null;
$user_profile_object->wrapper = null;
$user_profile_object->field_profile_first_name = array();
$user_profile_object->field_profile_first_name["und"] = array();
$user_profile_object->field_profile_first_name["und"][0] = array();


$user_profile_object->field_profile_first_name["und"][0]['value'] = "idevtest11";
$user_profile_object->field_profile_first_name["und"][0]["format"] = null;
$user_profile_object->field_profile_first_name["und"][0]["safe_value"] = "idevtest11";

            
$user_profile_object->field_profile_last_name = array();
$user_profile_object->field_profile_last_name["und"] = array();
$user_profile_object->field_profile_last_name["und"][0] = array();


$user_profile_object->field_profile_last_name["und"][0]['value'] = "hyphenlab";
$user_profile_object->field_profile_last_name["und"][0]["format"] = null;
$user_profile_object->field_profile_last_name["und"][0]["safe_value"] = "hyphenlab";


$user_profile_object->field_profile_picture = array();


$user_profile_object->field_profile_phone_work = array();
$user_profile_object->field_profile_phone_work["und"] = array();
$user_profile_object->field_profile_phone_work["und"][0] = array();


$user_profile_object->field_profile_phone_work["und"][0]['value'] = 123123111;
$user_profile_object->field_profile_phone_work["und"][0]["format"] = null;
$user_profile_object->field_profile_phone_work["und"][0]["safe_value"] = 123123111;

$user_profile_object->field_profile_birthday = array();
$user_profile_object->field_profile_birthday["und"] = array();
$user_profile_object->field_profile_birthday["und"][0] = array();


$user_profile_object->field_profile_birthday["und"][0]['value'] = "2017-04-05 00:00:00";
$user_profile_object->field_profile_birthday["und"][0]["timezone"] = "America/New_York";
$user_profile_object->field_profile_birthday["und"][0]["timezone_db"] = "America/New_York";
$user_profile_object->field_profile_birthday["und"][0]["date_type"] = "datetime";


$user_profile_object->field_profile_title = array();


$user_profile_object->field_profile_buyer_name = array();
$user_profile_object->field_profile_buyer_name["und"] = array();
$user_profile_object->field_profile_buyer_name["und"][0] = array();


$user_profile_object->field_profile_buyer_name["und"][0]['value'] = "idev hyphenlab";
$user_profile_object->field_profile_buyer_name["und"][0]["format"] = null;
$user_profile_object->field_profile_buyer_name["und"][0]["safe_value"] = "idev hyphenlab";

$user_profile_object->field_note_thankyou = array();


$user_profile_object->field_profile_most_freq_item= array();
$user_profile_object->field_profile_most_freq_item["und"] = array();
$user_profile_object->field_profile_most_freq_item["und"][0] = array();


$user_profile_object->field_profile_most_freq_item["und"][0]['value'] = "IB153";
$user_profile_object->field_profile_most_freq_item["und"][0]["format"] = null;
$user_profile_object->field_profile_most_freq_item["und"][0]["safe_value"] = "IB153";

$user_profile_object->field_profile_crm_segment=array();
$user_profile_object->field_profile_crm_segment["und"] = array();
$user_profile_object->field_profile_crm_segment["und"][0] = array();


$user_profile_object->field_profile_crm_segment["und"][0]['value'] = "CASUAL ENCOUNTERS";
$user_profile_object->field_profile_crm_segment["und"][0]["format"] = null;
$user_profile_object->field_profile_crm_segment["und"][0]["safe_value"] = "CASUAL ENCOUNTERS";

$user_profile_object->field_profile_crm_objective=array();

$user_profile_object->field_profile_dovetail_rec_id=array();
$user_profile_object->field_profile_dovetail_rec_id["und"] = array();
$user_profile_object->field_profile_dovetail_rec_id["und"][0] = array();


$user_profile_object->field_profile_dovetail_rec_id["und"][0]['value'] = 21290026;




$user_profile_object->field_profile_rpro_customer_id=array();
$user_profile_object->field_profile_rpro_customer_id["und"] = array();
$user_profile_object->field_profile_rpro_customer_id["und"][0] = array();


$user_profile_object->field_profile_rpro_customer_id["und"][0]['value'] = 0;


$user_profile_object->field_profile_market_optout=array();
$user_profile_object->field_profile_market_optout["und"] = array();
$user_profile_object->field_profile_market_optout["und"][0] = array();


$user_profile_object->field_profile_market_optout["und"][0]['value'] = 0;


$user_profile_object->field_profile_printrecept_optout=array();
$user_profile_object->field_profile_printrecept_optout["und"] = array();
$user_profile_object->field_profile_printrecept_optout["und"][0] = array();


$user_profile_object->field_profile_printrecept_optout["und"][0]['value'] = 0;



$user_profile_object->field_profile_emailaddress=array(); 


$user_profile_object->field_profile_address=array();
$user_profile_object->field_profile_address["und"] = array();
$user_profile_object->field_profile_address["und"][0] = array();


$user_profile_object->field_profile_address["und"][0]['country'] = "US"; 
$user_profile_object->field_profile_address["und"][0]['administrative_area'] = null; 

$user_profile_object->field_profile_address["und"][0]['sub_administrative_area'] = null; 

$user_profile_object->field_profile_address["und"][0]['locality'] = "SAN FRANCISCO"; 

$user_profile_object->field_profile_address["und"][0]['dependent_locality'] = null; 

$user_profile_object->field_profile_address["und"][0]['postal_code'] = 94115; 

$user_profile_object->field_profile_address["und"][0]['thoroughfare'] = "test address"; 

$user_profile_object->field_profile_address["und"][0]['premise'] = "test address2"; 
$user_profile_object->field_profile_address["und"][0]['sub_premise'] = null; 

$user_profile_object->field_profile_address["und"][0]['organisation_name'] = null; 

$user_profile_object->field_profile_address["und"][0]['name_line'] = null;

$user_profile_object->field_profile_address["und"][0]['first_name'] = null;
$user_profile_object->field_profile_address["und"][0]['last_name'] = null;
$user_profile_object->field_profile_address["und"][0]['date'] = null;



$user_profile_object->field_profile_clienteling_action=array(); 

$user_profile_object->field_twilio_phone_number=array();
$user_profile_object->field_twilio_phone_number["und"] = array();
$user_profile_object->field_twilio_phone_number["und"][0] = array();


$user_profile_object->field_twilio_phone_number["und"][0]['value'] = 5712492400;
$user_profile_object->field_twilio_phone_number["und"][0]["format"] = null;
$user_profile_object->field_twilio_phone_number["und"][0]["safe_value"] = 5712492400;


$user_profile_object->field_twilio_country_code=array();
$user_profile_object->field_twilio_country_code["und"] = array();
$user_profile_object->field_twilio_country_code["und"][0] = array();


$user_profile_object->field_twilio_country_code["und"][0]['value'] = "US_a+1";
$user_profile_object->field_twilio_country_code["und"][0]["format"] = null;
$user_profile_object->field_twilio_country_code["und"][0]["safe_value"] = "US_a+1";

$user_profile_object->field_favrouite_ae=array();
$user_profile_object->field_favrouite_ae["und"] = array();
$user_profile_object->field_favrouite_ae["und"][0] = array();


$user_profile_object->field_favrouite_ae["und"][0]['value'] = 1002039747;
$user_profile_object->field_favrouite_ae["und"][0]["format"] = null;
$user_profile_object->field_favrouite_ae["und"][0]["safe_value"] = 1002039747;


$user_profile_object->field_beauty_bash_participant=array();
$user_profile_object->field_beauty_bash_participant["und"] = array();
$user_profile_object->field_beauty_bash_participant["und"][0] = array();


$user_profile_object->field_beauty_bash_participant["und"][0]['value'] = 1;

$user_profile_object->field_friends_family_discount=array();
$user_profile_object->field_friends_family_discount["und"] = array();
$user_profile_object->field_friends_family_discount["und"][0] = array();


$user_profile_object->field_friends_family_discount["und"][0]['value'] = 0;

    



// echo "<pre>";
// print_r($user_profile_object);
// echo "</pre>";
$new_object = new stdClass();


	foreach($user_profile_object as $key => $value){
		// print_r($value);
		// echo "<br>";
		if($key == 'field_profile_address'){


		if(is_array($value)){
			$user_profile_object->$key = new stdClass();
			foreach ($value as $array_key => $array_value) {
				if(is_array($array_value)){
				$user_profile_object->$key->$array_key = new stdClass();
					foreach ($array_value as $a => $b) {
						if(is_array($b)){
							$user_profile_object->$key->$array_key->$a = new stdClass();
							foreach ($b as $a1 => $b1) {
								
							 		$new_object->$a1 = $b1;
							

							}
						}
			
					}
				}
		
		
			}
		}
	}
}

echo "<pre>";
print_r($new_object);
echo "</pre>";	


?>





<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>