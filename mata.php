<?php
// Nilai minus mata (bisa diganti sesuai kebutuhan)
$minus = 1.5; // Ganti nilai minus di sini

// Cek apakah nilai minus valid (tidak negatif)
if ($minus >= 0) {
    
    // Menentukan harga berdasarkan tingkat minus mata
    if ($minus <= 1) {
        $harga = 500000; // Harga untuk minus 0 - 1
    }
    elseif ($minus <= 1.5){ 
        $harga = 750000; // Harga untuk minus >1 - 1.5
    }
    elseif ($minus <= 2) {
        $harga = 1000000; // Harga untuk minus >1.5 - 2
    } 

    // Menampilkan hasil ke layar
    echo "Minus mata: $minus<br>";
    echo "Harga lensa: Rp" . number_format($harga, 0, ',', '.');
    
} else {
    // Jika minus negatif, tampilkan pesan error
    echo "Minus tidak boleh negatif.";
}
?>
