<?php
$loggedIn = true; // Ubah ke false untuk tes

// Gunakan ternary untuk menentukan status
$status = ($loggedIn) ? "Sudah login" : "Belum login";

// Tampilkan hasil
echo "Status pengguna: $status";
?>
