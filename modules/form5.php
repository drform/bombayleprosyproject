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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 <!--   <script type="text/javascript" src="http://localhost/BLP/assets/blp/jquery-1.11.1.min.js.download"></script> -->

    <!-- stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="http://localhost/BLP/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

    <!-- header -->   
    <!-- Latest compiled and minified CSS -->
    <!-- jQuery library -->
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  -->

    <!-- Popper JS -->
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Bombay Leprosy Project </h2>
            <form method="POST" id="signup-form" class="signup-form" onsubmit="return checkDate(this)" enctype="multipart/form-data">
                <h3>
                    <span class="title_text">Clinical record Sheet</span>
                </h3>
                
                <fieldset>

                    <div class="form-row" style="padding-left: 41px ;margin-top: 9px;">
                        <div class="form-group" style="padding-left: 41px ;margin-top: 9px;">
                            <label for="formDate" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                            <input style="margin-left: 13px;" type="date" name="formDate" id="formDate" />
                        </div>
                        <div class="form-group" style="padding-left: 300px;">
                            <label for="staffName" class="form-label">Staff Name</label>                            
                            <input type="text" name="staffName" id="staffName" placeholder="Staff Name"/>
                        </div>
                    </div>

                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="patientvisit" class="form-label">How was patient since last visit</label>
                             <textarea name="patvisit" id="patvisit" placeholder="Describe Here" required title="Condition of the patient required for assessment"></textarea>
                        </div>
                         <div class="form-group">
                            <label for="currentmedication" class="form-label">Current Medication: </label>
                        </div>

                        <div class="form-group">
                                <label for="Contact1" class="form-label">Predisolone:</label>
                                <input type="text" name="prednimed" id="prednimed" placeholder="Medication during past 1 week" />
                        </div>

                        <div class="form-group">
                                <label for="Contact1" class="form-label">Clofazimine/Vitamins:</label>
                                <input type="text" name="clofamed" id="clofamed" placeholder="Medication during past 1 week" />
                        </div>

                         <div class="form-group">
                            <label for="physicalassessment" class="form-label">Physical assessment: </label>
                        </div>

                       <div class="fieldset-content">
                        <div class="form-group" style="padding-left:2px;">
						<div class="form-radio" >
                                <label for="nfa"  class="form-label">NFA</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="nfa" value="yes" id="yes" />
                                    <label for="yes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="nfa" value="no" id="no" />
                                    <label for="no" style="width:80px;">No</label>
                                </div>
                            </div>
                                        
                        </div>
                         <div class="form-group">
                                <label for="nfi">NFI</label>
                                <select class="form-control;valid" name="nfi" id="nfi">
                                      <option value="yes1">Yes</option>
                                      <option value="no1">No</option>
                                </select>
                              </div>
                              
                             
                                 <div class="form-textarea" id="Add1HDiv">
                                                  
                                     <label for="Add1H" class="form-label">If yes?</label>
                                     <td><input type="text" id="Add1H" name="Add1H" placeholder="" class="valid"></td>
                                 </div>
                            

<div class="form-group" style="padding-left:10px">
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
<div class="form-group">
                                <label for="p_rednisolone">Checklist for adverse effects of prednisolone</label>
                                <div class="container">
  
  <form>
  <div class="row">
    <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Mild indigestion 
    </label>
    <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Peptic Ulcer
    </label>
    <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value="" style=""style="padding-left:4px">Striae
    </label>
         <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Herpes Zoster
    </label>
	</div>
	<div class="row">
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value="" style="padding-left:4px">Hyperglycaemia 
    </label>
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Hypertension
    </label>
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Malaena
    </label>
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Glaucoma
    </label>
	</div>
	<div class="row">
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Truncal Obesity  </label>
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Osteoporosis
    </label>
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Moon Face
    </label>
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Psychosis
    </label>
	</div>
	<div class="row">
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Gastrointestinal bleeding
    </label>
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Haematemesis
    </label>
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:3px">&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
    </label>
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Acne
    </label>
    </div>

  </form>
