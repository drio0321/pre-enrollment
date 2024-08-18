<?php 

session_start(); 

include "db.php";

if (isset($_POST['idno']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;

    }

    $idno = validate($_POST['idno']);

    $password = validate($_POST['password']);

    if (empty($idno)) {

        header("Location: ../enrollnow.php?error=ID number is required");

        exit();

    }else if(empty($password)){

        header("Location: ../enrollnow.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM userinfo WHERE idno='$idno' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['idno'] === $idno && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['idno'] = $row['idno'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['sex'] = $row['sex'];
                $_SESSION['userType	'] = $row['userType	'];
                header("Location: ../insertsubject.php");
                exit();

            }else{

                header("Location: ../enrollnow.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: ../enrollnow.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: ../enrollnow.php");

    exit();

}