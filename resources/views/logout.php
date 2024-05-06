<?php
session_start();

// Hancurkan sesi
session_destroy();

// Alihkan pengguna ke halaman utama atau halaman login
header("Location: /");
exit;
?>
