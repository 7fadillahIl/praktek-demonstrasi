<?php
session_start();

if (!isset($_SESSION['status']) == 'login') {
    header("location:login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Edit Data Peserta</title>

    <link
      rel="shortcut icon"
      href="./assets/compiled/svg/alhikmah.svg"
      type="image/x-icon"
    />

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-dark">
    <form action="proseseditpeserta.php" method="post" class="main-input">
        <div class="container">
            <div class="d-grid">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                       <div class="col-lg-5 d-none d-lg-block" style="background-image: url('./assets/compiled/jpg/alhikmah.jpeg');"></div>
                            <div class="col-lg-7"> 
                                 <div class="p-5">
                        <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Peserta</h1>
                            </div>
                            <?php
            include "koneksi.php";
            $id = $_GET['id_peserta'];
            $sql = "SELECT * FROM peserta WHERE id_peserta = $id";
            $row = $konek->query($sql)->fetch_assoc();
            ?>
            <input type="hidden" name="id_peserta" value="<?= $row['id_peserta'] ?>">
                             <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="KD Skema" name="kd_skema" id="kd_skema" required="" autocomplete="off" value="<?= $row['kd_skema'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Nama Peserta" name="nama_peserta" id="nama_peserta" required="" autocomplete="off" value="<?= $row['nama_peserta'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Jenis Kelamin" name="jenis_kelamin" id="jenis_kelamin" required="" autocomplete="off" value="<?= $row['jenis_kelamin'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Alamat" name="alamat" id="alamat" required="" autocomplete="off" value="<?= $row['alamat'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="No.Hp" name="no_hp" id="no_hp" required="" autocomplete="off" value="<?= $row['no_hp'] ?>">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-style">Edit Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>