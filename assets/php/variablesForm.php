<?php
$dateToday = date('Y-m-d');
$date = empty($_POST['formDate']) ? $dateToday : $_POST['formDate'];
// echo "<br>variables page";
// $ID 	 = empty($_POST['ID']) : ;
$Clinic = empty($_POST['Clinic']) ? 'HO' : $_POST['Clinic'];
$IDclinic = empty($_POST['IDclinic']) ? 0 : $_POST['IDclinic'];	// figure out how to insert this
$Name = escape(empty($_POST['Name']) ? 'Anonymous' : $_POST['Name']);

// $DOB = empty($_POST['DOB']) ? '0000-01-01': $_POST['DOB']);	// strtotime('10/16/2003')
if (empty($_POST['DOB'])) {
	// echo "<br>date is empty 0000";
	$DOB = '0000-01-01';
}
else {
	// echo "<br>date is not empty";
	$DOB = $_POST['DOB'];
}

$age = empty($_POST['age']) ? 0 : $_POST['age'];
$aadhar = empty($_POST['aadhar']) ? 000000000000 : $_POST['aadhar'];
$Sex = empty($_POST['Sex']) ? 'Male' : $_POST['Sex'];
$Caste = empty($_POST['Caste']) ? 'Others' : $_POST['Caste'];
$ecostat = empty($_POST['ecostat']) ? 'Non-BPL' : $_POST['ecostat'];
$Add1 = escape(empty($_POST['Add1']) ? 'None' : $_POST['Add1']);
$Add2 = escape(empty($_POST['Add2']) ? 'None' : $_POST['Add2']);

$ObstetricH = escape(empty($_POST['ObstetricH']) ? 'None' : $_POST['ObstetricH']);


$Contact = empty($_POST['Contact']) ? 0000000000 : $_POST['Contact'];
// $Contact2 = empty($_POST['Contact2']) ? 0000000000 : $_POST['Contact2'];
$Occupation = escape(empty($_POST['Occupation']) ? 'None' : $_POST['Occupation']);

$Examiner = escape(empty($_POST['Examiner']) ? 'Unknown' : $_POST['Examiner']);
$Referred = escape(empty($_POST['Referred']) ? 'None' : $_POST['Referred']);

$name_fh = empty($_POST['name_fh']) ? 'Unknown' : $_POST['name_fh'];
$age_fh = empty($_POST['age_fh']) ? 0 : $_POST['age_fh'];
$Relation_fh = empty($_POST['Relation_fh']) ? 'Unknown' : $_POST['Relation_fh'];
$Disease_fh = empty($_POST['Disease_fh']) ? 'None' : $_POST['Disease_fh'];
$Notes_fh = empty($_POST['Notes_fh']) ? 'None' : $_POST['Notes_fh'];

$Allergies = escape(empty($_POST['Allergies']) ? 'None' : $_POST['Allergies']);

$Tobacco = empty($_POST['Tobacco']) ? 0 : $_POST['Tobacco'];
$Tobacco_notes = escape(empty($_POST['Tobacco_notes']) ? 'None' : $_POST['Tobacco_notes']);
// $Tobacco_start = empty($_POST['Tobacco_start']) ? '' : ;
// $Tobacco_end = empty($_POST['Tobacco_end']) ? '' : ;

$Alcohol = empty($_POST['Alcohol']) ? 0 : $_POST['Alcohol'];
$Alcohol_notes = escape(empty($_POST['Alcohol_notes']) ? 'None' : $_POST['Alcohol_notes']);
// $Alcohol_start = empty($_POST['Alcohol_start']) ? '' : ;
// $Alcohol_end = empty($_POST['Alcohol_end']) ? '' : ;

$Cigarette = empty($_POST['Cigarette']) ? 0 : $_POST['Cigarette'];
$Cigarette_notes = escape(empty($_POST['Cigarette_notes']) ? 'None' : $_POST['Cigarette_notes']);
// $Cigarette_start = empty($_POST['Cigarette_start']) ? '' : ;
// $Cigarette_end = empty($_POST['Cigarette_end']) ? '' : ;


$PMH = escape(empty($_POST['PMH']) ? 'None' : $_POST['PMH']);

