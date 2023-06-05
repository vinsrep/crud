<?php

    
    session_start();

    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    require 'controller.php';
    $student = query("SELECT * FROM students");
    // Search
    if (isset($_POST["submit"])){
        $student = search($_POST["keyword"]);
    };
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,` initial-scale=1.0">
    <title>Data - Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        button a{
            text-decoration: none;
        }
        img{
            width: 100px;
            height: 100px;
        }
        .vitn{
            margin: 3rem;
        }
    </style>
</head>
<body>

<div class="vitn">
    <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle-x">
            <figure class="text-center">
            <blockquote class="blockquote">
                <p>Saya suka ngulik data siswa.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Johnatan Kevin Laurencius
            </figcaption>
            </figure>
        </div>
    </div>
</div>

<div class="position-absolute top-50 start-50 translate-middle">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 80rem">
                <div class="card-body">
                <!-- Table -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th >ID</th>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>Rombel</th> 
                                <th>Rayon</th>
                                <th>Status</th>
                                <th>Hobi</th>
                                <th>Alamat</th>
                                <th>Laptop</th>
                                <th>Cita-cita</th>
                                <th>Ubah</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($student as $st) { ?>
                            <tr>
                                <td><?= $st["id"]?></td>
                                <td><a href="selengkapnya.php?id=<?= $st["id"] ?>"><?= $st["nama"]?></a></td>
                                <td><?= $st["nis"] ?></td>
                                <td><?= $st["rombel"] ?></td>
                                <td><?= $st["rayon"] ?></td>
                                <td><?= $st["status"] ?></td>
                                <td><?= $st["hobi"] ?></td>
                                <td><?= $st["alamat"] ?></td>
                                <td><?= $st["merk_laptop"] ?></td>
                                <td><?= $st["cita_cita"] ?></td>
                                <td><button type="button" class="btn btn-success"><a rel="stylesheet" href="change.php?id=<?= $st["id"] ?>" class="link-light">Ubah</button></td>
                                <td><button type="button" class="btn btn-danger"><a rel="stylesheet" href="delete.php?id=<?= $st["id"] ?>" class="link-light">Hapus</button></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    <!-- Add -->
                    </table>
                    <!-- Searchbar -->
                    <form action="" method="post">
                    <div class="input-group">   
                        <input type="text" name="keyword" class="form-control" id="" placeholder="Type to search...">
                        <button class="btn btn-primary" type="submit" name="submit">Search</button>
                        <button class="btn btn-primary"><a class="link-light" href="add.php">Input Entry</a></button>
                        <button class="btn btn-primary"><a class="link-light" href="register.php">Re-register</a></button>
                        <button class="btn btn-primary"><a class="link-light" href="login.php">Re-login</a></button>
                    </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>

</body>
</html>