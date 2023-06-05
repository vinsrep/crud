<?php
    require 'controller.php';
    
    
    session_start();

    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    $id = $_GET["id"];

        if(delete($id) > 0){
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
?>