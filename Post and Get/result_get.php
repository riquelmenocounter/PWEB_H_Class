<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form (GET)</title>
    <link rel="stylesheet" href="result_get.css">
</head>
<body>
    <div class="result-container">
        <h2>Hasil Formulir (GET)</h2>
        <p><b>Nama Depan</b><?php echo $_GET['fname']; ?></p>
        <p><b>Nama Belakang</b><?php echo $_GET['lname']; ?></p>
        <p><b>Email</b><?php echo $_GET['email']; ?></p>
        <p><b>Pesan dan Kesan Belajar di TI</b><?php echo $_GET['pesan']; ?></p>    
    </div>
    <div class="btn-group">
        <a href="index.php" class="btn-back">Kembali (GET)</a>
    </div>
</body>
</html>