<?php
include('navbar.php');
//if(!isset($_SESSION['id'])){
  //  echo"<script>
    //alert('Please Login in');
    //document.location.href = 'login.php';
    //</script>
    //";
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/faviconsBLP/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/faviconsBLP/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/faviconsBLP/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/faviconsBLP/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/faviconsBLP/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/faviconsBLP/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/faviconsBLP/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/faviconsBLP/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/faviconsBLP/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/faviconsBLP/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/faviconsBLP/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/faviconsBLP/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/faviconsBLP/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/faviconsBLP/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patient Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css --><!--
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://localhost/BLP/assets/blp/jquery-1.11.1.min.js.download"></script>
<!-- stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="http://localhost/BLP/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

  <!-- header -->   
  <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
    <style type="text/css">
        
        
    </style>

</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Bombay Leprosy Project </h2>
            <form method="POST" id="signup-form" class="signup-form" action="../assets/php/form.php" enctype="multipart/form-data">
                <h3>
                    <span class="title_text">Baseline assessment</span>
                </h3>
                
                <fieldset>
                	<center style= "margin-top: 10px"><b><u>Extra clofa study</u></b></center>
                	<center style="margin-top: 5px"><b><u>Clinical record sheets-draft</u></b></center>
                  <div class="form-group" style="margin-top: 20px">
                            <label for="name" class="form-label">Patient Name</label>
                            <input type="text" style="width: 259px" name="name" id="name" placeholder="Should come Automatically" />
                            <label for="studyNum" class="form-label">Study number</label>
                            <input type="number" style="width: 259px" name="studyNum" id="studyNum" placeholder="Should come Automatically" />
                        </div>

                    <div class="fieldset-content">
        
                         <div class="form-row" style="margin-top: 9px;">
                            <div class="form-group" style="padding-left: 34px ;margin-top: 9px;">
                                <label for="formDate" class="form-label">Date</label>&ensp;&ensp;&ensp;
                                <input style="width: 259px" type="date" name="formDate" id="formDate" value=<?php echo date("Y-m-d"); ?> />&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                             	<label for="staffName" class="form-label">Staff name</label>&ensp;&ensp;&ensp;
                            <input type="text" style="width: 259px" name="staffName" id="staffName" placeholder="Enter staff name" />
                            </div>
                </div>
                <div class="form-radio">
                                <label for="CRS" class="form-label">Current reaction status</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="CRS" value="noENL" id="noENL" />
                                    <label for="noENL" style="width:95px;">no ENL</label>
    
                                    <input type="radio" name="CRS" value="RR" id="RR" />
                                    <label for="RR" style="width:95px;">RR</label>

                                    <input type="radio" name="CRS" value="acute" id="acute" />
                                    <label for="acute" style="width:105px;">Acute ENL</label>

                                    <input type="radio" name="CRS" value="recurrent" id="recurrent" />
                                    <label for="recurrent" style="width:125px;">Recurrent ENL</label>

                                    <input type="radio" name="CRS" value="chronic" id="chronic" />
                                    <label for="chronic" style="width:105px;">Chronic ENL</label>
                                </div>
                            </div>

                       
                            <div class="form-group" style="margin-top: 9px;">
                                <label for="firstENL" class="form-label">When first had ENL?</label>
                                <input style="width:259px" type="date" name="firstENL" id="firstENL" value=<?php echo date("Y-m-d"); ?> />
                            </div>
               			
               			
                            <div class="form-group" style="margin-top: 9px;">
                                <label for="firstPDate" class="form-label">When first had prednisolone for ENL??</label>
                                <input style="width: 259px" type="date" name="firstPDate" id="firstPDate" value=<?php echo date("Y-m-d"); ?> />
                            </div>
              

				<div style="marker-start: 34px">
					<b style="color: blue"><u>(if applicable)This episode of ENL:</u></b><br><br>
				</div>
				<div class="form-group" style="margin-top: 9px;">
					<label for="sym" class="form-label">When first symptoms(number of days ago)</label>
					<input type="range" style="border:1px solid;background-color: lightblue;" name="sym" id="sym" min="1" max="180" value="15" onchange="show_value2(this.value)"/>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span>
								
								<style type="text/css">
                                #sym{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #sym::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #sym::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #sym:active::-webkit-slider-thumb{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                }
                            </style>
								
								<script type="text/javascript">
								function show_value2(x)
								{
									document.getElementById("slider_value2").innerHTML=x;
								} 
								</script>
				</div>
			
                <div class="form-radio">
                    <label for="CART" class="form-label">Current anti-reaction therapy</label>
                        <div class="form-radio-item">
                                <input type="checkbox" name="p" value="1" id="p"/>
                                <label style="width:115px;"for="p">Prednisolone</label>
                                <input type="checkbox" name="d" value="1" id="d"/>
                                <label style="width:115px;"for="d">Clofazmine</label>
                                <input type="checkbox" name="t" value="1" id="t"/>
                                <label style="width:115px;"for="t">Thalidanide</label>
                        </div>
                </div>
                     
                <div class="form-group" style="margin-top: 9px;">
                        <label for="DateP" class="form-label">Date started prednisolone(for this episode of ENL)</label>
                        <input style="width: 259px" type="date" name="DateP" id="DateP" value=<?php echo date("Y-m-d"); ?> />
                </div>
                  
                <div class="form-group" style="margin-top: 20px">
           	            <label for="DailyDoseP" class="form-label">Current daily dose of prednislone</label>
                        <input type="number" style="width: 259px" name="DailyDoseP" id="DailyDoseP" min="5" max="40" placeholder="Enter between 5-40"/>mg/day
                </div>
                <div class="form-radio">
                        <label for="DailyDoseC" class="form-label">Current daily dose of clofazmine</label>
                        <div class="form-radio-item">
                            <input type="checkbox" name="past" value="1" id="past"/>
                            <label style="width:115px;"for="past">Past of MDT</label>
                            <input type="checkbox" name="anti" value="1" id="anti"/>
                            <label style="width:190px;"for="anti">Anti-reaction therapy</label>
                                  
                        </div>
                </div>
                <div class="form-group" style="margin-top: 20px">
                    <label for="DailyDoseT" class="form-label">Current daily dose of Thalidanide</label>
                    <input type="number" style="width: 259px" name="DailyDoseT" id="DailyDoseT" min="5" max="5" placeholder="Enter between 5-40" />mg/day
                </div>
                   


