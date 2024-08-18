<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration Form  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration4.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
   </head>
<body>
  <div class="container">
    <a href = "index.php"><i class="uil uil-step-backward-alt" ></i></a>
    <div class="title">Registration</div>
    <div class="content">
      <form action="php/user.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">STUDENT ID NO.</span>
            <input type="text" name="idno" id="idno" autoc placeholder="Enter your student id no." autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" id="fname" placeholder="Enter your First Name" autocomplete="off"  required>
          </div>
          <div class="input-box">
            <span class="details">Middle Name</span>
            <input type="text" name="mname" id="mname" placeholder="Enter your Middle Name " autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your Password" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" id="email" placeholder="Enter your Email" autocomplete="off" required>
          </div>
        </div>
        <div class="sex-details">
          <input type="radio" name="sex" id="dot-1" value="Male" >
          <input type="radio" name="sex" id="dot-2" value="Female">
          <span class="sex-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="sex">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="sex">Female</span>
          </label>
            </label>
          </div>
        </div>
     
        <div class="button">
          <input type="submit" name="usersubmit" id="send" onclick="message()" value="Register">
        <div class = "message">
          <div class = "success" id="success">Registered Successfully</div>
          <div class = "danger" id="danger">Fields Can't be Empty</div>
         </div>
        </div>
      </form>
    </div>
  </div>
  <script src ="js/registration.js"></script>

        
</body>
</html>