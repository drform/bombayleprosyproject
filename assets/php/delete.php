<?php

include('connection.php');
$id= $_GET['pid'];
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
$result = mysqli_query($conn,"DELETE from person where pid='$id'");
//echo "DELETE from person where pid='$id'";
//echo hi;
 echo"<script>
    alert('Deleted Successfully');
    document.location.href = '../../modules/searchindex.php';
    </script>
    ";
?>