<?php
    include 'header.php';

    session_start();
    if(isset($_SESSION["id"]) && isset($_SESSION["password"]))
    {
        $id = $_SESSION["id"];

        $sql = "select * from customer_info where id = '$id' ";

        $mydata = $conn->query($sql);

        $total_ammount = 0;

        if(mysqli_num_rows($mydata) > 0)
        {
            while($record = $mydata->fetch_assoc())
            {
                $name = $record["name"];
                $id = $record["id"];
                $branch = $record["branch"];
                $gender = $record["gender"];
                $account_type = $record["account_type"];
                $phone = $record["phone"];
            }
        }
    

    
                echo '
                    <html>
                    <head>
                        <link href="CSS/style.css" rel="stylesheet" type="text/css">
                        <title>AIUB</title>
                    </head>

                    <body class="bg">
                        <center>';

                include 'header_html_main.html';

                echo '
                    <br><br>
                    <h1>Customer Profile</h1>';

                    echo '<table width="30%" border=1 cellspacing="0px" cellpadding = "15px">';

                    echo "<tr>";
                    echo '<th>Name</th>'; 
                    echo '<th>'.$name.'</th>';
                    echo "</tr>";

                    echo "<tr>";
                    echo '<th>Id</th>'; 
                    echo '<th>'.$id.'</th>';
                    echo "</tr>";

                    echo "<tr>";
                    echo '<th>Branch</th>'; 
                    echo '<th>'.$branch.'</th>';
                    echo "</tr>";

                    echo "<tr>";
                    echo '<th>Gender</th>'; 
                    echo '<th>'.$gender.'</th>';
                    echo "</tr>";

                    echo "<tr>";
                    echo '<th>Account Type</th>'; 
                    echo '<th>'.$account_type.'</th>';
                    echo "</tr>";

                    echo "<tr>";
                    echo '<th>Contact Number</th>'; 
                    echo '<th>'.$phone.'</th>';
                    echo "</tr>";

                echo "</table>";
                echo "</h1>";
                echo '<h2><a href="logout_2.php" class="link">Log Out</a></h2>';
                echo '</center></body></html>';
}

    else
    {
        header("Location: index.php");
    }


?>