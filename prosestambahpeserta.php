<?php
include "koneksi.php";

$kd_skema = $_POST['kd_skema'];
$nama_peserta = $_POST['nama_peserta'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no = $_POST['no_hp'];



$query = "INSERT into peserta (kd_skema, nama_peserta, jenis_kelamin, alamat, no_hp) VALUES 
            ('$kd_skema','$nama_peserta','$jenis_kelamin','$alamat', '$no')";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='index.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahpeserta.php';

</script>";
}

