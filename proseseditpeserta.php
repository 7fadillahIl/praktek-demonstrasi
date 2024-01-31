<?php
include "koneksi.php";

$id = $_POST['id_peserta'];
$kd_skema = $_POST['kd_skema'];
$nama_peserta = $_POST['nama_peserta'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no = $_POST['no_hp'];


$query = "UPDATE peserta set kd_skema ='kd_skema',
nama_peserta = '$nama_peserta',
jenis_kelamin = '$jenis_kelamin',
alamat ='$alamat',
no_hp ='$no'
WHERE id_peserta = '$id'";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='index.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editpeserta.php';

</script>";
}