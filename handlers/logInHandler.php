<?php
    session_start();
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

    /*
        *citanje iz baze
    */
    if(!empty($_SESSION["user"]) && !empty($userPassword))
    {
        $sql = "SELECT korisnicko_ime, lozinka FROM korisnik WHERE korisnicko_ime = '" . $_SESSION["user"] . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();


        if ($result->num_rows > 0) {
            if($row["korisnicko_ime"] == $_SESSION["user"] && password_verify($userPassword, $row["lozinka"]))
            {
                header('Location: http://nemanaziv.com');
            }
        }
        else
        {
            header("location: ../pages/logIN.php");
        }
        
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    header('Location: http://nemanaziv.com/pages/logIN.php');
?>