<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Terima kasih! Kami akan segera menghubungi " . htmlspecialchars($email);
    } else {
        echo "Mohon masukkan email yang valid.";
    }
} else {
    echo "Akses ditolak.";
}
?>