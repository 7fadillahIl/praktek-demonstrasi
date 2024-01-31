<?php
include "koneksi.php";

$id = $_GET['id_peserta'];


$query = "DELETE FROM peserta WHERE id_peserta = $id";
$eksekusi = mysqli_query($konek, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='index.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='index.php';

</script>";
}
