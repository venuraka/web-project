<?php
session_start();
include('../config/dbcong.php');
include('myfunctions.php');
if(isset($_POST['register_btn']))
{
    $name = mysqli_real_escape_string($conn,$_POST['Name']);
    $phone = mysqli_real_escape_string($conn,$_POST['Phone']);
    $email = mysqli_real_escape_string($conn,$_POST['Email']);
    $password = mysqli_real_escape_string($conn,$_POST['Password']);
    $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
        //check email already exist or not
        $check_email_query = "SELECT Email FROM users WHERE Email = '$email'";
        $check_email_query_run = mysqli_query($conn,$check_email_query);    
        if (mysqli_num_rows($check_email_query_run) > 0)
        {
            $_SESSION['message'] = "Email already exist";
            header('Location: ../register.php');
        }
        else
        {
                        if($password == $cpassword)
                    {
                        //inser user data into database
                        $insert_query = "INSERT INTO users (name,phone,email,password) VALUES ('$name','$phone','$email','$password')";
                        $insert_query_run = mysqli_query($conn,$insert_query);
                        if ($insert_query_run)
                        {
                            $_SESSION['message']= "Registerd Successfully";
                            header('Location: ../login.php');
                        }
                        else
                        {
                            $_SESSION['message']= "Something went wrong";
                            header('Location: ../register.php');
                        }
                    }
                    else
                    {
                        $_SESSION['message']="Password not matched";
                        header('Location: ../register.php');
                    }
        }
}
else if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($conn,$_POST['Email']);
    $password = mysqli_real_escape_string($conn,$_POST['Password']);
    $login_query = "SELECT * FROM users WHERE Email = '$email' AND password = '$password'";
    $login_query_run = mysqli_query($conn,$login_query);
    if (mysqli_num_rows($login_query_run) > 0)
    {
                $_SESSION['auth']=true;
                $userdata = mysqli_fetch_array($login_query_run);
                $username= $userdata['Name'];
                $useremail= $userdata['role_as'];
                $role_as = $userdata['role_as'];

                $_SESSION['auth_user']=[
                    'name' =>  $username,
                    'email' => $useremail
                ];
                $_SESSION['role_as'] = $role_as; 
                if($role_as ==1)
                {
                    redirect ("../admin/index.php","Welcome To Dashboard");
                }
                else
                {
                    redirect("../index.php", "Logged In Successfully");
                }
    }
    else
    {
        redirect ("/login-php", "Invalid Credentials");
    }
}
?>