$Hospital_pmh = empty($_POST['hospital_pmh']) ? 'Unknown' : $_POST['hospital_pmh'];
$Drug_pmh = empty($_POST['drug_pmh']) ? 'Unknown' : $_POST['drug_pmh'];
$Dosage_pmh = empty($_POST['dosage_pmh']) ? 'Unknown' : $_POST['dosage_pmh'];
$Start_past_date_pmh = empty($_POST['Start_past_date_pmh']) ? $date : $_POST['Start_past_date_pmh'];
$End_past_date_pmh = empty($_POST['End_past_date_pmh']) ? $date : $_POST['End_past_date_pmh'];

$Klp_name = empty($_POST['klp_name']) ? 'Anonymous' : $_POST['klp_name'];
$Klp_relation = empty($_POST['klp_relation']) ? 'Unknown' : $_POST['klp_relation'];
$Klp_contact = empty($_POST['klp_contact']) ? 0000000000 : $_POST['klp_contact'];
$Klp_address = empty($_POST['klp_address']) ? 'Unknown' : $_POST['klp_address'];
$Klp_description =  empty($_POST['klp_description']) ? 'None' : $_POST['klp_description'];

$fcfs = escape(empty($_POST['fcfs']) ? 'None' : $_POST['fcfs']);	//first signs and symptoms

// for naming of images
$imageTags = '';
	// type of leprosy diagnosed
if( $tld_pb = empty($_POST['tld_pb']) ? 0 : $_POST['tld_pb'] ) { $imageTags = $imageTags . "_PB"; }
if( $tld_mb = empty($_POST['tld_mb']) ? 0 : $_POST['tld_mb'] ) { $imageTags = $imageTags . "_MB"; }
if( $tld_tt = empty($_POST['tld_tt']) ? 0 : $_POST['tld_tt'] ) { $imageTags = $imageTags . "_TT"; }
if( $tld_bt = empty($_POST['tld_bt']) ? 0 : $_POST['tld_bt'] ) { $imageTags = $imageTags . "_BT"; }
if( $tld_bb = empty($_POST['tld_bb']) ? 0 : $_POST['tld_bb'] ) { $imageTags = $imageTags . "_BB"; }
if( $tld_bl = empty($_POST['tld_bl']) ? 0 : $_POST['tld_bl'] ) { $imageTags = $imageTags . "_BL"; }
if( $tld_ll = empty($_POST['tld_ll']) ? 0 : $_POST['tld_ll'] ) { $imageTags = $imageTags . "_LL"; }
if( $tld_pnl = empty($_POST['tld_pnl']) ? 0 : $_POST['tld_pnl'] ) { $imageTags = $imageTags . "_PNL"; }


$Drug_used_first_treatment = empty($_POST['drug_used']) ? 'Unknown' : $_POST['drug_used'];
$Drug_dosage_first_treatment = empty($_POST['drug_dosage']) ? 'Unknown' : $_POST['drug_dosage'];
$Start_first_treatment = empty($_POST['Start_first_treatment']) ? $date : $_POST['Start_first_treatment'];
$End_first_treatment = empty($_POST['End_first_treatment']) ? $date : $_POST['End_first_treatment'];

$omc = escape(empty($_POST['omc']) ? 'None' : $_POST['omc']); //mdt
$Result = escape(empty($_POST['Result']) ? 'Unknown' : $_POST['Result']);	//outcome after initial treatment

// <!-- type of reaction -->
$Reaction = empty($_POST['Reaction']) ? 'None' : $_POST['Reaction'];
$Neuritis = empty($_POST['Neuritis']) ? 'No' : $_POST['Neuritis'];
$Reaction_description = escape(empty($_POST['Reaction_description']) ? 'None' : $_POST['Reaction_description']);

$Current_treatment = escape(empty($_POST['Current_treatment']) ? 'None' : $_POST['Current_treatment']);
$Grade0 = empty($_POST['Grade0']) ? NULL : $_POST['Grade0'];
$Grade1 = empty($_POST['Grade1']) ? NULL : $_POST['Grade1'];
$Grade2 = empty($_POST['Grade2']) ? NULL : $_POST['Grade2'];

