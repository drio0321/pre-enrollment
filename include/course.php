<?php

    include '../php/db.php';
    if(isset($_POST['save'])){ 
        $course=$_POST['course'];
        $courseDes=$_POST['courseDes'];
      
        
        $sql= "INSERT INTO `coursetable`(`course`, `courseDes`) 
        VALUES ('$course', '$courseDes')";
        $result = mysqli_query($conn,$sql);
        if(mysqli_query($conn, $sql)) {
            echo "<script> 
            alert('Successfully Updated');
            window.open('courstable.php','_self');
            </script>";
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
    <title>Course</title>
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
            <li><a href="dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="enrollment.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Pre-Enrollment</span>     
                </a></li>
                <li><a href="studenttable.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Student</span>
                </a></li>
                <li><a href="subjecttable.php">
                    <i class="uil uil-book-open"></i>
                    <span class="link-name">Subject</span>
                </a></li>
                <li><a href="coursetable.php">
                    <i class="uil uil-graduation-cap"></i>
                    <span class="link-name">Course</span>
                </a></li>
                <li><a href="instructortable.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Instructor</span>
                </a></li>
                <li><a href="tbleuser.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Users</span>
                </a></li>
              
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../selectuser.php">
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
                    <span class="text">Add Course</span>   
                    </div>
                </div>
            </div>
            <div class = "form">
                <form action ="course.php" method ="POST">
                <label>Course:</label>
                <input type="text" name= "course" id="course" placeholder="Course">
                <br>
                <label>Course Description:</label>
                <input type="text" name= "courseDes" id="courseDes" placeholder="Course Description">
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
    