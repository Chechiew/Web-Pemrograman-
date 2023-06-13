<?php
session_start();

// Cek apakah pengguna sudah login, jika ya maka redirect ke halaman project
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: galeri.php');
    exit;
}

// Cek apakah form login telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = 'admin111';
    $password = 'password123';

    // Cek apakah input username dan password sesuai
    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        // Set session dan redirect ke halaman project
        $_SESSION['loggedin'] = true;
        header('Location: galeri.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
    <p>username : admin111 <br> password : password123</p>
</body>
</html>