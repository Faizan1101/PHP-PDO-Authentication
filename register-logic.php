<?php

require("config.php");


if(isset($_POST["register"]))
{
    if($_POST['name'] == '' OR $_POST['email'] == '' OR $_POST['phone'] == '' OR $_POST['password'] == '')
    {
        echo "Some inputs are empty";
    }
    else
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $insert = $conn->prepare("INSERT INTO `auth_register` (`name`,`email`,`phone`,`password`) VALUES (:name, :email, :phone, :password)");
        $insert->execute([
            ":name" => $name,
            ":email" => $email,
            ":phone" => $phone,
            ":password" => password_hash("$password", PASSWORD_DEFAULT),
        ]);

        header("location: login.php");
    }
}

?>