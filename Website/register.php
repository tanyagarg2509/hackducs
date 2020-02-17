<?php

include 'config.php';

$fname=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["phone_no"];
$pass=$_POST["pass"];
$cpass=$_POST["re_pass"];

if (empty($fname) || empty($email) || empty($mobile) || empty($pass) || empty($cpass)) {
    header("Location: index.php?signup=empty");
    exit();
}
else
{
    //check if inputs characters are valid names
    if (!preg_match("/^[a-zA-Z]*$/", $fname) ) {
        header("Location: index.php?signup=invalid");
        exit();
    }
    else
    {
        //check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: index.php?signup=email");
            exit();
        }
        else
        {

            $sql = "select * from users where email ='$email';";
            $result=mysqli_query($conn,$sql);
            $resultCheck=mysqli_num_rows($result);

            if ($resultCheck>0) {
                header("Location: index.php?signup=usertaken");
                exit();
            }
            else
            {
                $sql = "Insert into users (name, email, password, phoneno) values ('$fname', '$email', '$pass', '$mobile');";
                $result=mysqli_query($conn, $sql);
                session_start();
                $_SESSION['name'] = $fname;
                $_SESSION['email'] = $email;
                $_SESSION['mobile'] = $mobile;
                header("Location: index.php");  
                exit();
            }
                
               
        }
    }
}


?>

