<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Guru</title>
</head>
    <body>
    <?php
        session_start();
        require_once "hlp.php";
        login("Guru");
    ?>
    <h1>halaman Guru</h1>
    <hr>
    Username    : <?=$_SESSION['login']['username'] ?>
    Level       : <?=$_SESSION['login']['level'] ?>
    <br>
    <a href="index.php"><button>Halaman Utama</button></a>
    <a href="logout.php"><button>Logout</button></a>
</body>
</html>