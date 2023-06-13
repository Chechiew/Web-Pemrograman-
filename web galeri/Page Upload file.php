<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak maka redirect ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// Proses upload file jika form di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tentukan direktori penyimpanan file
    $uploadDir = 'uploads/';

    // Cek apakah direktori penyimpanan file tersedia atau buat jika belum ada
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Ambil informasi file yang di-upload
    $fileName = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    // Cek apakah tidak ada error dalam proses upload
    if ($fileError === UPLOAD_ERR_OK) {
        // Pindahkan file yang di-upload ke direktori penyimpanan
        move_uploaded_file($fileTmp, $uploadDir . $fileName);

        // Tampilkan pesan sukses
        $message = 'File berhasil di-upload.';
    } else {
        // Tampilkan pesan error
        $error = 'Terjadi kesalahan saat mengupload file.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <?php if (isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="file">Pilih berkas atau foto:</label>
        <input type="file" id="file" name="file" required><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>