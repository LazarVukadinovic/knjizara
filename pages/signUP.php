<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/sign-log.css">
    </head>
    <body>
        <?php include "../components/navbar.php";?>
        <div class="container mt-3">
            <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">

                <form  method="POST" action="../handlers/signUpHandler.php" class="card-body cardbody-color p-lg-5">

                    <div class="text-center">
                        <h3>NAPRAVITE NALOG</h3>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Korisnicko ime">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Lozinka">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="rpassword" placeholder="Ponovite lozinku">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="ime" placeholder="Ime">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="prezime" placeholder="Prezime">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-colorc px-5 mb-4 w-100">SignUp</button>
                    </div>
                    <div id="emailHelp" class="form-text text-center text-dark">
                        Vec imate nalog? 
                        <a href="./logIN.php" class="text-dark fw-bold"> Prijavite se</a>
                    </div>
                </form>
                </div>

            </div>
            </div>
        </div>
        <?php 
            if(!empty($_SESSION["user"]) && !empty($_SESSION["userPassword"]) && !empty($rpassword) && ($_SESSION["userPassword"] == $rpassword) && !empty($ime) && !empty($prezime))
            {
                $user = $_SESSION["user"];
                $password = $_SESSION["userPassword"];
                $sqlCheck = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = '" . $user . "'";
                $resultCheck = $conn->query($sqlCheck);
                if($resultCheck->num_rows > 0)
                {
                    $_SESSION["loggedIn"] = 0;
                    $_SESSION["user"] = "";
                    $_SESSION["userPassword"] = "";
                    echo "<script>alert('Nalog vec postoji');</script>";
                }
                else
                {
                    echo "ulaz";
                    $sqlInsert = 'INSERT INTO korisnik (korisnicko_ime, lozinka, ime, prezime, slika)
                    VALUES("' . $user . '", "' . password_hash($password, PASSWORD_BCRYPT) . '", "' . $ime . '", "' . $prezime .'", "avatar.png" )';
                    $conn->query($sqlInsert);
                    $_SESSION["loggedIn"] = 1;
                    header('Location: http://nemanaziv.com/index.php');
                }
            }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>