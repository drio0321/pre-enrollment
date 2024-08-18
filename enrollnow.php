<?php 

session_start(); 

if (!isset($_SESSION['idno'])){
    header("Location: index.php");
   
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pre-Enroll Now</title>
    <link rel="stylesheet" href="enrollnow16.css" />
    <script src="../custom-scripts.js" defer></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  </head>
  <body>
    <main>

      <header>
        <nav class="nav container">
          <h3 class="nav_logo"><a href="#">SLSU Tayabas City Campus</a></h2> 
          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
            <li><a href="home.php" class="nav_link"><i class="uil uil-estate"></i>Home</i></a></li>
            <li><a href="enrollnow.php" class="nav_link"><i class="uil uil-calendar-alt"></i></i>Pre-Enroll Now</i></a></li>
            <li><a href="selectuser.php" class="nav_link"><i class="uil uil-signout"></i></i>Logout</i></a></li>
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>
      </header>
      <?php
            include 'php/db.php';
   
            $sql = "SELECT * FROM `enrollment`, `userinfo`";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?> 
     

      <section class="hero">
        <div class="row container">
          <div class="column">
            <h3>Pre-Enroll Now</h3>
          <div class="container2">
    		<div class="title">STUDENT PRE-ENROLLMENT FORM</div><br><br>
        <h4> Direction: </h4>
        <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Please complete all required fields with accurate information.
           If any field is not applicable to you, kindly use 'N/A' as an indicator. </p> <br>
        
        </nav>
    		 <div class="content">
				<form action="php/enrollmentinsert.php" method="post">
        <div class="table-box">
						<div class ="details">
							<label for="slsuid">STUDENT ID NO.</label>
              <input type="text" readonly id="idno" name="idno" placeholder="Student Id" value="<?php echo isset($_SESSION['idno']) ? $_SESSION['idno'] : $autonum->AUTO; ?>">
						</div>
					</div>
				<div class="user-details">
						<div class="input-box">
						<div class ="details">
							<label for="firstname">First Name</label>
							<input type="text" readonly fname="fname" name="fname" id="fname" value = "<?php echo isset($_SESSION['fname']) ? $_SESSION['fname'] : $autonum->AUTO; ?> "   placeholder="Enter your first name" autocomplete="off" required>
						</div>
						</div>
						<div class="input-box">
						<div class ="details">
							<label for="middlename">Middle Name</label> 
							<input type="text" name="mname" id="mname"  autoc placeholder="Enter your middle name" autocomplete="off" required>
						</div>
						</div>
						<div class="input-box">
						<div class ="details">
							<label for="lastname">Last Name</label>
							<input type="text" readonly fname="lname" name="lname" id="lname" value = "<?php echo isset($_SESSION['lname']) ? $_SESSION['lname'] : $autonum->AUTO; ?>" autoc placeholder="Enter your last name" autocomplete="off" required>
						</div>
						</div>
            
          <div class="input-box">
						<div class ="details">
							<label for="lastname">Sex</label>
							<input type="text" readonly fname="sex" name="sex" id="sex" value = "<?php echo isset($_SESSION['sex']) ? $_SESSION['sex'] : $autonum->AUTO; ?>" autoc placeholder="Enter your last name" autocomplete="off" required>
						</div>
						</div>
						<div class="input-box">
						<div class ="details">
							<label for="course">Course </label> 
							<select id="select" name = "course" autocomplete = "off" required>
                  <option>Select Course</option>
                  <option value="BSIT-CPT">BSIT-CPT</option>
                  <option value="BSA-CS">BSA-CS</option>
                  <option value="BSHM">BSHM</option>       
                </select>
								</div>
								</div>
                <div class="input-box">
						<div class ="details">
							<label for="year">Year&Level</label>
							<select id="select" name="yearlvl" autocomplete = "off" required>
                  <option>Select Year Level</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                  <option value="4th">4th</option>
                </select> 
						</div>
						</div>   
            <div class="input-box">
						<div class ="details">
							<label for="year">Semester</label>
							<select id="select" name="sem" autocomplete = "off" required>
                  <option>Select Semester</option>
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                </select>
						</div>
						</div>   
            <div class="input-box">
						<div class ="details">
							<label for="year">Student Type</label>
							<select id="student_type" name="student_type" autocomplete = "off" required>
                  <option>Select Student Type</option>
                  <option value="Regular">Regular</option>
                  <option value="Irregular">Irregular</option>
                </select>
						</div>
						</div>
            <div class="input-box">
						<div class ="details">
							<label for="course_id">Select Course Number</label>
							<input type="text" name="course_id" id="course_id" placeholder="Enter your course number" autocomplete="off" required>
						</div>
						</div>    
                    </div>
                  </div>
                  <br>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kindly ensure the accuracy of the provided information to facilitate a seamless 
            pre-enrollment process before logging out. Your attention to detail is appreciated, as it contributes
            to preventing any potential issues or delays. Thank you for your cooperation</p> <br> <br>
                  <div class="button">
          					<input type="submit" name="enrollsubmit" value="Submit">
							      <button><a href=""></a></label></button> 
                      </div>
                 
                    
                </form>
              </div>
            <div class="buttons">
            </div>
          </div>
          <div class="column1">
              <div class="course-column">
                 <label>Course:</label>
               <ul class = "menu-course">
               <li><a href="home.php" >1 - Bachelor of Science in Industrial Technology Major in Computer Technology</a></li>
               <li><a href="home.php" >2 - Bachelor of Science in Agriculture Major in Crop Science</a></li>
               <li><a href="home.php" >3 - Bachelor of Science in Hospitality Management</a></li>           
               </ul>
               </div>
          <div class ="login-column">
        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class = "footer">
              <h10> © Southern Luzon State University Tayabas City Campus </h10>
      </section>
      </form>
    </main>

    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");

      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
    <script>

    </script>
  </body>
</html>

