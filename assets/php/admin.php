<?php

	session_start();
	if(!isset($_SESSION['name'])){
		header("location:../../");
	}
	include('connection.php');
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$password = md5(mysqli_real_escape_string($conn,$_POST['password']));
    
    
    $qry0 = "select * from user where name='$name'";
    if(mysqli_num_rows(mysqli_query($conn,$qry0))>0){
        echo "<script>alert('Username is already taken try another one');
                window.location.href = '../../modules/admin.php';
                </script>";
        }else{
    
	$qry = "insert into user (name,password) values ('$name','$password')";

	$result = mysqli_query($conn,$qry);

	if(!$result){
		echo $qry;
	}
	else{
		echo "<script>alert('New Doctor $name Added Successfully');
                window.location.href = '../../modules/admin.php';
                </script>";
	}
        
    }
?>