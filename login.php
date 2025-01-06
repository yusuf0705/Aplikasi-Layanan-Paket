<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center">Login</h3>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="user" class="form-label">Username</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="text" class="form-control" id="pass" name="pass" required>
                    </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
session_start();
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $user = mysqli_real_escape_string($koneksi, $user);
    $pass = mysqli_real_escape_string($koneksi, $pass);
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username= '$user' AND password='$pass'");
    $row = mysqli_fetch_array($data);
    if (mysqli_num_rows($data) > 0) {
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard1.php");
        exit();
    } else {
        $error = "Username atau password salah";
    }
}
?>