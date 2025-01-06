<?php
session_start();

// menghapus semua session
session_unset(); // Menghapus varialbel session
session_destroy(); // Menghancurkan session

echo "Session telah di hapus. <a href='set_session.php'>Set Ulang Session</a>";
?>