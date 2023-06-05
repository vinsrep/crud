<?php
    require 'controller.php';
    
    session_start();

    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    $id = $_GET["id"];
    $student = query("SELECT * FROM students WHERE id = $id");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,` initial-scale=1.0">
    <title>Biografi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        button a{
            text-decoration: none;
        }
            li{
                list-style: none;
        }
        img{
            width: 100px;
            height: 17rem;
        }
        button{
            width: 100%;
            border-radius: 0%;
        }
    </style>
</head>
<body>
<?php foreach($student as $st) { ?>
<div class="position-absolute top-50 start-50 translate-middle">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 17rem;">
                <img src="<?= $st["img"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <h5 class="card-title">
                            Halo, nama saya <?= $st["nama"] ?>.
                        </h5>
                        <p class="card-text">
                            Rombel saya adalah <?= $st["rombel"] ?> dengan rayon <?= $st["rayon"]?>. Saya lagi <?= $st["status"] ?> sekarang.
                        </p>                        
                        <p class="card-text">
                            Hobi saya <?= $st["hobi"] ?>, saya tinggal di <?= $st["alamat"] ?>. Saya punya laptop merk <?=$st["merk_laptop"]?>,
                        </p> 
                        <p class="card-text">
                            dan saya ingin menjadi <?= $st["cita_cita"] ?>.
                        </p> 
<?php } ?>
                    </div>
                    <button class="btn btn-primary rounded-top-0"><a class="link-light" href="index.php">Dashboard</a></button>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