<!-- physical assessment -->
				<div style="marker-start: 34px">
					<b style="color: blue"><u>Physical assessment:</u></b><br><br>
				</div>
					
                <div class="form-group">
					<div class="form-radio" >
                        <label for="nfa" class="form-label">NFA</label>
                            <div class="form-radio-item">
                                <input type="radio" name="nfa" value="yes" id="yes" />
                                <label for="yes" style="width:80px;">Yes</label>
    
                                <input type="radio" name="nfa" value="no" id="no" />
                                <label for="no" style="width:80px;">No</label>
                            </div>
                    </div>
                </div>
				<div class="form-radio" >
                    <label for="nfi" class="form-label">New NFI</label>
                        <div class="form-radio-item">
                            <input type="radio" name="nfi" value="yes1" id="yes1" />
                            <label for="yes1" style="width:80px;">Yes</label>
    
                            <input type="radio" name="nfi" value="no1" id="no1" />
                            <label for="no1" style="width:80px;">No</label>
							
                        </div>

						<div style="padding-left:30px;"><textarea rows="3" cols="50" name="Add1" id="Add1" placeholder="within past 6m,not yet treated with steroids" ></textarea></div>
                </div>
							
				<div class="form-group">
                    <label for="eess" >EESS</label>
						<input type="range" style="border:1px solid;background-color: lightblue;" name="eess" id="eess" min="0" max="30" value="15" onchange="show_value2(this.value)"/>
							<span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
							<span id="slider_value2" style="color:black;font-weight:bold;"></span>
							<style type="text/css">
                                #eess{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #eess::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #eess::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #eess:active::-webkit-slider-thumb{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                }
                            </style>
								
								<script type="text/javascript">
								function show_value2(x)
								{
									document.getElementById("slider_value2").innerHTML=x;
								} 
								</script>
                </div>			
							  
                          
				<div style="marker-start: 34px">
					<b style="color: blue"><u>Physical Experience assessment:</u></b><br><br>
				</div>
					
                    <div class="form-group">
                        <label for="qol" class="form-label">QOL(SF36) score</label>
                        <input style="width:150px;" type="text" name="qol1" id="qol1" placeholder="Enter valid QOL score"/>
                    </div>
						
                    <div class="form-group">
                        <label for="vas" class="form-label">VAS for pigmentation</label>
                        <input  style="width:150px;"type="text" name="vas1" id="vas1" placeholder="Enter valid VAS for pigmentation"/>
                    </div>

					


