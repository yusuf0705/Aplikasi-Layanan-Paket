<?php
session_start();

// Memeriksa apakah session 'nama' tersedia
if (isset($_SESSION['nama'])) {
    echo "Nama: " . $_SESSION['nama'] . "<br>";
    echo "Role: " . $_SESSION['role'] . "<br>";
    echo "<a href='destroy_session.php'>Hapus Session</a>";
} else {
    echo "Session belum di set. <a href='set_session.php'>Set Session</a>";
}
?>