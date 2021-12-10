<?php

    session_start();

    if(isset($_SESSION["id"]) && isset($_SESSION["password"]))
    {
        header("Location: cust_profile.php");
    }

    else
    {

?>


<!DOCTYPE html>
    <head>
        <title>Customer Login</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="bg">
        <center>
            <?php include 'header_html_main.html'; ?>
                <br><br>
            <h1>Use for Customer</h1>
            <form action="customer_profile.php" method="POST">
                <table width="40%" border=5 cellspacing="15px" cellpadding = "15px">
                            <tr>
                                <td>
                                    Customer Id
                                </td>
                                <td>
                                    <input type="text" name="id" placeholder="Customer Id" required>
                                </td>
                            </tr>
                            <tr>
                                    <td>
                                        Password
                                    </td>
                                    <td>
                                            <input type="password" name="password" placeholder="Password" required>
                                    </td>
                                </tr>
                </table>
                
                 <br>
                <input type="submit" value="Login" name="submit">
            </form>
            <?php include 'footer.html'; ?>
        </center>
    </body>
</html>


<?php

}
 


?>