<b style="color: blue"><u>Check list for adverse effects of prednisolone..</u></b>
                        <div class="form-group" style="margin-top: 20px">
                            <label for="Abdomen" class="form-label">Abdomen pain</label>
                            <div class="form-radio-item">
                                    <input type="radio" name="Abdomen" value="yes2" id="yes2"/>
                                    <label style="width:85px;"for="yes2">Yes</label>
                                    <input type="radio" name="Abdomen" value="No2" id="no2"/>
                                    <label style="width:85px;"for="no2">No</label>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                            <label for="Nausea" class="form-label">Nausea</label>
                            <div class="form-radio-item">
                                    <input type="radio" name="Nausea" value="yes3" id="yes3"/>
                                    <label style="width:85px;"for="yes3">Yes</label>
                                    <input type="radio" name="Nausea" value="No3" id="no3"/>
                                    <label style="width:85px;"for="no3">No</label>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                            <label for="Acne" class="form-label">Acne</label>
                            <div class="form-radio-item">
                                    <input type="radio" name="Acne" value="yes4" id="yes4"/>
                                    <label style="width:85px;"for="yes4">Yes</label>
                                    <input type="radio" name="Acne" value="No4" id="no4"/>
                                    <label style="width:85px;"for="no4">No</label>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                            <label for="Moon" class="form-label">Moon face</label>
                            <div class="form-radio-item">
                                    <input type="radio" name="Moon" value="yes5" id="yes5"/>
                                    <label style="width:85px;"for="yes5">Yes</label>
                                    <input type="radio" name="Moon" value="No5" id="no5"/>
                                    <label style="width:85px;"for="no5">No</label>
                            </div>
                        </div>
						<div class="form-group" style="margin-top: 20px">
                            <label for="Other1" class="form-label">Other infection</label>
                            <input type="text" style="width: 259px" name="Other1" id="Other1" placeholder="" />
                        </div>

                        <b style="color: blue"><u>Decision:</u></b><br>
                        <div class="form-group" style="margin-top: 20px">
                            <b>1. Observation or Randomize:</b>&ensp;&ensp;
                            <input type="text" style="width: 259px" name="obs" id="obs" placeholder="" />
                        </div>
						<b>2.Treatment:</b>
                        <div class="form-group" style="padding-left: 34px">
                          <label for="dp" class="form-label">Prednisolone</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Drug Dosage</th>
                                            <th>Drug Duration</th>   
                                           <!---  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>-->
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug_dosage[]" class="valid"></td>
                                            <td><input type="text" name="drug_duartion[]" class="valid"></td>
                                           <!--- <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>-->
                                        </tr>
                                        

                                    </tbody>

                            </table>
                        
                        </div>
						
                      	<div class="form-group" style="padding-left: 34px">
                          <label for="dp" class="form-label">Clofazimine/Vitamin supplements</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Drug Dosage</th>
                                            <th>Drug Duration</th>   
                                           <!---  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>-->
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug_dosage[]" class="valid"></td>
                                            <td><input type="text" name="drug_duartion[]" class="valid"></td>
                                           <!--- <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>-->
                                        </tr>
                                        

                                    </tbody>

                            </table>
                        
                        </div>
						
                  		<div class="form-group" style="padding-left:34px;">
                                <label  class="form-label">Others</label>
                                 <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
                                    <tbody>
                                          <tr class="tr-header">
                                            <th>Drug Name</th>
                                            <th>Drug Dosage</th>
                                            <th>Drug Duration</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>   
                                          </tr> 
                                          <tr style="padding: 2px;" >
                                            <td><input type="text" name="Site[]" class="valid"></td>
                                            <td><input type="text" name="Mi[]" class="valid"></td>
                                            <td><input type="text" name="Bi[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>                                            
                                          </tr>                                                   
                                    </tbody>
                                   
                                 </table>                                                     
                            </div>

                  <div class="form-row" style="padding-left: 34px ;margin-top: 19px;">
                             <div class="form-group" style="margin-top: 9px; marker-start: 10px">
                                <label  class="form-label">Next Assessment Date</label>&ensp;&ensp;
                                <input style="width: 259px"type="date" name="nextDate" id="nextDate" value=<?php echo date("Y-m-d"); ?> />
                            </div>
                        </div>
                <div class="fieldset-footer">
                        <span>Form 1 of 4</span>
                    </div>
                    </div>
                
                </fieldset>
