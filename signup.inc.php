<?php

if(isset($_POST['submit']))
{
    require 'dbh.inc.php';

    $firstname = $_POST['username'];
    $lastname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_2 = $_POST['password2'];
    if((empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($password_2)))
    {
        header("location: ../register.php?error=emptyfields");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z]*$/", $firstname) && !preg_match("/^[a-zA-Z]*$/", $lastname))
    {
        header("location: ../register.php?error=invaliddetails");
        exit();
    }
    else if(&& !preg_match("/^[a-zA-Z]*$/", $firstname))
    {
        header("location: ../register.php?error=invaliddetails");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z]*$/", $lastname))
    {
        header("location: ../register.php?error=invaliddetails");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z]*$/", $firstname) && !preg_match("/^[a-zA-Z]*$/", $lastname))
    {
        header("location: ../register.php?error=invaliddetails");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z]*$/", $lastname))
    {
        header("location: ../register.php?error=invalidphone");
        exit();
    }
    else if($password !== $password_2)
    {
        header("location: ../signup.php?error=passwordmatch");
        exit();
    }
    else
    {
        $sql = "INSERT INTO health_table(email, Name, username, password) VALUES(?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("location: ../register.php?error=sqlerror");
            exit();
        }
        else
        {
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $hashPassword);
            mysqli_stmt_execute($stmt);
     
            header("location: ../dashboard.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close();
    
}

else
{
    header("location: ../register.php");
}

?>