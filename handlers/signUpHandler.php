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
        if(empty($_POST["rpassword"]))
        {
            //$userRPasswordErr = "Morate uneti password";
        }
        else
        {
            $userRPassword = test_input($_POST["rpassword"]);
        }
        if(empty($_POST["ime"]))
        {
            //$imeErr = "Morate uneti ime";
        }
        else
        {
            $ime = test_input($_POST["ime"]);
        }
        if(empty($_POST["prezime"]))
        {
            //$prezimeErr = "Morate uneti prezime";
        }
        else
        {
            $prezime = test_input($_POST["prezime"]);
        }
        
    }

    /*
        *upis u bazu
    */
    if(!empty($_SESSION["user"]) && !empty($userPassword) && !empty($userRPassword) && ($userPassword == $userRPassword) && !empty($ime) && !empty($prezime))
    {
        $user = $_SESSION["user"];
        $sqlCheck = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = '" . $user . "'";
        $resultCheck = $conn->query($sqlCheck);
        if($resultCheck->num_rows > 0)
        {
            $_SESSION["user"] = "";
            $userPassword = "";
        }
        else
        {
            $sqlInsert = 'INSERT INTO korisnik (korisnicko_ime, lozinka, ime, prezime, tip_naloga)
            VALUES("' . $user . '", "' . password_hash($userPassword, PASSWORD_BCRYPT) . '", "' . $ime . '", "' . $prezime .'", 0)';
            $conn->query($sqlInsert);
            header('Location: http://nemanaziv.com');
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    header('Location: http://nemanaziv.com/pages/signUP.php');
?>