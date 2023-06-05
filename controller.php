<?php
    $conn = mysqli_connect("localhost","root","","study");
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $container = []; 
        while($th = mysqli_fetch_assoc($result)){
            $container[]=$th;
        }
        return $container;
    };

    function search($keyword){
        $query = "SELECT * FROM students
            WHERE
                nama LIKE '%$keyword%' OR
                nis LIKE '%$keyword%' OR
                rombel LIKE '%$keyword%' OR
                rayon LIKE '%$keyword%' OR
                status LIKE '%$keyword%'
            ";
            return query($query);
    }

    function add($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk_laptop = htmlspecialchars($data["merk_laptop"]);
        $cita_cita = htmlspecialchars($data["cita_cita"]);
        $img = htmlspecialchars($data["img"]);
        $query = "INSERT INTO students
        VALUES
        ('','$nama','$nis',
        '$rombel','$rayon',
        '$status','$hobi',
        '$alamat','$merk_laptop'
        ,'$cita_cita', '$img') ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    };

    function delete($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function change($data){
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk_laptop = htmlspecialchars($data["merk_laptop"]);
        $cita_cita = htmlspecialchars($data["cita_cita"]);
        $img = htmlspecialchars($data["img"]);

        $query = "UPDATE students SET
            nama = '$nama',
            nis = '$nis',
            rombel = '$rombel',
            rayon = '$rayon',
            status = '$status',
            hobi = '$hobi',
            alamat = '$alamat',
            merk_laptop = '$merk_laptop',
            cita_cita = '$cita_cita',
            img = '$img'
            WHERE id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function register($data){
        global $conn;
        $username = strtolower(stripslashes($data['username']));
        $password = $data['password'];
        $conf_password = $data['conf_password'];
        // password confirmation
        if($password !== $conf_password){
            echo "
            <script>
                alert('Password invalid.');
                document.location.href = 'register.php';
            </script>
            ";
            return false;
        }

        // acak
        $password = password_hash($password, PASSWORD_DEFAULT);

        // input username and pass to db
        $query = "INSERT INTO users
        VALUES
            ('','$username','$password')

        ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>