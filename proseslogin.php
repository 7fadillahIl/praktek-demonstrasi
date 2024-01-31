<?php
include "koneksi.php";

session_start();
$username = $_POST['username'];
$password = ($_POST['password']);

$query = "SELECT * FROM tb_login where username='$username' AND password='$password' LIMIT 1";
$eksekusi = mysqli_query($konek , $query);

$ada = mysqli_fetch_array($eksekusi);

if ($ada > 0) {
    $_SESSION['username'] = $ada['username'];
    $_SESSION['status'] = "login";
    echo "<script> 
            alert('Anda akan diarahkan ke halaman utama!');
            window.location='index.php';
        </script>";
} else {
    echo "<script> 
        alert('Username dan Password tidak ditemukan!');
            window.location='login.php';
    </script>";
}

?>

