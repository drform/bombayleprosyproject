<?php
   $id = $_GET['pid'];
   $Rid = $_GET['rid'];
  date_default_timezone_set('Asia/Kolkata');
  //$date = date('Y-m-d');
  // $date = date('Y-m-d H:i:s');

  include 'functions.php';
  // include('connection.php');
  // include('query.php');
  // include('uploadImage.php');
  include 'variablesForm.php';

  // function query($query, $message = '') {
  //   global $conn;
  //   $insert = mysqli_query($conn, $query);
  //   if($insert){
  //     echo"<br>Successful Insertion ".$message."";
  //     return 1;
  //   }
  //   else{
  //     echo"<br><br>Query error ".$message." : " . mysqli_error($conn)."<br>";
  //     return 0;
  //   }
  // }

  // echo $date;
  // `person_created` ,
  // `person_updated`

  // echo date_format($DOB,"Y/m/d");
// $DOB = '0000-01-02';

// echo "<br>code page";
  // $DOB = new DateTime($DOB);

  if($DOB != '0000-01-01' && $age == 0) {

    $bday = new Datetime($DOB);
    $dateTime = new Datetime($date);
    $age = date_diff($bday, $dateTime)->y; //age at time of form filling

  }
  // echo '<br>age is ' . $age;

  $qry1 = "UPDATE `person` SET
    `fname`= '$Name' ,
    `dob` = '$DOB',
    `sex`= '$Sex',
    `aadhar`= $aadhar,
    `occupation`= '$Occupation' ,
    `economical_status`= '$ecostat',
    `caste`= '$Caste',
    `age`=  $age,
    `allergy`= '$Allergies',
    `clinic`= '$Clinic',
    `referred`= '$Referred'

     WHERE `pid`=".$id."";

  if( query($qry1, 'Person') ) {

    
    echo "Pid is " . $id . "<br>";

    if ($Sex == 'female') {

      query("UPDATE `obstetric_history` SET
       `mmyy_pregnant`='$ObstetricH' WHERE `pid`= ".$id."",'obstetric_history');
      
    }

    $qry1_50 = "UPDATE `patient` SET
      `clinic`= '$Clinic',
      `patient_code`= $IDclinic,
      `complete_code` = '$Clinic" . "$IDclinic'
       WHERE `pid`=".$id."";

    // $qry1_51 = "INSERT INTO `contact` (
    //   `pid`,
    //   `mobile`
    // ) VALUES ($Pid, $Contact1);";

    // $qry1_52 = "INSERT INTO `contact` (
    //   `pid`,
    //   `mobile`
    // ) VALUES ($Pid, $Contact2);";

    $qry1_53 = "UPDATE `address` SET 
      `address`= '$Add1'
    WHERE `pid`=".$id." and `address_type`= 'Permanent'";

    $qry1_54 = "UPDATE `address` SET
      `address`= '$Add2'     
     WHERE `pid`=".$id." and `address_type`= 'Local'";
    query($qry1_50, 'patient');
    // query($qry1_51, 'contact');
    // query($qry1_52, 'contact');
    query($qry1_53, 'address');
    query($qry1_54, 'address');

    // if(!empty($contact[0])) {
     mysqli_query($conn,"DELETE FROM `contact` WHERE `pid`=".$id."");
      foreach ($Contact as $key => $value) {

        $Contact[$key] = empty($_POST['Contact'][$key]) ? 0000000000 : $_POST['Contact'][$key];
        
        query("INSERT INTO `contact` (
         `pid`,
        `mobile`
       ) VALUES ($id, $Contact[$key]);", 'contact');

        if( $Contact[$key] == 0000000000 ) break;
      }
    // }
    // if(!empty($name_fh[0])) {
      mysqli_query($conn,"DELETE FROM `family_members` WHERE `pid`=".$id."");
      foreach ($name_fh as $key => $value) {

        $name_fh[$key] = escape(empty($name_fh[$key]) ? 'Unknown' : $name_fh[$key]);
        $age_fh[$key] = empty($age_fh[$key]) ? 0 : $age_fh[$key];
        $Relation_fh[$key] = escape(empty($Relation_fh[$key]) ? 'Unknown' : $Relation_fh[$key]);
        $Disease_fh[$key] = escape(empty($Disease_fh[$key]) ? 'None' : $Disease_fh[$key]);
        $Notes_fh[$key]= escape(empty($Notes_fh[$key]) ? 'None' : $Notes_fh[$key]);
        
        query("INSERT INTO `family_members` (
          `pid` ,
          `fm_name` ,
          `fm_age`,
          `fm_relation`,
          `fm_disease`,
          `fm_diagnosis`
        ) VALUES($id, '$name_fh[$key]', $age_fh[$key], '$Relation_fh[$key]', '$Disease_fh[$key]', '$Notes_fh[$key]');", 'family_members');
      }
    // }

    $qry2_1 = "UPDATE `addiction` SET
      
      `addiction_notes`='$Cigarette_notes' ,
      `addiction_frequency`='$Cigarette'
     WHERE `pid`=".$id." and `addiction_type` ='Cigarette'";

    $qry2_2 = "UPDATE `addiction` SET
      
      `addiction_notes`= '$Alcohol_notes' ,
      `addiction_frequency`= '$Alcohol'
    WHERE `pid`=".$id." and `addiction_type`= 'Alcohol' ";

    $qry2_3 = "UPDATE `addiction` SET
      
      `addiction_notes`='$Tobacco_notes',
      `addiction_frequency`='$Tobacco'
    WHERE `pid`=".$id." and `addiction_type`='Tobacco'";

    $qry2_4 = "UPDATE `medical_history` SET
      `disease`='$PMH'
    WHERE `pid`=".$id."";
    query($qry2_1, 'addiction');
    query($qry2_2, 'addiction');
    query($qry2_3, 'addiction');
    query($qry2_4, 'medical_history');

    // if (!empty($Hospital_pmh[0])) {
      // print_r($Hospital_pmh);
      mysqli_query($conn,"DELETE FROM `past_drugs` WHERE `pid`=".$id."");
      foreach ($Hospital_pmh as $key => $value) {

        $Hospital_pmh[$key] = escape(empty($Hospital_pmh[$key]) ? 'Unknown' : $Hospital_pmh[$key]);
        $Drug_pmh[$key] = escape(empty($Drug_pmh[$key]) ? 'Unknown' : $Drug_pmh[$key]);
        $Dosage_pmh[$key] = escape(empty($Dosage_pmh[$key]) ? 'Unknown' : $Dosage_pmh[$key]);
        $Start_past_date_pmh[$key] = empty($Start_past_date_pmh[$key]) ? $date : $Start_past_date_pmh[$key];
        $End_past_date_pmh[$key] = empty($End_past_date_pmh[$key]) ? $Start_past_date_pmh[$key] : $End_past_date_pmh[$key];
       
        query("INSERT INTO `past_drugs` (
            `pid` ,
            `hospital` ,
            `drugs` ,
            `mmyy_start` ,
            `mmyy_end` ,
            `dosage`
          ) VALUES ($id,'$Hospital_pmh[$key]', '$Drug_pmh[$key]', '$Start_past_date_pmh[$key]', '$End_past_date_pmh[$key]', '$Dosage_pmh[$key]');", 'past_drugs');
      }
    // }

    // if(empty($klp_id)) {
    //   $qry3 = "INSERT INTO `person` (
    //       `fname` ,
    //     ) VALUES ('$Name')";
    //   query($qry3);

    //   $klp_id = $conn->insert_id;
    //   echo "<br>klp_id is ";
    // print_r($klp_id);}

    // if(!empty($Klp_name)) {
      mysqli_query($conn,"DELETE FROM `known_leprosy_contacts` WHERE `pid`=".$id."");
      foreach ($Klp_name as $key => $value) {

        $Klp_name[$key] = escape(empty($Klp_name[$key]) ? 'Anonymous' : $Klp_name[$key]);
        $Klp_relation[$key] = escape(empty($Klp_relation[$key]) ? 'Unknown' : $Klp_relation[$key]);
        $Klp_contact[$key] = escape(empty($Klp_contact[$key]) ? 0000000000 : $Klp_contact[$key]);
        $Klp_address[$key] = escape(empty($Klp_address[$key]) ? 'Unknown' : $Klp_address[$key]);
        $Klp_description[$key] =  escape(empty($Klp_description[$key]) ? 'None' : $Klp_description[$key]);
       
        query("INSERT INTO `known_leprosy_contacts` (
          `pid` ,
          `kname` ,
          `relation` ,
          `contact`,
          `address`,
          `description`
        ) VALUES ($id, '$Klp_name[$key]', '$Klp_relation[$key]', '$Klp_contact[$key]', '$Klp_address[$key]', '$Klp_description[$key]');", 'known_leprosy_contacts');
      }
    // }

    // if(!empty($klp_id)) {
    //   foreach ($klp_id as $key => $value) {
    //     query("INSERT INTO `leprosy_relations` (
    //       `pid` ,
    //       `klpid` ,
    //       `relation`
    //     ) VALUES ($Pid,'$klp_id', '$relation_klp');", 'leprosy_relations');
    //   }
    // }

    $qry5 = "UPDATE `record` SET
    `date_attend`='$date',
      `examiner`='$Examiner'

    WHERE `pid`=".$id." and `rid`=".$Rid."";

    // echo "Examiner".$Examiner;
   query($qry5,"record");
      echo "Rid is " . $Rid . "<br>";

      $qry6 = "UPDATE `treatment_record` SET
        `rid`= $Rid,
        `opthalmic_involvement`='$Opthalmic_involvement',
        `eyes`= '$Eyes',
        `skin_lesions`='$Assessment',
        `result`= '$Result',
        `symptoms`='$fcfs',
        `other_mdt_courses`= '$omc',
        `t_notes`='$furtherobservations',
        `current_treatment`='$Current_treatment'
      WHERE `pid`=".$id."";
echo $qry6;
      $qry6_1 = "UPDATE `leprosy_diagnosed` SET
      `pb`=$tld_pb,
      `mb`=$tld_mb,
      `tt`=$tld_tt,
      `bt`=$tld_bt,
      `bb`= $tld_bb,
      `bl`=$tld_bl,
      `ll`=$tld_ll,
      `pnl`= $tld_pnl
      WHERE `rid`=$Rid";
      query($qry6, 'treatment_record');
      query($qry6_1, 'leprosy_diagnosed');

       mysqli_query($conn,"DELETE FROM `disability` WHERE `rid`= $Rid");
      if(!empty($Grade0)) { 
        query("INSERT INTO `disability` (`rid`, `grade`, `disability_area`)
        VALUES ($Rid, 0, '$Grade0');", 'grade0');
      }

      if(!empty($Grade1)) { 
        foreach($Grade1 as $key => $value) {
          query("INSERT INTO `disability` (`rid`, `grade`, `disability_area`)
          VALUES ($Rid, 1, '$Grade1[$key]');", 'grade1');
        }
      }

      if(!empty($Grade2)) {
        foreach($Grade2 as $key => $value) {
          query("INSERT INTO `disability` (`rid`, `grade`, `disability_area`)
          VALUES ($Rid, 2, '$Grade2[$key]');", 'grade2');
        }
      }

      mysqli_query($conn,"DELETE FROM `peripheral_nerves` WHERE `rid`=$Rid");

      //maintainable code for peripheral nerves
	  $allVars = get_defined_vars();
	  
	  foreach ($allVars as $varName => $varValue) {
		if (preg_match("/Thicken_Left/", $varName)) {


			$nerve = str_replace("Thicken_Left", "", $varName);

			$nerveThickLeft = $varValue;
			$nerveThickRight = $allVars[$nerve . "Thicken_Right"];
			$nerveTenderLeft = $allVars[$nerve . "Tender_Left"];
			$nerveTenderRight = $allVars[$nerve . "Tender_Right"];

			$nerve = str_replace("_", " ", $nerve);
			$nerve = trim($nerve);

			$qry40 = "INSERT INTO `peripheral_nerves` (
			`rid` ,
			`nerves` ,
			`thickness_left` ,
			`thickness_right` ,
			`tenderness_left` ,
			`tenderness_right`
			) VALUES ($Rid, '$nerve', '$nerveThickLeft', '$nerveThickRight', '$nerveTenderLeft', '$nerveTenderRight');";

			query($qry40, 'peripheral_nerves');
		}
	  }
	  //peripheral end
      $qry4_1 = "UPDATE `sensory_test` SET
        `pinprick`='$Pain',
        `touch`='$Touch',
        `temperature`='$Temperature'
      WHERE`rid`=$Rid";


      $qry4_2 = "UPDATE `reactions` SET
        `type_reaction`= '$Reaction',
        `neuritis`= '$Neuritis',
        `description`='$Reaction_description'
      WHERE `rid`=$Rid";

      query($qry4_1,'sensory_test');
      query($qry4_2,'reactions');

      mysqli_query($conn,"DELETE FROM `drugs_prescribed` WHERE `rid`=$Rid ");
      foreach ($Drug_used_first_treatment as $key => $value) {
        $drug = NULL; $Did = NULL;

        $Drug_used_first_treatment[$key] = escape(empty($Drug_used_first_treatment[$key]) ? 'Unknown' : $Drug_used_first_treatment[$key]);
        $Drug_dosage_first_treatment[$key] = escape(empty($Drug_dosage_first_treatment[$key]) ? 'Unknown' : $Drug_dosage_first_treatment[$key]);
        $Start_first_treatment[$key] = empty($Start_first_treatment[$key]) ? $date : $Start_first_treatment[$key];
        $End_first_treatment[$key] = empty($End_first_treatment[$key]) ? $Start_first_treatment[$key] : $End_first_treatment[$key];

        $drug = mysqli_query($conn, "SELECT * FROM `drugs` WHERE `dname` = '".$Drug_used_first_treatment[$key]."'");
        if(mysqli_num_rows($drug) > 0) {
          $exist = mysqli_fetch_assoc($drug); 
          $Did = $exist['did'];
        }
        else {
          $qry7 = "INSERT INTO `drugs` (
          `dname`
          )VALUES('".$Drug_used_first_treatment[$key]."');";
          query($qry7, 'new drug');
          $Did = $conn->insert_id;
          echo "Did is " . $Did . "<br>";
        }

          $qry8 = "INSERT INTO `drugs_prescribed` (
            `rid` ,
            `did` ,
            `type` ,
            `start_date` ,
            `end_date` ,
            `dosage`
          ) VALUES ($Rid, $Did, '', '$Start_first_treatment[$key]', '$End_first_treatment[$key]', '$Drug_dosage_first_treatment[$key]');";
          query($qry8, 'drugs_prescribed');
      }  

      // if(!empty($Site)) {
      //   foreach ($Site as $key => $value) {
      //     query("INSERT INTO `smear_test` (
      //       `rid` ,
      //       `site`,
      //       `mi` ,
      //       `bi` ,
      //       `pid`,
      //     ) VALUES($Rid, '$Site[$key]', $mi[$key], $bi[$key], $Pid);");
      //   }
      // }


        
        if($Images!=NULL){
        $qry100 = mysqli_query($conn,"select * from image where pid=$id");
        while($row = mysqli_fetch_assoc($qry100)){
            $imagename = $row['image_url'];
        }
        echo $qry1;
        $delFile= "../images/patient/".$imagename;
         echo $delFile;
        
        if (!@unlink($delFile)) {
              echo ("Error deleting $delFile");
            } else {
              echo ("Deleted $delFile");
            
            }
        mysqli_query($conn,"DELETE from image where pid=$id");
          foreach ($Images["error"] as $count => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $Images["tmp_name"][$count];
                    if (!$tmp_name) continue;
        
                    uploadImages($id, $Images, $count, $imageTags);
                    
                }
                elseif ($error == 4) {
                  echo "<br>No images were uploaded.<br>";
                }
                else {
                    echo "Error  : " . $error;
                }
            }    
        }
    // mysqli_query($conn,"DELETE from image where pid=$id");    
    // $delFile = './images/patient/'.$id;
    // if (file_exists($delFile)){
    //     echo "yrd";
    // }else{
    //     echo "no";
    // }
    // //echo $delFile;
    // chown($delFile, 666);
    // if (!unlink($delFile)) {
    //       echo ("Error deleting $delFile");
    //     } else {
    //       echo ("Deleted $delFile");
    //     }
    // $image_name=preg_replace('/\s+/', '',$_FILES['images']['name']);
    // $image_temp=preg_replace('/\s+/', '',$_FILES['images']['tmp_name']);
    // move_uploaded_file($image_temp,"../images/patient/".$Pid);
    // $image_url = "https://bombayleprosycare.org/assets/images/patient/".$image_name;
    // query("INSERT into image values($id,'$id',$date)",'image');

    // $qry10  = "INSERT INTO `follow_up_record` (
    //   `pid` ,
    //   `clinical_notes` ,
    //   `prescription` ,
    //   `complaints` ,
    //   `due_date`,
    //   `appointment_for`,
    //   `data_for_next_appointment`
    // ) VALUES($Pid,'$follow_up_clinical_notes','$follow_up_prescription','$follow_up_complaints','$follow_up_due_date','$appointment_for','$date_for_next_appointment');";
    // query($qry10 );



    //$result = mysqli_query($conn,"show tables");
    //$insert = mysqli_query($conn, $qry1);

    // if($result){
    //     // header("location:http//:localhost/BLP/index.html");
    //     while ($row = mysqli_fetch_assoc($result)) {
    //      echo "<br/>".$row['Tables_in_blp'];
    //     }
    // }
    // function query($query) {
    //   $insert = mysqli_query($conn, $query);
    //   if($insert){
    //     echo"Successful Insertion";
    //   }
    //   else{
    //     echo"Query error";
    //     echo("Error description: " . mysqli_error($conn));
    //   }
    // }
      // mysqli_close($conn);
      // echo "<br/>*".$Name."*".$DOB." ".$aadhar." ".$Sex." ".$date;


     header("location:../../modules/display1.php?pid=".$id);
  } // end of if Pid
  else {
    echo "<br>Person could not be made.";
  }
  // header("location:../../modules/form.php");
?>