<!-- end of form 2 -->
                <h3>
                    <span class="title_text">Leprosy History</span>
                </h3>
                <fieldset>

                    <div class="fieldset-content">
                         <div class="form-textarea">
                            <label for="PMH" class="form-label">Past Medical History</label>
                            <textarea name="PMH" id="PMH" placeholder="Past Medical History"></textarea>
                        </div>
                        
                    <div class="fieldset-content">
                         <div class="form-textarea">
                             <label for="PLH" class="form-label">Past Leprosy History</label>
                            <div class="form-group">

                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb1" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th colspan="3">Hospital</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore1" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td colspan="3"><input type="text" name="hospital_pmh[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove1'><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Drug</th>
                                            <th>Dosage</th> 
                                        </tr>
                                        
                                        <tr>
                                            <td><input type="text" name="drug_pmh[]" class="valid"></td>
                                            <td><input type="text" name="dosage_pmh[]" class="valid"></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input style="margin-left: 16px;" type="date" name="Start_past_date_pmh[]" class="valid"></td> 
                                            <td><input style="margin-left: 16px;" type="date" name="End_past_date_pmh[]" class="valid"></td> 
                                        </tr>

                                    </tbody>

                            </table>
                        
                        </div>

                        </div>

                        <!--  <div class="form-textarea">
                            <label for="ObstetricH" class="form-label">Obstetric History</label>
                            <td><input type="text" name="ObstetricH" placeholder="Obstetric History" class="valid"></td> 
                        </div> -->

                        <div class="form-textarea">
                            <label for="KLC" class="form-label" style="align-self: flex-start;padding-top: 40px;">Known Leprosy Contacts</label>
                              
                               <div class="form-group">

                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Name</th>
                                            <th>Contact</th>                                               
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="klp_name[]" class="valid"></td>
                                            <td><input type="number" name="klp_contact[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>
                                        </tr> 
                                        
                                        <tr>
                                            <th colspan="3">Address</th>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3"><input type="text" name="klp_address[]" class="valid"></td>
                                        </tr>

                                        <tr>
                                            <th colspan="3">Relation</th>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3"><input type="text" name="klp_relation[]" class="valid"></td>
                                        </tr>
                                        
                                        <tr>
                                            <th colspan="3">Description</th>
                                        </tr>
                                        
                                        <tr>
                                            
                                            <td colspan="3"><input type="text" name="klp_description[]" class="valid"></td>
                                        </tr>
                                    </tbody>
                            </table>
                            </div>
     
                       </div> 


                        <div class="form-group">
                            <label for="fcfs" class="form-label">First Signs and Symptoms(with date of onset)</label>
                            <input type="text" name="fcfs" id="fcfs" placeholder="All the known Symtoms"/>
                        </div>
                        

                        <div class="form-radio">
                                <label for="tld" class="form-label">Type of Leprosy diagnosed</label>
                                <div class="form-radio-item ">
                                    <input type="checkbox" name="tld_pb" value="1" id="PB" />
                                    <label  for="PB">PB</label>
                                    <input type="checkbox" name="tld_mb" value="1" id="MB" style=""  />
                                    <label for="MB">MB</label>
                                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                </div>

                                <div class="form-radio-item">
                                    <input type="checkbox" name="tld_tt" value="1" id="TT"/>
                                    <label for="TT">TT</label>
                                    <input type="checkbox" name="tld_bt" value="1" id="BT"/>
                                    <label for="BT">BT</label>
                                    <input type="checkbox" name="tld_bb" value="1" id="BB"/>
                                    <label for="BB">BB</label>
                                    <input type="checkbox" name="tld_bl" value="1" id="BL"/>
                                    <label for="BL">BL</label>
                                    <input type="checkbox" name="tld_ll" value="1" id="LL"/>
                                    <label for="LL">LL</label>
                                    <input type="checkbox" name="tld_pnl" value="1" id="PNL"/>
                                    <label for="PNL">PNL</label>
                                </div>
                            </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Form 2 of 4</span>
                    </div>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Leprosy Treatment</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group" style="font-size:20px;">
                            <label  class="form-label" ><center>First Treatment</center></label>
                            </div>


                       
                            <div class="form-group">
                             <label for="dp" class="form-label">Drug Prescription</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Drug Used</th>
                                            <th>Drug Dosage</th>   
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug_used[]" class="valid"></td>
                                            <td><input type="text" name="drug_dosage[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input style="margin-left: 16px;" type="date" name="Start_first_treatment[]" class="valid"></td> 
                                            <td><input style="margin-left: 16px;" type="date" name="End_first_treatment[]" class="valid"></td> 
                                        </tr>

                                    </tbody>

                            </table>
                        
                        </div>

                       
                        
                        <div class="clear"></div>
                         <div class="form-group">
                            <label for="omc" class="form-label">Other MDT courses</label>
                            <input type="text" name="omc" id="omc" placeholder="Other MDT courses" />
                        </div>

                         <div class="form-textarea">
                            <label for="Result" class="form-label">Outcome after initial treatment</label>
                            <textarea name="Result" id="Result" placeholder="" rows="2" ></textarea>
                        </div>

                        
                        <div class="form-radio">
                                <label for="reaction" class="form-label">Reaction Type</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="Reaction" value="Type1" id="Type1" />
                                    <label for="Type1">Type 1</label>
    
                                    <input type="radio" name="Reaction" value="Type2" id="Type2" />
                                    <label for="Type2">Type 2</label>

                                    <input type="checkbox" name="Neuritis" value="Neuritis" id="Neuritis" />
                                    <label for="Neuritis">Neuritis</label>
                                    
                                    <input type="radio" name="Reaction" value="None" id="None" />
                                    <label for="None">None</label>
                                </div>
                            </div>
                    <!--     <div class="form-group">
                                    <label for="reaction" class="form-label">Description</label>
                                    <textarea name="Description" rows="8" placeholder="Description"></textarea> 
                      </div> -->


                        <div class="form-textarea">
                            <label  class="form-label">Reaction Description</label>
                            <textarea name="Reaction_description" rows="4" placeholder="Description"></textarea>
                        </div>


                         <div class="form-textarea">
                            <label for="Current" class="form-label">Current treatment</label>
                            <textarea name="Current_treatment" rows="4" id="Current" placeholder="Current treatment"></textarea>
                        </div>


                         <div class="form-group">
                                <label for="Disability" class="form-label">Disability</label> 
                        <div style="display: inline;">
                           <table class="table table-bordered">
                              <tr>
                                <th>Grade 0 </th>
                                <td><input type="checkbox" name="Grade0" value="Grade0"></td>
                              </tr>
                         </table>
                        
                            
                               <table class=" table table-bordered">

                                  <tr>
                                      <th rowspan="2">Grade 1</th>
                                      <th >Anesthesia of hand</th>
                                      <td><input  type="checkbox" name="Grade1[]" value="Hand"></td>
                                  </tr> 
                                  
                                   <tr>
                                         <th >Anesthesia of leg</th>
                                         <td><input type="checkbox" name="Grade1[]" value="Leg" style="width: 20px"></td>
                                      </tr> 
                                  
                              </table>
                           <!--div style="display:flex"-->
                           <table class="table table-bordered">
                               <th colspan="4">Grade 2</th>
                                   
                              <tr>
                                  <th colspan="2">Name</th>
                        
                                  <th>Left</th>
                                  <th>Right</th>
                              </tr>  
                              <tr>
                                <th rowspan=2>Face</th>
                                <td>Lagothalmos</td>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Right"></td>
                                <tr>
                                   <td>Facial Paralysis</td>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Right"></td>
                               </tr>
                              </tr>
                              <tr>
                                <th rowspan=3>Hands</th>
                                <td>Claw</td>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Right"></td>
                                <tr>
                                   <td>Wrist Drop</td>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Right"></td>
                               </tr>
                               <tr>
                                   <td>Fixed Claw</td>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Right"></td>
                               </tr>
                              </tr>
                              <tr>
                                <th rowspan=2>Feet</th>
                                <td>Foot drop</td>
                                <td><input type="checkbox" name="Grade2[]" value="Foot Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Foot Right"></td>
                                
                               </tr>
                          </table>
                      </div>