</div>

								  </div>
		
                       
							  <div class="form-group">
                                <label for="c_lofazimine">Checklist for adverse effects of Clofazimine</label>
                                
								<div class="container"  >
								
									
				<form>					
  <div class="row">
    <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Mild indigestion 
    </label>
    <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Vomiting
	  </label>
    <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value="" style=""style="padding-left:4px">Nausea
    </label>
         <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Abdominal Pain
    </label>
	</div>
	<div class="row">
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value="" style="padding-left:4px">Diarrhoea,Acute
    </label>
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Ichthyosis
    </label>
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Weight loss	
    </label>
     <label class="checkbox-inline" style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">Conjuctiva
    </label>
	</div>
	
	<div class="row">
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">&nbsp;&nbsp;&nbsp;&nbsp;Persistent Indigestion
    </label>
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diarrhoea,Chronic
    </label>
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chronic Dysentery
    </label>
     <label class="checkbox-inline"style="padding-left:4px">
      <input type="checkbox" value=""style="padding-left:4px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skin Discolouration	
    </label>
    </div>
								
								
								
								
								
								
								</form>
								</div>
																	  </div>
							  

                         <div class="form-group">
                                <label for="patcondition" class="form-label">Is Patient Worse:</label>
                                <input type="text" name="patcondtion" id="patcondition" placeholder="Describe condition" />
                        </div>

                        <div class="form-group">
                            <label for="flarediag">Time since flare began</label>
                            <input type="range"style="border:1px solid;background-color: lightblue;" name="flarediag" id="flarediag" min="1" max="14" value="7" onchange="show_value3(this.value)">
                          <span id="slider_value3" style="color:black;font-weight:bold;"></span><br>
								 <span id="slider_value3" style="color:black;font-weight:bold;"></span>
								
								<style type="text/css">
                                #flarediag{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #flarediag::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #flarediag::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #flarediag:active::-webkit-slider-thumb{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                }
                            </style>
								
								<script type="text/javascript">
								function show_value3(x)
								{
									document.getElementById("slider_value3").innerHTML=x;
								} 
								</script>
                        </div>

                        <div class="form-group">
                                <label for="treatpri">Treatment prescribed</label>
                                <select class="form-control;valid" name="treatpri" id="treatpri">
                                      <option value="Consd">Continue standard steroid course</option>
                                      <option value="adpredni">Additional prednisolone</option>
                                </select>
                        </div>

                         <div class="form-group">
                                <label for="patcondition" class="form-label">Advised admission:</label>
                                <input type="text" name="patcondtion" id="patcondition" placeholder="Describe condition" />
                        </div>

                        <div class="form-group" style="padding-left: 0px ;margin-top: 9px;">
                            <label for="nextasses" class="form-label">Date of next assessment:</label>&ensp;&ensp;
                            <input style="margin-left: -18px;" type="date" name="assesdate" id="assesdate" />
                        </div>

                        <input type="submit" value="submit"/>

                    <div class="fieldset-footer">
                        <span>Form 5 of 6</span>
                    </div>

                    </div>
                
                </fieldset>

            </form>

        </div>

        <div class="copy w3ls">
               <p>&copy; 2019  Bombay Leprosy Project  </p>
        </div>

    </div>

    <!-- JS -->
 <!--   <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>   -->
	
	<script type="text/javascript">
	function checkDate(thisform)
   {
	   var staff = thisform.staffName.value;
	   var date1  = thisform.formDate.value;
     var assesdate = thisform.assesdate.value;
     var Add1H = thisform.Add1H.value;
	   if(staff =="" || staff==null)
        {   
            thisform.staff.focus();
            return false;
        }
		if(date1 >= assesdate)
		{
		   
			alert("Date of assessment should be greater than date of form");
			return false;
			
		}	

    if( Add1H =="" || Add1H==null)
    {   
        thisform.Add1H.focus();
        return false;
    }

       return true;
   
   
   }
   
	</script>
	<script type="text/javascript">
			$("#nfi").change(function() {
			  if ($(this).val() == "yes1") {
				$('#Add1HDiv').show();
			   
			  } else {
				$('#Add1HDiv').hide();
				
			  }
			});
			$("#nfi").trigger("change");
		
	</script>  
    
</body>

</html>