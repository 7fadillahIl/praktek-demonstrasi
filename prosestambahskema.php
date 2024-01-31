<?php
include "koneksi.php";

$kd_skema = $_POST['kd_skema'];
$nama_skema = $_POST['nm_skema'];
$jenis = $_POST['jenis'];
$jml_unit = $_POST['jml_unit'];

$query = "INSERT into skema (kd_skema, nm_skema, jenis, jml_unit) VALUES 
            ('$kd_skema','$nama_skema','$jenis','$jml_unit')";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='skema.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahskema.php';

</script>";
}