</div>
                       <div class="form-group">
                            <label for="Opthalmic_involvement" class="form-label">Opthalmic involvement</label>
                            <input type="text" name="Opthalmic_involvement" id="Opthalmic_involvement" />
                        </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Form 3 of 4</span>
                    </div>
                </fieldset>



                 <h3>
                    <span class="title_text">Clinical Examination</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">

                           <div class="form-group">
                            <label for="Assessment" class="form-label">Assessment Of Skin Lesions</label>
                            <input type="text" name="Assessment" id="Assessment" />
                        </div>

                        <div class="form-group">
                            <label for="Sensory" class="form-label">Sensory Testing(On Diagram)</label>
                            <select name="Touch" class="custom-select;valid" style="width:250px">
                                <option value="" style="height: 45px" disabled selected>Touch</option>
                                <optgroup>
                                    
                                    <option value="Present">Touch : Present</option>
                                    <option value="Absent">Touch : Absent</option>
                                    <option value="None">Touch : None</option>
                                </optgroup>
                            </select>
                            
                            <select name="Pain" class="custom-select;valid" style="width:250px">
                                <option value="" style="height: 45px" disabled selected >Pain</option>
                                <optgroup>
                                    
                                    <option value="Partial">Partial</option>
                                    <option value="Total">Total</option>
                                    <option value="None">None</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Sensory" class="form-label">Temperature</label>
                             <table style="padding-left: 34px ;" id="tb9" class="form-label">
                                    <tbody class="form-radio">
                                        
                                        
                                        <tr style="padding: 2px;" class="form-radio-item">
                                            <th><label style="height: 45px;" for="Hot">Hot</label></th>
                                            
                                            <td>
                                                <input type="checkbox" name="Temp[]" value="Hot Present" id="Hot Present" />
                                                <label style="height: 45px;" for="Hot Present">Present</label>
                                                <input type="checkbox" name="Temp[]" value="Hot Absent" id="Hot Absent" />
                                                <label style="height: 45px;" for="Hot Absent">Absent</label>
                                            </td>
                                        </tr>   
                                        <tr style="padding: 2px;" class="form-radio-item">
                                           <th><label style="height: 45px;" for="Cold">Cold</label></th>
                                            <td>
                                                <input type="checkbox" name="Temp[]" value="Cold Present" id="Cold Present" />
                                                <label style="height: 45px;" for="Cold Present">Present</label>
                                                <input type="checkbox" name="Temp[]" value="Cold Absent" id="Cold Absent" />
                                                <label style="height: 45px;" for="Cold Absent">Absent</label>
                                            </td>
                                        </tr>
                                        
                                       

                                    </tbody>

                            </table>
                        
                        </div>
                        


                        <div class="form-group">
                            <label for="Peripheral" class="form-label">Peripheral Nerves(Thickened And/Or Tender)</label>
                        <table class="table table-bordered">
                            <thead style="text-align:center">
                               <tr>
                                    <th rowspan="2" style="vertical-align:middle">Name of Nerve</th>
                                    <th colspan="2">Thickened</th>
                                    <th colspan="2">Tender</th>
                               </tr>
                                <tr>
                                    <th colspan="1">Left</th>
                                    <th colspan="1">Right</th>
                                    <th colspan="1">Left</th>
                                    <th colspan="1">Right</th>
                                </tr>
                                
                           </thead>
                           <tbody style="text-align:center">
                              <tr>
                                <td>Supra-orbital</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Supra_orbital_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Supra_orbital_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Supra_orbital_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Supra_orbital_Tender_Right" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Great Auricular</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Great_Auricular_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Great_Auricular_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Great_Auricular_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Great_Auricular_Tender_Right" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Ulnar</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Ulnar_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Ulnar_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Ulnar_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Ulnar_Tender_Right" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Median Cutaneous</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Median_Cutaneous_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Median_Cutaneous_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Median_Cutaneous_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Median_Cutaneous_Tender_Right" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Radial Cutaneous</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Radial_Cutaneous_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Radial_Cutaneous_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Radial_Cutaneous_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Radial_Cutaneous_Tender_Right" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Lateral Popliteal</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Lateral_Popliteal_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Lateral_Popliteal_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Lateral_Popliteal_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Lateral_Popliteal_Tender_Right" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Sural Nerve</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Sural_Nerve_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Sural_Nerve_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Sural_Nerve_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Sural_Nerve_Tender_Right" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Posterior Tibial</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Posterior_Tibial_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Posterior_Tibial_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Posterior_Tibial_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Posterior_Tibial_Tender_Right" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Superficial Peroneal</td>
                                <td colspan="1" align="center"><input type="checkbox" name="Superficial_Peroneal_Thicken_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Superficial_Peroneal_Thicken_Right" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Superficial_Peroneal_Tender_Left" value="Yes"></td>
                                <td colspan="1" align="center"><input type="checkbox" name="Superficial_Peroneal_Tender_Right" value="Yes"></td>
                              </tr>
                          </tbody> 
                     </table>
                        </div>


                        <div class="form-group">
                            <label for="Eyes" class="form-label">Eyes</label>
                            <input type="text" name="Eyes" id="Eyes" />
                        </div>
                        
                        <div class="form-textarea">
                            <label for="Complaint" class="form-label">Present Complaint</label>
                            <textarea name="Complaint" id="Complaint" placeholder=""  ></textarea>
                        </div>

                         <div class="form-textarea">
                            <label for="furtherobservations" class="form-label">Further Observations</label>
                            <textarea name="furtherobservations" id="furtherobservations" placeholder="" rows="2" ></textarea>
                        </div>


                        <div class="form-label">
                            Upload Profile Photo:
                            <input type="file" name="images[]" accept="image/*">
                            <!--multiple="multiple" -->
                            <br>
                        </div>                      
                    </div>


                    <div class="fieldset-footer">
                        <span>Form 4 of 4</span>
                    </div>
                
                </fieldset>

            </form>
        </div>
        <div class="copy w3ls">
               <p>&copy; 2019  Bombay Leprosy Project  </p>
            </div>
     </div>


    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
