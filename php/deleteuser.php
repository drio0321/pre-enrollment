
<?php
include 'db.php';
$user_id=$_GET['user_id'];
$sql= "DELETE FROM `userinfo` WHERE user_id = $user_id" ;
$result = mysqli_query($conn, $sql);  
if(mysqli_query($conn, $sql)) {
        echo "<script> 
        alert('Successfully Deleted');
        window.open('../include/tbleuser.php','_self');
        </script>";
    }
else{

    echo "Failed";
}  
        
      

?>  
