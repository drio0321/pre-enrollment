
<?php
include 'db.php';
$course_id=$_GET['course_id'];
$sql= "DELETE FROM `coursetable` WHERE course_id = $course_id" ;
$result = mysqli_query($conn, $sql);
if(mysqli_query($conn, $sql)) {
    echo "<script> 
    alert('Successfully Deleted');
    window.open('../include/coursetable.php','_self');
    </script>";
}
             
else{

    echo "Failed";
}  
        
      

?>  