$Opthalmic_involvement = escape(empty($_POST['Opthalmic_involvement']) ? 'None' : $_POST['Opthalmic_involvement']);
$Assessment	 = escape(empty($_POST['Assessment']) ? 'None' : $_POST['Assessment']);	//skin lesions
$Touch = empty($_POST['Touch']) ? 'None' : $_POST['Touch'];
$Pain = empty($_POST['Pain']) ? 'None' : $_POST['Pain'];
$Temperature = empty($_POST['Temp']) ? "Unknown" : implode("/", $_POST['Temp']);
// $Temperature = implode("/", $_POST['Temp'])) : ;

$Supra_orbital_Thicken_Left = empty($_POST['Supra_orbital_Thicken_Left']) ? 'No' : $_POST['Supra_orbital_Thicken_Left'];
$Great_Auricular_Thicken_Left = empty($_POST['Great_Auricular_Thicken_Left']) ? 'No' : $_POST['Great_Auricular_Thicken_Left'];
$Ulnar_Thicken_Left = empty($_POST['Ulnar_Thicken_Left']) ? 'No' : $_POST['Ulnar_Thicken_Left'];
$Median_Cutaneous_Thicken_Left = empty($_POST['Median_Cutaneous_Thicken_Left']) ? 'No' : $_POST['Median_Cutaneous_Thicken_Left'];
$Radial_Cutaneous_Thicken_Left = empty($_POST['Radial_Cutaneous_Thicken_Left']) ? 'No' : $_POST['Radial_Cutaneous_Thicken_Left'];
$Lateral_Popliteal_Thicken_Left = empty($_POST['Lateral_Popliteal_Thicken_Left']) ? 'No' : $_POST['Lateral_Popliteal_Thicken_Left'];
$Sural_Nerve_Thicken_Left = empty($_POST['Sural_Nerve_Thicken_Left']) ? 'No' : $_POST['Sural_Nerve_Thicken_Left'];
$Posterior_Tibial_Thicken_Left = empty($_POST['Posterior_Tibial_Thicken_Left']) ? 'No' : $_POST['Posterior_Tibial_Thicken_Left'];
$Superficial_Peroneal_Thicken_Left = empty($_POST['Superficial_Peroneal_Thicken_Left']) ? 'No' : $_POST['Superficial_Peroneal_Thicken_Left'];

$Supra_orbital_Tender_Left = empty($_POST['Supra_orbital_Tender_Left']) ? 'No' : $_POST['Supra_orbital_Tender_Left'];
$Great_Auricular_Tender_Left = empty($_POST['Great_Auricular_Tender_Left']) ? 'No' : $_POST['Great_Auricular_Tender_Left'];
$Ulnar_Tender_Left = empty($_POST['Ulnar_Tender_Left']) ? 'No' : $_POST['Ulnar_Tender_Left'];
$Median_Cutaneous_Tender_Left = empty($_POST['Median_Cutaneous_Tender_Left']) ? 'No' : $_POST['Median_Cutaneous_Tender_Left'];
$Radial_Cutaneous_Tender_Left = empty($_POST['Radial_Cutaneous_Tender_Left']) ? 'No' : $_POST['Radial_Cutaneous_Tender_Left'];
$Lateral_Popliteal_Tender_Left = empty($_POST['Lateral_Popliteal_Tender_Left']) ? 'No' : $_POST['Lateral_Popliteal_Tender_Left'];
$Sural_Nerve_Tender_Left = empty($_POST['Sural_Nerve_Tender_Left']) ? 'No' : $_POST['Sural_Nerve_Tender_Left'];
$Posterior_Tibial_Tender_Left = empty($_POST['Posterior_Tibial_Tender_Left']) ? 'No' : $_POST['Posterior_Tibial_Tender_Left'];
$Superficial_Peroneal_Tender_Left = empty($_POST['Superficial_Peroneal_Tender_Left']) ? 'No' : $_POST['Superficial_Peroneal_Tender_Left'];

