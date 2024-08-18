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
    <link rel="stylesheet" href="insertsubject13.css" />
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
            
            <li><a href="selectuser.php" class="nav_link"><i class="uil uil-signout"></i></i>Logout!</i></a></li>
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>
      </header>
      <section class="hero">
        <div class="row container">
          <div class="column">
            <h3>This is the preview of your pre-enrollment form</h3>
          <ul class="menu_item">

          </ul>
          <div class="container2">
          <div class = "form">
              <h4>Republic of the Philippines</h4>
                <h4>SOUTHERN LUZON STATE UNIVERSITY</h4>
                  <h4>TAYABAS CITY CAMPUS</h4><br><br>
                  
                  <?php
                
                    include 'php/db.php';
     
                      $sql= "SELECT * FROM `studenttable`, subjecttable, enrollment";
                      $query= mysqli_query($conn, $sql);
                      $result = mysqli_fetch_assoc($query);
    
                  ?> 
                  <table class="table-name">
                  <thead>
                  <tr>
                  <label>IDNO:<?php echo isset($_SESSION['idno']) ? $_SESSION['idno'] : $autonum->AUTO; ?><br>
                  <label>Name:<?php echo isset($_SESSION['fname']) ? $_SESSION['fname'] : $autonum->AUTO; ?> <?php echo isset($_SESSION['lname']) ? $_SESSION['lname'] : $autonum->AUTO; ?></label><br>
                  <label class = "sem"> SEMESTER:  <label> <?php echo $result ['sem']; ?> </label><br>
                  <label class="pull-right">Date: <?php echo date('m/d/Y'); ?></label> <br>
                  </thead>
                  <tbody >
                  <?php
                    
                    $sql = "SELECT SUM(units) AS sum FROM `subjecttable` ";
                    $query_result= mysqli_query($conn, $sql);
                    
                    while($row = mysqli_fetch_assoc($query_result)){

                        $output ="Total Units:"." ".$row['sum'];
                    }
                    ?>
                    <?php
                    echo $output;
                    ?>
                 <table class="table">
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
               <tbody >
               
               <?php 

              include 'php/db.php';
            
              $sql ="SELECT studenttable.idno, subjecttable.subCode, subjecttable.subDes, subjecttable.section, subjecttable.units, 
              subjecttable.time, subjecttable.day, subjecttable.room, subjecttable.sem, subjecttable.instructorId 
              FROM coursetable INNER JOIN studenttable INNER JOIN subjecttable ON coursetable.course_id = studenttable.course_id = subjecttable.course_id WHERE idno ='{$_SESSION['idno']}'";
              
              $query= mysqli_query($conn, $sql);
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
                </tr>
            
                <?php    }
        }
          mysqli_close($conn)  ?>           
       
            </tbody>
            </table> 
            <br>
              <p>The Verification of your pre-enrollment form is still ongoing</p>
              <p>Wait for the printing of your pre-enrollment form</p><br>
              <p>Proceed to Logout</p>
                  </div>
              </div>
               
             
            <div class="buttons">
            </div>
          </div>
          <div class="column1">
          <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        
    
        <div class="slide first">
          <img src="images/bsit-course.png" alt="">
        </div>
        <div class="slide">
          <img src="images/bshm-course.png" alt="">
        </div>
        <div class="slide">
          <img src="images/bsa-course.png" alt="">
        </div>
    
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          
        </div>
    
      </div>
     
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
   
      </div>
    
    </div>    
      
               </ul>
               </div>
          
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
  </body>
</html>

