
<?php
include 'db.php';
$student_id=$_GET['student_id'];
$sql= "DELETE FROM `studenttable` WHERE student_id = $student_id" ;
$result = mysqli_query($conn, $sql); 
if(mysqli_query($conn, $sql)) {
        echo "<script> 
        alert('Successfully Deleted');
        window.open('../include/studenttable.php','_self');
        </script>";
}
else{

    echo "Failed";
}  
        
      

?>  
