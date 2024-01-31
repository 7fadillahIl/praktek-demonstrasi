<?php
include "koneksi.php";

$id = $_GET['id_skema'];


$query = "DELETE FROM skema WHERE id_skema = $id";
$eksekusi = mysqli_query($konek, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='skema.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='skema.php';

</script>";
}
