<?php

    require 'controller.php';
    if( isset($_POST['register'])){
        if(register($_POST) > 0){
            echo "
                <script>
                    alert('Success');
                    document.location.href = 'index.php';
                </script>
                ";
        }else{
            mysqli_error($conn);
        }
    };

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Register</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<body>
<div class="container">
    <div class="body">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <br>
                        <h2><strong>Sign up</strong></h2>
                        <p class="mb-5 text-muted">Please fill this form to create an account!</p>
                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Vincent">
                                <label for="floatingInput">Your name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="conf_password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Confirm password</label>
                            </div>
                            <div class="input-group">
                                <div class="mb-3 form-check col-10">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <div class="mb-5">
                                    <label class="form-check-label" for="exampleCheck1"><a class="link-primary" href="forgot.php">Forgot?</a></label>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" name="register" class="btn btn-primary" href="index.php">Register</button>
                            </div>
                        </form>
                        <p class="text-muted" > Already have an account? <a href="login.php">Login here.</a> </p>
                    </div>    
                </div>
            </div>   
        </div>
    </div>
</div>




<!-- <ul>
    <form action="" method="post">
        <li>
            <label for="">username</label>
            <input type="text" name="username">
        </li>
        <li>
            <label for="">password</label>
            <input type="password" name="password">
        <li>
            <label for="">konfirmasi password</label>
            <input type="password" name="conf_password">
        </li>
        <button type="submit" name="register">Submit</button>
    </form>
</ul> -->


</body>
</html>r