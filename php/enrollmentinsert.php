<?php

    include 'db.php';
    if(isset($_POST['enrollsubmit'])){ 

        $idno=$_POST['idno'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $sex=$_POST['sex'];
        $course=$_POST['course'];
        $sem=$_POST['sem'];
        $yearlvl=$_POST['yearlvl'];
        $student_type=$_POST['student_type'];
        $course_id=$_POST['course_id'];
        

        $sql= "INSERT INTO `studenttable`(`idno`, `fname`, `mname`, `lname`,`sex`, `course`, `yearlvl`) 
        VALUES ('$idno', '$fname', '$mname', '$lname', '$sex', '$course','$yearlvl')";
        if(mysqli_query($conn, $sql)) {
            echo "<script> 
			alert('Pre-enrollment Form Already Submitted. Proceed to Logout');
			window.open('../enrollnow.php','_self');
			</script>";
            
        }
    
        $sql2= "INSERT INTO `enrollment`(`idno`, `fname`, `mname`, `lname`,`sex`,`course`, `yearlvl`, `sem` ,`student_type`,`course_id`) 
        VALUES ('$idno','$fname' ,'$mname' ,'$lname','$sex','$course','$yearlvl','$sem','$student_type','$course_id')";
        if(mysqli_query($conn, $sql2)) {    
            echo "<script> 
			alert('Pre-enrollment Form Already Submitted. Proceed to Logout');
			window.open('../enrollnow.php','_self');
			</script>";
           
    
        }
        }
?>

