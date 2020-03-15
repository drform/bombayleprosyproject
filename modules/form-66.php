 <?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // do post
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blp_db";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}
		
		
		//mysqli_select_db($con , 'blp_db');

		if(isset($_POST['patient_name'])){
			$patient_name = $_POST['patient_name'];
		}
		else{
			$patient_name = "NAN";
		}
		if(isset($_POST['clinic_id'])){
			
		$clinic_id = $_POST['clinic_id'];
		}
		else{
			$clinic_id = "NAN";
		}
		if(isset($_POST['study_no'])){
			$study_no = ($_POST['study_no']);
		}
		else{
			
			$study_no = "NAN";
		}
		
		if(isset($_POST['date'])){
			$date = $_POST['date'];
		}
		else{
			
			$date = "NAN";
		}
		if(isset($_POST['staff_name'])){
			$staff_name = $_POST['staff_name'];
		}
		else{
			
			$staff_name = "NAN";
		}
		if(isset($_POST['current_status'])){
			$current_status = $_POST['current_status'];
		}
		else{
			
			$current_status = "NAN";
		}
		if(isset($_POST['nfa'])){
			$nfa = $_POST['nfa'];
		}
		else{
			
			$nfa = "NAN";
		}
		if(isset($_POST['eess'])){
			$eess = $_POST['eess'];
		}
		else{
			
			$eess = "NAN";
		}		
		if(isset($_POST['qol'])){
			$qol = $_POST['qol'];
		}
		else{
			
			$qol = "NAN";
		}
		if(isset($_POST['vas'])){
			$vas = $_POST['vas'];
		}
		else{
			
			$vas = "NAN";
		}
		if(isset($_POST['current_antireaction_therapy'])){
			$current_antireaction_therapy = $_POST['current_antireaction_therapy'];
		}
		else{
			
			$current_antireaction_therapy = "NAN";
		}
		if(isset($_POST['adverse_effect_prednisolone'])){
			$adverse_effect_prednisolone = $_POST['adverse_effect_prednisolone'];
		}
		else{
			
			$adverse_effect_prednisolone = "NAN";
		}
		if(isset($_POST['adverse_effect_clofazimine'])){
			$adverse_effect_clofazimine = $_POST['adverse_effect_clofazimine'];
		}
		else{
			
			$adverse_effect_clofazimine = "NAN";
		}
		if(isset($_POST['no_weeks_extra_clofazimine'])){
			$no_weeks_extra_clofazimine = $_POST['no_weeks_extra_clofazimine'];
		}
		else{
			
			$no_weeks_extra_clofazimine = "NAN";
		}
		if(isset($_POST['enl_at_randomisation'])){
			$enl_at_randomisation = $_POST['enl_at_randomisation'];
		}
		else{
			
			$enl_at_randomisation = "NAN";
		}
		if(isset($_POST['duration_first_episode'])){
			$duration_first_episode = $_POST['duration_first_episode'];
		}
		else{
			
			$duration_first_episode = "NAN";
		}
		if(isset($_POST['flare_of_enl'])){
			$flare_of_enl = $_POST['flare_of_enl'];
		}
		else{
			
			$flare_of_enl = "NAN";
		}
		if(isset($_POST['if_flare_how_long'])){
			$if_flare_how_long = $_POST['if_flare_how_long'];
		}
		else{
			
			$if_flare_how_long = "NAN";
		}
		if(isset($_POST['eess_at_flare'])){
			$eess_at_flare = $_POST['eess_at_flare'];
		}
		else{
			
			$eess_at_flare = "NAN";
		}
		if(isset($_POST['recurrent_enl_steroids'])){
			$recurrent_enl_steroids = $_POST['recurrent_enl_steroids'];
		}
		else{
			
			$recurrent_enl_steroids = "NAN";
		}

		if(isset($_POST['chronic_enl_randomisation'])){
			$chronic_enl_randomisation = $_POST['chronic_enl_randomisation'];
		}
		else{
			
			$chronic_enl_randomisation = "NAN";
		}
		if(isset($_POST['total_steroids_consumed'])){
			$total_steroids_consumed = $_POST['total_steroids_consumed'];
		}
		else{
			
			$total_steroids_consumed = "NAN";
		}
		
		if(isset($_POST['change_in_nfa'])){
			$change_in_nfa = $_POST['change_in_nfa'];
		}
		else{
			
			$change_in_nfa = "NAN";
		}
		if(isset($_POST['change_in_nfa_desc'])){
			$change_in_nfa_desc = $_POST['change_in_nfa_desc'];
		}
		else{
			
			$change_in_nfa_desc = "NAN";
		}
		if(isset($_POST['change_in_qol'])){
			$change_in_qol = $_POST['change_in_qol'];
		}
		else{
			
			$change_in_qol = "NAN";
		}
		
		if(isset($_POST['adverse_effect_of_drug'])){
			$adverse_effect_of_drug = $_POST['adverse_effect_of_drug'];
		}
		else{
			
			$adverse_effect_of_drug = "NAN";
		}
		if(isset($_POST['drug_desc'])){
			$drug_desc = $_POST['drug_desc'];
		}
		else{
			
			$drug_desc = "NAN";
		}
		if(isset($_POST['reason_withdrawal_before_24m'])){
			$reason_withdrawal_before_24m = $_POST['reason_withdrawal_before_24m'];
		}
		else{
			
			$reason_withdrawal_before_24m = "NAN";
		}
		if(isset($_POST['others'])){
			$others = $_POST['others'];
		}
		else{
			
			$others = "NAN";
		}
		
		$q1 = "insert into form6 (patient_name,clinic_id,study_no,date,staff_name,current_status,nfa,eess,qol,vas,
		current_antireaction_therapy,adverse_effect_prednisolone,adverse_effect_clofazimine,no_weeks_extra_clofazimine,enl_at_randomisation,duration_first_episode,flare_of_enl,if_flare_how_long,eess_at_flare,recurrent_enl_steroids,chronic_enl_randomisation,total_steroids_consumed,
		change_in_nfa,change_in_nfa_desc,change_in_qol,adverse_effect_of_drug,drug_desc,reason_withdrawal_before_24m,others) 
		values ('$patient_name','$clinic_id','$study_no','$date','$staff_name','$current_status','$nfa','$eess','$qol','$vas','$current_antireaction_therapy',
		'$adverse_effect_prednisolone','$adverse_effect_clofazimine','$no_weeks_extra_clofazimine','$enl_at_randomisation','$duration_first_episode','$flare_of_enl','$if_flare_how_long','$eess_at_flare','$recurrent_enl_steroids','$chronic_enl_randomisation','$total_steroids_consumed',
		'$change_in_nfa','$change_in_nfa_desc','$change_in_qol','$adverse_effect_of_drug','$drug_desc','$reason_withdrawal_before_24m','$others');";
		echo $q1;
		if ($conn->query($q1) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $q1 . "<br>" . $conn->error;
		}

$conn->close();

	} else  {
		// do get
		echo "not a post request";
	}

	

 ?>

