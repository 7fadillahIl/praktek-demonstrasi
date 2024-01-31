<?php
include "koneksi.php";

$id = $_POST['id_skema'];
$kd_skema = $_POST['kd_skema'];
$nama_skema = $_POST['nm_skema'];
$jenis = $_POST['jenis'];
$jml_unit = $_POST['jml_unit'];

$query = "UPDATE skema SET
kd_skema = '$kd_skema',
nm_skema = '$nama_skema',
jenis = '$jenis',
jml_unit = '$jml_unit'
WHERE id_skema = '$id'";

$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='skema.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editskema.php';

</script>";
}