$Supra_orbital_Thicken_Right = empty($_POST['Supra_orbital_Thicken_Right']) ? 'No' : $_POST['Supra_orbital_Thicken_Right'];
$Great_Auricular_Thicken_Right = empty($_POST['Great_Auricular_Thicken_Right']) ? 'No' : $_POST['Great_Auricular_Thicken_Right'];
$Ulnar_Thicken_Right = empty($_POST['Ulnar_Thicken_Right']) ? 'No' : $_POST['Ulnar_Thicken_Right'];
$Median_Cutaneous_Thicken_Right = empty($_POST['Median_Cutaneous_Thicken_Right']) ? 'No' : $_POST['Median_Cutaneous_Thicken_Right'];
$Radial_Cutaneous_Thicken_Right = empty($_POST['Radial_Cutaneous_Thicken_Right']) ? 'No' : $_POST['Radial_Cutaneous_Thicken_Right'];
$Lateral_Popliteal_Thicken_Right = empty($_POST['Lateral_Popliteal_Thicken_Right']) ? 'No' : $_POST['Lateral_Popliteal_Thicken_Right'];
$Sural_Nerve_Thicken_Right = empty($_POST['Sural_Nerve_Thicken_Right']) ? 'No' : $_POST['Sural_Nerve_Thicken_Right'];
$Posterior_Tibial_Thicken_Right = empty($_POST['Posterior_Tibial_Thicken_Right']) ? 'No' : $_POST['Posterior_Tibial_Thicken_Right'];
$Superficial_Peroneal_Thicken_Right = empty($_POST['Superficial_Peroneal_Thicken_Right']) ? 'No' : $_POST['Superficial_Peroneal_Thicken_Right'];

$Supra_orbital_Tender_Right = empty($_POST['Supra_orbital_Tender_Right']) ? 'No' : $_POST['Supra_orbital_Tender_Right'];
$Great_Auricular_Tender_Right = empty($_POST['Great_Auricular_Tender_Right']) ? 'No' : $_POST['Great_Auricular_Tender_Right'];
$Ulnar_Tender_Right = empty($_POST['Ulnar_Tender_Right']) ? 'No' : $_POST['Ulnar_Tender_Right'];
$Median_Cutaneous_Tender_Right = empty($_POST['Median_Cutaneous_Tender_Right']) ? 'No' : $_POST['Median_Cutaneous_Tender_Right'];
$Radial_Cutaneous_Tender_Right = empty($_POST['Radial_Cutaneous_Tender_Right']) ? 'No' : $_POST['Radial_Cutaneous_Tender_Right'];
$Lateral_Popliteal_Tender_Right = empty($_POST['Lateral_Popliteal_Tender_Right']) ? 'No' : $_POST['Lateral_Popliteal_Tender_Right'];
$Sural_Nerve_Tender_Right = empty($_POST['Sural_Nerve_Tender_Right']) ? 'No' : $_POST['Sural_Nerve_Tender_Right'];
$Posterior_Tibial_Tender_Right = empty($_POST['Posterior_Tibial_Tender_Right']) ? 'No' : $_POST['Posterior_Tibial_Tender_Right'];
$Superficial_Peroneal_Tender_Right = empty($_POST['Superficial_Peroneal_Tender_Right']) ? 'No' : $_POST['Superficial_Peroneal_Tender_Right'];

$Eyes = escape(empty($_POST['Eyes']) ? 'None' : $_POST['Eyes']);
$furtherobservations = escape(empty($_POST['furtherobservations']) ? 'None' : $_POST['furtherobservations']);

$Images = empty($_FILES['images']) ? NULL : $_FILES['images'];

// $follow_up_clinical_notes= empty($_POST['follow_up_clinical_notes']) : ;
// $follow_up_prescription= empty($_POST['follow_up_prescription']) : ;
$follow_up_complaints = escape(empty($_POST['Complaint']) ? 'None' : $_POST['Complaint']);
// $follow_up_due_date= empty($_POST['follow_up_due_date']) : ;
// $appointment_for = empty($_POST['appointment_for']) : ;
// $date_for_next_appointment = empty($_POST['date_for_next_appointment']) : ;

// $Complaint	 = empty($_POST['Complaint']) : ;

// $Site = empty($_POST['Site']) : ;
// $mi = empty($_POST['Mi']) : ;
// $bi = empty($_POST['Bi']) : ;
// $Smear_due_date	 = empty($_POST['Smear_due_date']) : ;
?>