<?php
require '../../config/koneksi.php'; // Panggil koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Ambil ID jadwal yang akan dihapus

    // Query untuk menghapus jadwal berdasarkan ID
    $query = "DELETE FROM jadwal_periksa WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Berhasil dihapus, redirect kembali ke halaman jadwal periksa
        echo "<script>
            alert('Jadwal berhasil dihapus.');
            window.location.href='../../jadwalPeriksa.php';
        </script>";
    } else {
        // Gagal dihapus, tampilkan pesan error
        echo "<script>
            alert('Gagal menghapus jadwal.');
            window.location.href='../../jadwalPeriksa.php';
        </script>";
    }
}
?>
