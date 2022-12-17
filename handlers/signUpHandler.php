<?php 
    include "../database/connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"]))
        {
            //$userErr = "Morate uneti username";
        }
        else
        {
            $_SESSION["user"] = test_input($_POST["username"]);
            //$userErr = "";
        }

        if (empty($_POST["password"]))
        {
            //$userPasswordErr = "Morate uneti password";
        }
        else
        {
            $userPassword = test_input($_POST["password"]);
            //$userPasswordErr = "";
        }
    }


?>