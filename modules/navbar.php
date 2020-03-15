<?php

session_start();

date_default_timezone_set('Asia/Kolkata');

?>

<!DOCTYPE html>
<html lang="en" style="" class=" js no-touch js no-touch csstransforms3d csstransitions">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://bombayleprosycare.org/assets/css/navbar.css">
  <script type="text/javascript" src="https://bombayleprosycare.org/assets/blp/jquery-1.11.1.min.js.download"></script>
<!-- stylesheet -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://bombayleprosycare.org/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- header -->   
  <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<style type="text/css">
  
</style>
<body style="">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <div class="agileits_w3layouts_nav">
      <div id="toggle_m_nav">

<div class="agileits_w3layouts_nav">
      <div id="toggle_m_nav">
        <div id="m_nav_menu" class="m_nav">
          <div class="m_nav_ham " id="m_ham_1"></div>
          <div class="m_nav_ham" id="m_ham_2"></div>
          <div class="m_nav_ham" id="m_ham_3"></div>
        </div>
      </div>
       <div id="m_nav_container" class="m_nav wthree_bg">
        <nav class="menu menu--sebastian">

         
        <ul id="m_nav_list" class="m_nav menu__list">

              <li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="https://bombayleprosycare.org/index.php" class="menu__link"><i class="menu-icon fa fa-home" aria-hidden="true"></i> Home </a></li>

             
                         
              <li class="m_nav_item menu__item" id="moble_nav_item_4"> 

                                  <div class="dropdown">
                                <button style="background: transparent; bottom:25px;" class="btn btn-secondary menu__link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="menu-icon fa fa-users" aria-hidden="true"></i> 
                                        
                                  Team
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 10px;">
                                  <a class="dropdown-item"  href="https://bombayleprosycare.org/index.php#team">Trustees</a>
                                    <br>
                                  <a class="dropdown-item"   href="https://bombayleprosycare.org/modules/vl.php">Volunteer</a>
                             
                                </div>
                              </div>
                              
                          </li>

                   <li class="m_nav_item menu__item" id="moble_nav_item_5"> <a href="https://bombayleprosycare.org/index.php#grid-gallery" class="menu__link"><i class="menu-icon fas fa-image" aria-hidden="true"></i>Gallery</a> </li>    
                   
                     <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="https://bombayleprosycare.org/index.php#contact" class="menu__link"><i class="menu-icon fa fa-map-marker" aria-hidden="true"></i> Contact </a> </li> 
       
          
             
              <?php
                if(isset($_SESSION['name'])){
              ?>
                 <li class="m_nav_item menu__item" id="moble_nav_item_3"> <a href="https://bombayleprosycare.org/modules/form.php" class="menu__link"><i class="menu-icon fa fa-check-square-o" aria-hidden="true"></i>Form</a> </li>   
                
              <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="https://bombayleprosycare.org/modules/searchindex.php" class="menu__link"><i class="menu-icon fa fa-search" aria-hidden="true"></i> Search </a> </li> 
              <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="#" class="menu__link"><i class="menu-icon fa fa-user" aria-hidden="true"></i> 
                <?php echo $_SESSION['name']; ?> </a> </li>
              <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="https://bombayleprosycare.org/assets/php/logout.php" class="menu__link"><i class="menu-icon fa fa-sign-in" aria-hidden="true"></i> Logout </a> </li>
              <?php

              }
              else{
               ?>
              <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="https://bombayleprosycare.org/modules/login.php" class="menu__link"><i class="menu-icon fa fa-user-o" aria-hidden="true"></i> Login </a> </li>

                </ul>
             </nav>
           </div>



 <?php
    }
?> 
                

        
          
      </div>
    </div>
  </div>
  <!-- menu -->
  <script type="text/javascript" src="../assets/blp/main.js.download"></script>

</body>
</html>