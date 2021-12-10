<?php
    
    include 'header.php';

    if($conn->connect_error)
    {
        echo "Error";
    }
    else
    {
      //  echo "Success!!";
    }

    if(isset($_POST["submit"]))
    {
            $name = $_POST["name"];
            $id = $_POST["id"];
            $branch = $_POST["branch"];
            $gender = $_POST["gender"];
            $account_type = $_POST["account_type"];
            $phone = $_POST["phone"];
            $password = $_POST["password"];

            $check_sql = "select * from customer_info where id= '$id' ";
            $mydata_query = $conn->query($check_sql);

            if(mysqli_num_rows($mydata_query) >0)
            {
                echo '
                    <html>
                        <head>
                            <link href="CSS/style.css" rel="stylesheet" type="text/css">
                            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                        </head>
                        <body class="bg">
                            <center>';
                
                include 'header_html_main.html';
                
                echo '
                        <br><br>
                            <h1>Sorry!! Duplicate Entry!! This student id is existed. Please try for another student Id.</h1>
                            </h1><br><br><br><br><br><br><br><br>';
                            include 'footer.html'; 

                            echo '
                        </center>
                    </body>
                </html>';
            }

            else
            {
                $sql = "insert into customer_info values(null,'$name','$id','$branch','$gender','$account_type','$phone')";
                $sql2="insert into login values(null,'$id','$password')";
                $conn->query($sql2);

                if($conn->query($sql) == true)
                {
                    echo '
                        <html>
                            <head>
                                <link href="CSS/style.css" rel="stylesheet" type="text/css">
                                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                            </head>
                            <body class="bg">
                                <center>';

                    include 'header_html_main.html';

                    echo '
                            <br><br>
                            <h1>Registration Successful!!</h1><br><br><br><br><br><br><br><br>';
                            include 'footer.html'; 

                            echo '
                        </center>
                    </body>
                </html>';
                }
            }
    }
    else
    {
        header("Location: index.php");
    }


?>