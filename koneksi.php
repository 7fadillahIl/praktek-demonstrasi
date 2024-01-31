<?php
$konek = mysqli_connect("localhost", "root", "", "sertifikasi");

// Check connection
if (!$konek) {
	echo "koneksi error";
}
