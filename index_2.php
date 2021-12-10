<!DOCTYPE html>
    <head>
        <title>
                Banking System Management
        </title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta charset="UTF-8">
    </head>
    <body class="bg">
        <center>
            <?php include 'header_html_main.html'; ?>
                <br><br>
            <h1>
                Customer Registration
            </h1>

            <form method="POST" action="signup.php">
                <table width="60%" border=5 cellspacing="15px" cellpadding = "15px">
                    <tr>
                        <th>Customer Name</th>
                        <td><input type="text" name="name" placeholder="Enter Customer Name" required></td>
                    </tr>
                    <tr>
                        <th>Customer Id</th>
                        <td><input type="text" name="id" placeholder="Enter Customer Id" required></td>
                    </tr>

                    <tr>
                        <th>Branch</th>
                        <td>
                            <select name="branch" required>
                                    <option value="">Choose Any</option>
                                    <option value="Gulshan">Gulshan</option>
                                    <option value="Banani">Banani</option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Uttara">Uttara</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td>
                            <input type="radio" name="gender" value="Male">Male
                            <input type="radio" name="gender" value="Female">Female
                            <input type="radio" name="gender" value="Others">Others
                        </td>
                    </tr>


                    <tr>
                        <th>Account Type</th>
                        <td>
                            <select name="account_type" required>
                                <option value="">Choose Any</option>
                                <option value="Current">Current</option>
                                <option value="Savings">Savings</option>
                                <option value="Fixed Deposite">Fixed Deposite</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Contact Number</th>
                        <td>
                            <input type="numeric" name="phone" placeholder="Enter Your Contact Number">
                        </td>
                    </tr>

                    <tr>
                        <th>Choose a Password</th>
                        <td>
                            <input type="password" name="password" placeholder="Enter a Strong Password">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Submit" name="submit">

            </form>
            <?php include 'footer.html'; ?>
        </center>
    </body>


</html>