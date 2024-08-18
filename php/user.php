<?php

    include 'db.php';
    if(isset($_POST['usersubmit'])){ 
        $idno=$_POST['idno'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $sex=$_POST['sex'];


        $sql1 = "SELECT * FROM userinfo WHERE idno = '$idno' " ;
        $userexist = mysqli_query($conn,$sql1);
        if (mysqli_num_rows($userexist) > 0){
            echo "<script> 
			alert('IDNO Already Exist');
			window.open('../registration.php','_self');
			</script>";
        }
        $sql2 = "SELECT * FROM userinfo WHERE email = '$email' " ;
        $userexist1 = mysqli_query($conn,$sql2);
        if (mysqli_num_rows($userexist1) > 0){
            echo "<script> 
			alert('Email Already Exist');
			window.open('../registration.php','_self');
			</script>";
        }
        else{
            $sql="INSERT INTO `userinfo`(`idno`, `fname`, `mname`, `lname`, `password`, `email`, `sex`) 
            VALUES ('$idno', '$fname', '$mname', '$lname', '$password', '$email', '$sex' )";
            if(mysqli_query($conn, $sql)) {
            echo "<script> 
			alert('Successfully Registered');
			window.open('../index.php','_self');
			</script>";
        }
    }

}
		
?>

