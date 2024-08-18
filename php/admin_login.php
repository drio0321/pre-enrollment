<?php 

session_start(); 

include "db.php";

if (isset($_POST['name']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;

    }

    $name = validate($_POST['name']);

    $password = validate($_POST['password']);

    if (empty($name)) {

        header("Location: ../login_admin/admin.php?error=ID number is required");

        exit();

    }else if(empty($password)){

        header("Location: ..../login_admin/admin.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admin_user WHERE name='$name' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['name'] === $name && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['name'] = $row['name'];
                $_SESSION['password'] = $row['password'];

                header("Location: ../include/dashboard.php");
                exit();

            }else{

                header("Location: ../login_admin/admin.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: ../login_admin/admin.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: ..../login_admin/admin.php");

    exit();

}