

<?php
include 'db.php';
$enrolled_id=$_GET['enrolled_id'];
$sql= "DELETE FROM `studentsub` WHERE enrolled_id=$enrolled_id" ;
$result = mysqli_query($conn, $sql);
  
if(mysqli_query($conn, $sql)) {
        echo "<script> 
        alert('Successfully Deleted');
        window.open('../include/enrolsubject.php','_self');
        </script>";
    
             
}else{

    echo "Failed";
}  
        
      

?>  
