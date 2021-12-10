<?php

    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    echo "Log Out";
    session_destroy();
    header("Location: index.php");

?>