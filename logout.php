<?php
session_start();
session_destroy();
echo '<div style="background-color: #ffff99; color: #000000; padding: 15px; text-align: center; border: 1px solid #cccc00;">';
echo 'Anda telah berhasil logout!';
echo '</div>';
echo '<script>';
echo 'setTimeout(function() { window.location = "index.php"; }, 1000);';
echo '</script>';
?>