<script type="text/javascript">
    
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(0)").clone(true).appendTo("#tb");
              var data1 = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              var data2 = $("#tb tr:eq(2)").clone(true).appendTo("#tb");
              var data3 = $("#tb tr:eq(3)").clone(true).appendTo("#tb");
              var data4 = $("#tb tr:eq(4)").clone(true).appendTo("#tb");
              var data5 = $("#tb tr:eq(5)").clone(true).appendTo("#tb");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1-1);
             document.getElementById("tb").deleteRow(trIndex1-2);
             document.getElementById("tb").deleteRow(trIndex1-3);
             
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>


<script type="text/javascript">
    
$(function(){
    $('#addMore1').on('click', function() {
              var data = $("#tb1 tr:eq(0)").clone(true).appendTo("#tb1");
              var data1 = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
              var data2 = $("#tb1 tr:eq(2)").clone(true).appendTo("#tb1");
              var data3 = $("#tb1 tr:eq(3)").clone(true).appendTo("#tb1");
              var data4 = $("#tb1 tr:eq(4)").clone(true).appendTo("#tb1");
              var data5 = $("#tb1 tr:eq(5)").clone(true).appendTo("#tb1");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove1', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1-1);
             document.getElementById("tb1").deleteRow(trIndex1-2);
             document.getElementById("tb1").deleteRow(trIndex1-3);
             
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>


<script type="text/javascript">
$("#Sex").change(function() {
  if ($(this).val() == "female") {
    $('#ObstetricHDiv').show();
   
  } else {
    $('#ObstetricHDiv').hide();
    
  }
});
$("#Sex").trigger("change");
    
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(0)").clone(true).appendTo("#tb6");
              var data1 = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              var data2 = $("#tb6 tr:eq(2)").clone(true).appendTo("#tb6");
              var data3 = $("#tb6 tr:eq(3)").clone(true).appendTo("#tb6");
              var data4 = $("#tb6 tr:eq(4)").clone(true).appendTo("#tb6");
              var data5 = $("#tb6 tr:eq(5)").clone(true).appendTo("#tb6");
              var data6 = $("#tb6 tr:eq(6)").clone(true).appendTo("#tb6");
              var data7 = $("#tb6 tr:eq(7)").clone(true).appendTo("#tb6");
              data7.find("input").val('');
              data6.find("input").val('');
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove6', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1-1);
             document.getElementById("tb6").deleteRow(trIndex1-2);
             document.getElementById("tb6").deleteRow(trIndex1-3);
             document.getElementById("tb6").deleteRow(trIndex1-4);
             document.getElementById("tb6").deleteRow(trIndex1-5);
           } else {
             alert("Sorry!! Can't remove first row!");
          } 
      });
});      
</script>

    
<script type="text/javascript">
    
$(function(){
    $('#addMore5').on('click', function() {
              var data = $("#tb5 tr:eq(0)").clone(true).appendTo("#tb5");
              var data1 = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
              var data2 = $("#tb5 tr:eq(2)").clone(true).appendTo("#tb5");
              var data3 = $("#tb5 tr:eq(3)").clone(true).appendTo("#tb5");
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove5', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1-1);
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore7').on('click', function() {
              var data = $("#tb7 tr:eq(0)").clone(true).appendTo("#tb7");
              data.find("input").val('');
     });
     $(document).on('click', '.remove7', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>0) {
             $(this).closest("tr").remove();
             document.getElementById("tb7").deleteRow(trIndex1);
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
</body>

</html>