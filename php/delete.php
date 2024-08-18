

<?php
include 'db.php';
$subject_id=$_GET['subject_id'];
$sql= "DELETE FROM `subjecttable` WHERE subject_id=$subject_id" ;
$result = mysqli_query($conn, $sql);
if(mysqli_query($conn, $sql)) {
        echo "<script> 
        alert('Successfully Deleted');
        window.open('../include/subjecttable.php','_self');
        </script>";
    }
   
             
else{

    echo "Failed";
}  
        
      

?>  
