
<?php
include 'db.php';
$instructor_id=$_GET['instructor_id'];
$sql= "DELETE FROM `instructortable` WHERE instructor_id = $instructor_id" ;
$result = mysqli_query($conn, $sql); 
    if(mysqli_query($conn, $sql)) {
        echo "<script> 
        alert('Successfully Deleted');
        window.open('../include/instructortable.php','_self');
        </script>";
    }
  
             
else{

    echo "Failed";
}  
        
      

?>  
