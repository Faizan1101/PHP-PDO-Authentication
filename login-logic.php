<?php
session_start();
require("config.php");

if(isset($_POST["login"]))
{
    // first the the button
    // take the data and do the query 
    // excecute the query
    // fetch the data
    // check for the row count
    // and use the password_verify function

    if(isset($_POST["login"]))
    {
        if($_POST['email'] == "" OR $_POST['password'] == "")
        {
            echo "some inputs are empty";
        }
        else
        {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $login = $conn->query("SELECT * FROM `auth_register` WHERE `email` = '$email'");
            $login->execute();
            
            $data = $login->fetch(PDO::FETCH_ASSOC);

            if($login->rowCount() > 0)
            {
                if(password_verify($password, $data["password"]))
                {
                    echo "<script>alert('Logged In'); window.location='index.php';</script>";
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['email'] = $data['email'];
                }
                else
                {
                    echo "<script>alert('password does not match'); window.location='login.php';</script>";
                }
            }
            else
            {
                echo "<script>alert('email does not match'); window.location='login.php';</script>";
            }

        }

    }

}

?>