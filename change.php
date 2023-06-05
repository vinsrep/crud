<?php
    require 'controller.php';

    
    session_start();

    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    $id = $_GET["id"];
    $student = query("SELECT * FROM students WHERE id = $id") [0];

    if( isset($_POST["submit"]) ){
        
        if(change($_POST) > 0){
            echo "
                <script>
                    alert('Success');
                    document.location.href = 'index.php';
                </script>
                ";
        }else{
            echo "
                <script>
                    alert('Failure');
                    document.location.href = 'index.php';
                </script>
                ";
        }
    };
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Data - Modify</title>
    <style>
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="body">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <legend>Personal Data</legend>
                        <form action="" method="post" class="row g-3">
                        <input type="hidden" name="id" id="" value="<?= $student["id"]?>">
                            <div class="col-md-12">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= $student["nama"]?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Rombel</label>
                                <input type="text" class="form-control" name="rombel" value="<?= $student["rombel"]?>">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Rayon</label>
                                <input type="text" class="form-control" name="rayon" value="<?= $student["rayon"]?>">
                            </div>
                            <div class="col-6">
                                <label class="form-label">NIS</label>
                                <input type="text" class="form-control" name="nis" value="<?= $student["nis"]?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control" name="status" value="<?= $student["status"]?>">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="img" value="<?= $student["img"]?>">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Merk Laptop</label>
                                <input type="text" class="form-control" name="merk_laptop" value="<?= $student["merk_laptop"]?>">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Hobi</label>
                                <input type="text" class="form-control" name="hobi" value="<?= $student["hobi"]?>">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?= $student["alamat"]?>">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Impian</label>
                                <input type="text" class="form-control" name="cita_cita" value="<?= $student["cita_cita"]?>">
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                            </form>
                    </div>    
                </div>
            </div>   
        </div>
    </div>
</div>
</body>
</html>