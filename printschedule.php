<?php

    include 'php/db.php';
    $enroll_id =$_GET['enroll_id'];
    if(isset($_POST['save'])){ 
        $idno=$_POST['idno'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $course=$_POST['course'];
        $yearlvl=$_POST['yearlvl'];

        
        

        $sql= "UPDATE `enrollment` SET `idno`='$idno',`fname`='$fname',
        `mname`='$mname',`lname`='$lname',`course`='$course',
        `yearlvl`='$yearlvl' WHERE enroll_id =$enroll_id";
        $result = mysqli_query($conn,$sql);
        if($result) {
            header ("Location: ../include/enrollment.php?");
        
        }else{
            echo "Failed: " . mysqli_error($conn);
        }

        }

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/printschedule11.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Print</title>
    
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.jpg" alt="">
            </div>

            <span class="logo_name">SLSU Tayabas City Campus</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
            <li><a href="include/dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="include/enrollment.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Pre-Enrollment</span>     
                </a></li>
                <li><a href="include/studenttable.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Student</span>
                </a></li>
                <li><a href="include/subjecttable.php">
                    <i class="uil uil-book-open"></i>
                    <span class="link-name">Subject</span>
                </a></li>
                <li><a href="include/coursetable.php">
                    <i class="uil uil-graduation-cap"></i>
                    <span class="link-name">Course</span>
                </a></li>
                <li><a href="include/instructortable.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Instructor</span>
                </a></li>
                <li><a href="include/tbleuser.php">
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
       
              
        </div>

        <div class="dash-content">
        <i class=""></i>
            <span class="text"></span>
            <div class="overview">
                <div class="title">
                   
                    </div>  
                </div> 
                <div class = "top-label">
                    <h6>Republic of the Philippines </h6>
                        <h6>SOUTHERN LUZON STATE UNIVERSITY </h6>
                            <h6>TAYABAS CITY CAMPUS</h6></br>
                            <div class ="pre-regis">
                                <h6>PRE-REGISTRATION FORM </h6><br>
                                <div class="pull-right">
                                Date: <?php echo date('m/d/Y'); ?></div><br>
                        <?php
                        include 'php/db.php';
                    
                        $sql = "SELECT * FROM `enrollment` WHERE enroll_id  = $enroll_id";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);

                        

                    ?> 
                     <form action ="" method ="POST">
                        <div class = "student">Student ID No.
                         <b><?php echo $row ['idno'] ?></b>
                        </div> 
                            <div class = "student"> Name: <b> <?php echo $row ['fname']; ?>  <?php echo $row ['mname']; ?> <?php echo $row ['lname']; ?></b>
                                <div class = "sex"> Sex: <b> <?php echo $row ['sex']; ?> </div> </br> </b>
                                    <div class = "curr-course"> CURR YEAR: <b> <?php echo $row ['yearlvl']; ?></b></div>
                                         <div class = "course"> COURSE: <b> <?php echo $row ['course']; ?></b></div>
                                            <div class = "sem"> SEMESTER: <b> <?php echo $row ['sem']; ?> </b></div>
                                           
                                           <?php
                                                
                                            $sql = "SELECT SUM(units) AS sum FROM `studentsub` ";$sql = "SELECT SUM(subjecttable.units) AS sum FROM enrollment INNER JOIN 
                                            subjecttable ON enrollment.course_id = subjecttable.course_id WHERE enrollment.course = 
                                            subjecttable.course AND enrollment.yearlvl = subjecttable.yearlvl AND enrollment.sem = subjecttable.sem AND enroll_id ='$enroll_id'";
                                            $query_result= mysqli_query($conn, $sql);
                                            
                                            while($row = mysqli_fetch_assoc($query_result)){

                                                $output ="Total Units:"." ".$row['sum'];
                                            }
                                            ?>
                                            <b><?php
                                            echo $output;
                                            ?></b>
                                                     <div class = "enrolled"> ENROLLED SUBJECT </div></b><br> 
                                                  

                    <table class ="table" >
                    <thead>
                        <tr>
                        <th >Subject Code</th>
                        <th >Subject Description</th>
                        <th >Section</th>
                        <th >Units</th>
                        <th >Time</th>
                        <th >Day</th>
                        <th >Room</th>
                        <th >Instructor</th>    
                        
                        </tr>
                    </thead>
                    </tbody>
                    <?php
                            
                            include 'php/db.php';
                
                            $sql ="SELECT enrollment.idno, subjecttable.subCode, subjecttable.subDes, subjecttable.section, 
                            subjecttable.units, subjecttable.time, subjecttable.day, subjecttable.room,subjecttable.sem, 
                            subjecttable.instructorId,subjecttable.course, subjecttable.yearlvl FROM enrollment INNER JOIN 
                            subjecttable ON enrollment.course_id = subjecttable.course_id WHERE enrollment.course = 
                            subjecttable.course AND enrollment.yearlvl = subjecttable.yearlvl AND enrollment.sem = subjecttable.sem AND enroll_id ='$enroll_id'";
                            $query= mysqli_query($conn, $sql);
                            if($query){
                                while($row =mysqli_fetch_assoc($query)){
                        ?> 
                                <tr>
                                <td><?php echo $row ['subCode']; ?></td>  
                                <td><?php echo $row ['subDes']; ?></td>  
                                <td><?php echo $row ['section']; ?></td>
                                <td><?php echo $row ['units']; ?></td>  
                                <td><?php echo $row ['time']; ?></td> 
                                <td><?php echo $row ['day']; ?></td> 
                                <td><?php echo $row ['room']; ?></td> 
                                <td><?php echo $row ['instructorId']; ?></td>                
                                </tr>
                            
                                <?php    }
                        }
                                mysqli_close($conn)  ?>           
                            </tbody>
                            </table>
                            
                       
                            <img src ="images/logo.jpg" class = "center">
                                 
                                        <div class = "note"><b> Note:</div></b>       
                                             <div class = "line">     
                                                <label>Dean</label>
                                                    </div>  
                                        <div class ="registrar">
                                            <label>Registrar</label>
                                             </div>     
                                                    <div class ="student-pledge"> 
                                                        <h6><b>STUDENT'S PLEDGE</H6></b>
                                                            <p>In consideration of my admission to the Southern Luzon State University Tayabas City Campus
                                                               and of the privileges of a student in this institution. I hereby promise and pledge to abide
                                                               by and comply with all the rules and regulation and laid down by competent authority in the
                                                               University</p><br>
                                                            <div class = "signature">
                                                                  <h6>Student's Signature</h6>
                                                             </div>  
                                                         </div>

                                        <div class = "button">
                                            <button type = "print" id ="print">Print<i class="uil uil-print"></i></button>
                                             </div>
                                    </div>
                                </div>
                            </div> 
                    </section>
                        </div>
                    </div>
    <script src="js/html2canvas.js"></script>
    <script src="js/index.js"></script>
    <script src="js/script.js"></script>
    
</html></body>