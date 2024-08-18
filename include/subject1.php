<?php

    include '../php/db.php';
    if(isset($_POST['save'])){ 
        $subCode=$_POST['subCode'];
        $subDes=$_POST['subDes'];
        $section=$_POST['section'];
        $units=$_POST['units'];
        $time=$_POST['time'];
        $day=$_POST['day'];
        $room=$_POST['room'];
        $sem=$_POST['sem'];
        $instructorId=$_POST['instructorId'];
        $course=$_POST['course'];
        $yearlvl=$_POST['yearlvl'];
        $course_id=$_POST['course_id'];

        

        $sql= "INSERT INTO `subjecttable` (`subCode`,`subDes`, `section`, `units`, `time`, `day`, `room`, `sem`, `instructorId`,`course`,`yearlvl`, `course_id`) 
        VALUES ('$subCode', '$subDes','$section', '$units','$time', '$day', '$room', '$sem','$instructorId','$course','$yearlvl', '$course_id')";
        
        $result1 = mysqli_query($conn,$sql);
        if($result1) {
            header('Location: subjecttable.php?');  
        
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
                    <span class="text">Add Subject</span>   
                    </div>
                </div>
            </div>
            <div class = "form">
                <form action ="" method ="POST">
                <label>Subject Code:</label>
                <input type="text" name= "subCode" id="subCode" placeholder="Subject Code">
                <br>
                <label>Subject Description:</label>
                <input type="text" name= "subDes" id="courseDes" placeholder="Subject Description">
                <br>
                <label>Section:</label>
                <select id="section" name="section">
                  <option>Select Section</option>
                  <option value="Tc(Lec)">Tc(Lec)</option>
                  <option value="Tc(Lab)">Tc(Lab)</option>
                </select>
                <br>
                <label>Units:</label>
                <input type="text" name= "units" id="units" placeholder="Units">
                <br>
                <label>Time:</label>
                <input type="text" name= "time" id="units" placeholder="Time">
                <br>
                <div class = "time">
                <label>Day:</label>
                <input type="text" name= "day" id="courseDes" placeholder="Day">
                <br>
                </div>
                <label>Room:</label>
                <input type="text" name= "room" id="courseDes" placeholder="Room">
                <br>
                <label>Semester:</label>
                <select id="sem" name="sem">
                  <option>Select Semester</option>
                  <option value="1st<">1st</option>
                  <option value="2nd">2nd</option>

                </select>
                <br>
                <label>Instructor:</label>
                <input type="text" name= "instructorId" id="courseDes" placeholder="Instructor">
                <br>
                <label>Course:</label>
                <select id="course" name="course">
                  <option>Select Course</option>
                  <option value="BSIT-CPT">BSIT-CPT</option>
                  <option value="BSA-CS">BSA-CS</option>
                  <option value="BSHM">BSHM</option>
                </select>
                <br>
                <label>Year Level:</label>
                <select id="yearlvl" name="yearlvl">
                  <option>Select Year Level</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                  <option value="4th">4th</option>
                </select>
                <br>
                <label>Course Number:</label>
                <input type="text" name= "course_id" id="course_id" placeholder="Course Number">
                <br>
                <div class = "save-field">
                <label></label>
                    <button type = "save" name ="save" >Save<i class="uil uil-save"></i></button>
                </div>
                </div>
            </form>
        </div>
        <div>
       
                
                
            </section>          
        <script src="../js/script.js"></script>
 
                
           
</body>
</html>
    