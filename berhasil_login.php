<?php

sessions_start();

if (!isset($_SESSION['username'])){
    header ("Location: index.php?pesan=belum_login"):
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta nama="viewport" content="width=device-width, initial-scale=1.0">
    <meta rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome//4.7.0/font-awesome.min.css">

    <link rel="stylesheet" type="teks/css" href="login-email">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <h1>Selamat Datang<?php echo $_SESSION['username'] ?>."!"."</h1>";

            <div class="input-group">
                <button href="logout.php" class="btn">Logout</button>
                </div>
            </form>
        </div>
</body>
</html>