<?php

   
    include "../php/db.php";
    $subject_id =$_GET['subject_id'];
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

        

        $sql= "UPDATE `subjecttable` SET `subCode`='$subCode',`subDes`='$subDes',
        `section`='$section',`units`='$units',`time`='$time',`day`='$day',
        `room`='$room',`sem`='$sem' ,`instructorId`='$instructorId',`course`='$course'
        ,`yearlvl`='$yearlvl',`course_id`='$course_id' WHERE subject_id=$subject_id";
        
        $result = mysqli_query($conn,$sql);
        if($result) {
            header('Location: ../include/subjecttable.php?');  
        
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
                    <span class="text">Update Subject</span>   
                    </div>
                </div>
            </div>
            <?php 
            $sql = "SELECT * FROM `subjecttable` WHERE subject_id = $subject_id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            ?>
            <div class = "form">
                <form action ="" method ="POST">
                <label>Subject Code:</label>
                <input type="text" value= "<?php echo $row ['subCode'] ?> " name= "subCode" id="subCode" placeholder="Subject Code">
                <br>
                <label>Subject Description:</label>
                <input type="text" value= "<?php echo $row ['subDes'] ?> " name= "subDes" id="courseDes" placeholder="Subject Description">
                <br>
                <label>Section:</label>
                <select id="course" name="section">
                  <option>Select Section</option>
                  <option value="Tc(Lec)">Tc(Lec)</option>
                  <option value="Tc(Lab)">Tc(Lab)</option>
                </select>
                <br>
                <label>Units:</label>
                <input type="text"  value= "<?php echo $row ['units'] ?> " name= "units" id="courseDes" placeholder="Units">
                <br>
                <label>Time:</label>
                <input type="text" value= "<?php echo $row ['time'] ?> " name= "time" id="courseDes" placeholder="time">
                <br>
                <label>Day:</label>
                <input type="text"  value= "<?php echo $row ['day'] ?> " name= "day" id="courseDes" placeholder="day">
                <br>
                <label>Room:</label>
                <input type="text"  value= "<?php echo $row ['room'] ?> " name= "room" id="courseDes" placeholder="Room">
                <br>
                <label>Sem:</label>
                <select id="sem" name="sem">
                  <option>Select Section</option>
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                </select>
                <br>
                <label>Instructor:</label>
                <input type="text"  value= "<?php echo $row ['instructorId'] ?> " name= "instructorId" id="courseDes" placeholder="Intructor ID">
                <br>
                <label>Course:</label>
                <select id="course" name="course">
                  <option>Select Section</option>
                  <option value="BSIT-CPT">BSIT-CPT</option>
                  <option value="BSA-CS">BSA-CS</option>
                  <option value="BSHM">BSHM</option>
                </select>
                <br>
                <label>Year Level:</label>
                <select id="yearlvl" name="yearlvl">
                  <option>Select Section</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                  <option value="4th">4th</option>
                </select>
                <br>
                <label>Course Number:</label>
                <input type="text"  value= "<?php echo $row ['course_id'] ?> " name= "course_id" id="courseDes" placeholder="Intructor ID">
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
    

