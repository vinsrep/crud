<?php

require('controller.php');
session_start();

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Log in</title>
    <style>
        a{
            text-decoration: none;
        }
        .card-img{
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            height: 100%;
        }
    </style>
</head>
<body>
<body>
<div class="container">
    <div class="body">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="d-flex justify-content-center">
                <div class="card mb-3" style="max-width: 40rem;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="cover3.png" class="card-img rounded-right" alt="Image Cover">
                        </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <br>
                                    <h2><strong>Log in</strong></h2>
                                    <form action="" method="post">
                                    <p class="mb-5 text-muted">Please fill in your credentials!</p>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Vincent">
                                            <label for="floatingInput">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                        <div class="input-group">
                                            <div class="mb-3 form-check col-10">
                                                <input type="checkbox"  name="remember" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                            </div>
                                            <div class="mb-5">
                                                <label class="form-check-label" for="exampleCheck1"><a class="link-primary" href="forgot.php">Forgot?</a></label>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 mb-3">
                                            <button type="submit" name="login" class="btn btn-primary" href="index.php">Login</button>
                                        </div>
                                    </form>
                                    <p class="text-muted" > Not registered yet? <a href="register.php">Create an account.</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>