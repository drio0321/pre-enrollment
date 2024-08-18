<?php 

session_start(); 

if (!isset($_SESSION['idno'])){
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/enrolsubject.css">
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
                    <span class="text">Insert Subject</span>   
                    </div>
                </div>
            </div>
            <?php
                 include '../php/db.php';
                $sql = "SELECT * FROM enrollment";
                $result3 = mysqli_query($conn,$sql);
                 if (($result3) ){
                if(isset($_POST['save'])){ 
                    $idno=$_POST['idno'];
                    $subCode=$_POST['subCode'];
                    $subDes=$_POST['subDes'];
                    $section=$_POST['section'];
                    $units=$_POST['units'];
                    $time=$_POST['time'];
                    $day =$_POST['day'];
                    $room=$_POST['room'];
                    $sem=$_POST['sem'];
                    $instructorId=$_POST['instructorId'];
                    

                    $sql= "INSERT INTO `studentsub` (`subCode`,`subDes`, `section`, `units`, `time`, `day`, `room`, `sem`, `instructorId`) 
                    VALUES ('$subCode', '$subDes','$section', '$units','$time', '$day', '$room', '$sem', '$instructorId')";
                    
                    $result = mysqli_query($conn,$sql);
                    if($result) {
                        header('Location: enrolsubject.php?');

                    }
                }
                }
                ?> 
             <div class="container2">
            <div class="content">
				<form action="" method="post">
				<div class="user-details">
                <div class="input-box">
						<div class ="details">
							<label for="year">Subject Code</label>
							<select id="yearlvl" name="subCode">
                            <option>Select Subject Code</option>
                            <option value="ITCT101">ITCT101</option>    
                            <option value="ITCT201">ITCT201</option>
                            <option value="ITCT301">ITCT301</option>
                            <option value="ITCT401">ITCT401</option>
                            <option value="ITCT501">ITCT501</option>
                            </select> 
                            </div>
								</div> 
                    <div class="input-box">
						<div class ="details">
							<label for="year">Subject Description</label>
							<select id="yearlvl" name="subDes">
                            <option>Select Subject Description</option>
                            <option value="Introduction to Computer Science">Introduction to Computer Science</option>
                            <option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
                            <option value="Computer Networks">Computer Networks</option>
                            <option value="Database Management Systems">Database Management Systems</option>
                            <option value="Software Engineering">Software Engineering</option> 
                            </select> 
                            </div>
								</div> 
                        <div class="input-box">
						<div class ="details">
							<label for="year">Section</label>
							<select id="yearlvl" name="section">
                            <option>Select Section</option>
                            <option value="Tc(Lec)">Tc(Lec)</option>
                            <option value="Tc(Lab)">Tc(Lab)</option>
                            </select> 
                            </div>
								</div> 
						<div class="input-box">
						<div class ="details">
							<label for="lastname">Units</label>
							<input type="text" name="units" id="lname" autoc placeholder="Units" autocomplete="off" required>
						    </div>
						</div>
                    <div class="input-box">
						<div class ="details">
							<label for="course">Time</label>
							<input type="text" name="time" id="fname" autoc placeholder="Time" autocomplete="off" required>
								</div>
								</div> 
                                <div class="input-box">
						<div class ="details">
							<label for="course">Day</label>
							<input type="text" name="day" id="fname" autoc placeholder="Day" autocomplete="off" required>
								</div>
								</div> 
                                <div class="input-box">
						<div class ="details">
							<label for="course">Room</label>
							<input type="text" name="room" id="fname" autoc placeholder="Room" autocomplete="off" required>
								</div>
								</div> 

                        <div class="input-box">
                            <div class ="details">
                                <label for="sem">Semester</label> 
                                <select id="sem" name = "sem">
                                <option>Select Semester</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>      
                                </select>
								</div>
								</div>                       
                    <div class="input-box">
                        <div class ="details">
                            <label for="">Instructor</label> 
                                <select id="" name = "instructorId">
                                <option>Select Instructor</option>
                                <option value="Prof. Michael S. Johnson">Prof. Michael S. Johnson</option>
                                <option value="Prof. Billy R. Smith">Prof. Billy R. Smith</option>      
                                <option value="Prof. Harry K. Anderson">Prof. Harry K. Anderson</option>  
                                <option value="Prof. Ysabel H. Davis">Prof. Ysabel H. Davis</option>  
                                <option value="Prof. Maureen B. Carter">Prof. Maureen B. Carter</option>       
                                </select>
								</div>
								</div>
                             </div>
                        <div class = "button">
							<button type = "save" name="save">ADD</button> 
                            </div><br><br>
          
                </div>
                <h4>List of Subject </h4>
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
                        <th >Action</th> 
                        
                        </tr>
                    </thead>
                    </tbody>
                    <?php 

              include '../php/db.php';
            
              $sql1 ="SELECT * FROM studentsub";
              $query= mysqli_query($conn, $sql1);
              if ($query){
              while ($row = mysqli_fetch_assoc($query)) {
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
                <td> 
                    <a href="../php/updatestusub.php?enrolled_id=<?php echo $row['enrolled_id'] ?>" class= "link-sky" ><i class="uil uil-edit"></i></a>
                    <a href="../php/deletestusub.php?enrolled_id=<?php echo $row['enrolled_id'] ?> " class= "link-red" ><i class="uil uil-trash" ></i></a> 
                </td>                  
                </tr>
            
                <?php    }
                }
                mysqli_close($conn)  ?>           
            
            </tbody>
            </table>  
                    </form>
                </div>
            </div>
        </div>
        <div>
       
                
                
            </section>          
        <script src="../js/script.js"></script>
 
                
           
</body>
</html>
    