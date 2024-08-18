<?php

    include '../php/db.php';
    $student_id =$_GET['student_id'];
    if(isset($_POST['save'])){ 
        $idno=$_POST['idno'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $sex=$_POST['sex'];
        $course=$_POST['course'];
        $yearlvl=$_POST['yearlvl'];

        
        

        $sql= "UPDATE `studenttable` SET `idno`='$idno',`fname`='$fname',
        `mname`='$mname',`lname`='$lname',`sex`='$sex',`course`='$course',
        `yearlvl`='$yearlvl' WHERE student_id=$student_id";
        $result = mysqli_query($conn,$sql);
        if(mysqli_query($conn, $sql)) {
            echo "<script> 
            alert('Successfully Updated');
            window.open('../include/studenttable.php','_self');
            </script>";
        }
        
        else{
            echo "Failed: " . mysqli_error($conn);
        }

        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/example15.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="../images/logo.jpg" alt="">
            </div>

            <span class="logo_name">SLSU Tayabas City Campus</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
            <li><a href="../include/dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="../include/enrollment.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Pre-Enrollment</span>     
                </a></li>
                <li><a href="../include/studenttable.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Student</span>
                </a></li>
                <li><a href="../include/subjecttable.php">
                    <i class="uil uil-book-open"></i>
                    <span class="link-name">Subject</span>
                </a></li>
                <li><a href="../include/coursetable.php">
                    <i class="uil uil-graduation-cap"></i>
                    <span class="link-name">Course</span>
                </a></li>
                <li><a href="../include/instructortable.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Instructor</span>
                </a></li>
                <li><a href="../include/tbleuser.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Users</span>
                </a></li>
              
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-calendar-alt"></i>
                    <span class="text">Update Instructor</span>   
                    </div>
                </div>
            </div>
            <?php 
            $sql = "SELECT * FROM `studenttable` WHERE student_id = $student_id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class = "form">
                <form action ="" method ="POST">
                <label>Id No:</label>
                <input type="text" value= "<?php echo $row ['idno'] ?> " name= "idno" id="instructorId" placeholder="Instructor ID">
                <br>
                <label>First Name:</label>
                <input type="text" value= "<?php echo $row ['fname'] ?> " name= "fname" id="fname" placeholder="First Name">
                <br>
                <label>Middle Name:</label>
                <input type="text" value= "<?php echo $row ['mname'] ?> " name= "mname" id="mname" placeholder="Middle Name">
                <br>
                <label>Last Name:</label>
                <input type="text" value= "<?php echo $row ['lname'] ?> " name= "lname" id="lname" placeholder="Last Name">
                <br>
                <label>Sex:</label>
                <select id="sex" name="sex">
                  <option>Select Section</option>
                  <option value= "Male">Male</option>
                  <option value= "Female">Female</option>
                </select>
                <br>
                <label>Course:</label>
                <input type="text" value= "<?php echo $row ['course'] ?> " name= "course" id="course" placeholder="Course">
                <br>
                <label>Year & Level:</label>
                <input type="text" value= "<?php echo $row ['yearlvl'] ?> " name= "yearlvl" id="course" placeholder="Course">
                <br>
                <div class = "save-field">
                <label></label>
                    <button type = "save" name ="save" >Save<i class="uil uil-save"></i></button>
                </div>
            </form>
        </div>
        <div>
       
                
                
            </section>          
        <script src="../js/script.js"></script>
 
                
           
</body>
</html>
    