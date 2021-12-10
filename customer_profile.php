<?php
    include 'header.php';


    if(isset($_POST["submit"]))
    {
        $id = $_POST["id"];
        $password = $_POST["password"];

        $sql = "select * from login where id = '$id' and password = '$password' ";

        $mydata = $conn->query($sql);

        if(mysqli_num_rows($mydata)>0)
        {
            session_start();
            $_SESSION["id"] = $id;
            $_SESSION["password"] = $password;
            header("Location: cust_profile.php");
        }

        else
        {
           // header("Location: student_login.php");
           echo 'error';
        } 
    }

    else
    {
        if(isset($_SESSION["id"]) and isset($_SESSION["password"]))
        {
            header("Location: cust_profile.php");
        }
        else
        {
            header("Location: customer_login.php");
        }
    }

    

    

?>