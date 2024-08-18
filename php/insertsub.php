<?php
include 'db.php';
if(isset($_POST['save'])){ 

    $subCode=$_POST['subCode'];
   
   
   
    $sql= "INSERT INTO enrollment (`subCode`) 
    VALUES ('$subCode')";
    
    $result = mysqli_query($conn,$sql);
    if($result) {
        header('Location: ../insertsubject.php?');  

    }
}
