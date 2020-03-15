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

		if(isset($_POST['within_24m_diagnosis'])){
			$within_24m_diagnosis = $_POST['within_24m_diagnosis'];
		}
		else{
			$within_24m_diagnosis = "";
		}
		if(isset($_POST['age'])){
			
		$age = $_POST['age'];
		}
		else{
			$age = "";
		}
		if(isset($_POST['patient_name'])){
			$patient_name = ($_POST['patient_name']);
		}
		else{
			
			$patient_name = "";
		}
		
		if(isset($_POST['clinic_id'])){
			$clinic_id = $_POST['clinic_id'];
		}
		else{
			
			$clinic_id = "";
		}
		if(isset($_POST['study_no'])){
			$study_no = $_POST['study_no'];
		}
		else{
			
			$study_no = "";
		}
		if(isset($_POST['date'])){
			$date = $_POST['date'];
		}
		else{
			
			$date = "";
		}
		if(isset($_POST['staff_name'])){
			$staff_name = $_POST['staff_name'];
		}
		else{
			
			$staff_name = "";
		}
		if(isset($_POST['patient_name1'])){
			$patient_name1 = $_POST['patient_name1'];
		}
		else{
			
			$patient_name1 = "";
		}		
		if(isset($_POST['sex'])){
			$sex = $_POST['sex'];
		}
		else{
			
			$sex = "";
		}
		if(isset($_POST['clinic_regno'])){
			$clinic_regno = $_POST['clinic_regno'];
		}
		else{
			
			$clinic_regno = "";
		}
		if(isset($_POST['address'])){
			$address = $_POST['address'];
		}
		else{
			
			$address = "";
		}
		if(isset($_POST['date_of_start_mdt'])){
			$date_of_start_mdt = $_POST['date_of_start_mdt'];
		}
		else{
			
			$date_of_start_mdt = "";
		}
		if(isset($_POST['date_of_rft'])){
			$date_of_rft = $_POST['date_of_rft'];
		}
		else{
			
			$date_of_rft = "";
		}
		if(isset($_POST['smear_at_diagnosis'])){
			$smear_at_diagnosis = $_POST['smear_at_diagnosis'];
		}
		else{
			
			$smear_at_diagnosis = "";
		}
		if(isset($_POST['smear_date'])){
			$smear_date = $_POST['smear_date'];
		}
		else{
			
			$smear_date = "";
		}
		if(isset($_POST['weight'])){
			$weight = $_POST['weight'];
		}
		else{
			
			$weight = "";
		}
		if(isset($_POST['height'])){
			$height = $_POST['height'];
		}
		else{
			
			$height = "";
		}
		if(isset($_POST['bmi'])){
			$bmi = $_POST['bmi'];
		}
		else{
			
			$bmi = "";
		}
		if(isset($_POST['no_contra_indication_steroids'])){
			$no_contra_indication_steroids = $_POST['no_contra_indication_steroids'];
		}
		else{
			
			$no_contra_indication_steroids = "";
		}
		if(isset($_POST['able_to_attend_regularly'])){
			$able_to_attend_regularly = $_POST['able_to_attend_regularly'];
		}
		else{
			
			$able_to_attend_regularly = "";
		}

		if(isset($_POST['pregnant'])){
			$pregnant = $_POST['pregnant'];
		}
		else{
			
			$pregnant = "";
		}
		if(isset($_POST['tuberculosis'])){
			$tuberculosis = $_POST['tuberculosis'];
		}
		else{
			
			$tuberculosis = "";
		}
		
		if(isset($_POST['diabetes'])){
			$diabetes = $_POST['diabetes'];
		}
		else{
			
			$diabetes = "";
		}
		if(isset($_POST['other_illness'])){
			$other_illness = $_POST['other_illness'];
		}
		else{
			
			$other_illness = "";
		}
		if(isset($_POST['other_illness_desc'])){
			$other_illness_desc = $_POST['other_illness_desc'];
		}
		else{
			
			$other_illness_desc = "";
		}
		
		if(isset($_POST['inform_consent'])){
			$inform_consent = $_POST['inform_consent'];
		}
		else{
			
			$inform_consent = "";
		}
		if(isset($_POST['allocate_study_no'])){
			$allocate_study_no = $_POST['allocate_study_no'];
		}
		else{
			
			$allocate_study_no = "";
		}
		if(isset($_POST['history_of_enl'])){
			$history_of_enl = $_POST['history_of_enl'];
		}
		else{
			
			$history_of_enl = "";
		}
		
		$q = "insert into form1 (patient_name,clinic_id,study_no,date,staff_name,patient_name1,sex,clinic_regno,address,date_of_start_mdt,
		date_of_rft,smear_at_diagnosis,smear_date,within_24m_diagnosis,age,weight,height,bmi,no_contra_indication_steroids,able_to_attend_regularly,
		pregnant,tuberculosis,diabetes,other_illness,other_illness_desc,inform_consent,allocate_study_no,history_of_enl) 
		values ('$patient_name','$clinic_id','$study_no','$date','$staff_name','$patient_name1','$sex','$clinic_regno','$address','$date_of_start_mdt','$date_of_rft',
		'$smear_at_diagnosis','$smear_date','$within_24m_diagnosis','$age','$weight','$height','$bmi','$no_contra_indication_steroids','$able_to_attend_regularly',
		'$pregnant','$tuberculosis','$diabetes','$other_illness','$other_illness_desc','$inform_consent','$allocate_study_no','$history_of_enl');";
		echo $q;
		if ($conn->query($q) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $q . "<br>" . $conn->error;
		}

$conn->close();

	} else  {
		// do get
		echo "not a post request";
	}

	

 ?>

