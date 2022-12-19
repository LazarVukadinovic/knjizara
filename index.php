<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pocetna stranica</title>
</head>
<body>
    <?php include "./components/navbar.php";?>
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center hero-header">Knjizara</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium accusamus quisquam adipisci.</p>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-success">Kupi knjige</a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="sekcija1">
                    <h2>Najpopularnje knjige</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas eveniet incidunt error eum, sed exercitationem aliquid, laboriosam enim odio ad consequuntur consequatur. Incidunt nemo quibusdam, cum possimus soluta distinctio ratione.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas eveniet incidunt error eum, sed exercitationem aliquid, laboriosam enim odio ad consequuntur consequatur. Incidunt nemo quibusdam, cum possimus soluta distinctio ratione.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active slider-image" data-bs-interval="10000">
                            <img src="./images/server/knjige/hari poter i relikvije smrti.jpg" class="d-block w-100" >
                            </div>
                            <div class="carousel-item slider-image" data-bs-interval="2000">
                            <img src="./images/server/knjige/zive slike.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item slider-image">
                            <img src="./images/server/knjige/kljuc besmrtnosti.jpg" class="d-block w-100" >
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>