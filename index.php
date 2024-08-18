<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="container">
        <a href = "selectuser.php"><i class="uil uil-step-backward-alt" ></i></a>
        <div class="login">
            <form action="php/login.php" method="post">
                <h1>Login</h1>
                <hr>
                <label>Student ID No.</label>
                <input name="idno" class="input" type="text" id="idno" placeholder="Write your student id no." autocomplete="off" required> 
                <label>Password</label>
                <input name="password" type="password" class="input" id="password" placeholder="Write your Password"autocomplete="off" required >
                <div class="showpassword_box">
                <input type="checkbox" class="checkbox" id="checkbox" placeholder="Write your Password">
                <label>Show Password</label>
                </div>
                <button>Submit</button>
                <p>
                <label>Do you have an account?</label>
                <a href="registration.php">Register</a>
                </p>
            <closeform></closeform></form>
        </div>
        <div class="pic">
            <img src="images/logo.jpg">
        </div>
    </div>
    <script>
        let password = document.getElementById("password");
        let checkbox = document.getElementById("checkbox");

            checkbox.onclick = function(){
                if(checkbox.checked){
                    password.type= 'text';
                }
                else{
                    password.type='password';
                }
            }
    </script>
     <script type = "text/javascript"> 

        window.history.forward();
        
    </script>
</body>
</html>
