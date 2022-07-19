<?php
session_start();
include "koneksi.php";

if (isset ($_POST['username']) && isset($_POST['pass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    $unidn = validate($_POST ['username']);
    $upassword = validate($_POST ['pass']);

    if(empty($unidn)){
       header ("Location: index.php?error=Username harus di isi!");
         exit();
    }else if(empty($upassword)){
        header ("Location: index.php?error=Password harus di isi!");
        exit();
    }else{
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db_handle, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row ['username']===$username && $row['password']===$password){
                $_SESSION['username']= $row['username'];
                header ("Location: home.php");
            exit();
            }else{
                header ("Location: index.php?error=Username atau password anda salah!");
            exit();
        }
        }else{
            header ("Location: index.php?error=Password atau Password anda salah!");
        exit();
        }
    }

}else{
    header ("Location: home.php");
    exit();
}