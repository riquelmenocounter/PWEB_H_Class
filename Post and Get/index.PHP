<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Mahasiswa</title>
    <link rel="stylesheet" href="index.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="form-container">
        <h2>Survey Kepuasan Berkuliah di TI</h2>

        <!-- Form dengan Metode POST -->
        <form action="result_post.php" method="POST" onsubmit="return validateForm(this, 'POST')" novalidate class="post-form">
            <div class="form-group">
                <label for="fname">Nama Depan</label>
                <input type="text" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Nama Belakang</label>
                <input type="text" name="lname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan dan Kesan Belajar di TI</label>
                <textarea name="pesan" required rows="5"></textarea> 
            </div>
            <div class="btn-group"> 
                <button type="submit" class="btn-post">Kirim Survey (POST)</button>
            </div>
        </form>
        
        <!-- Pemisah Visual -->
        <hr class="form-separator">
        
        <!-- Form Metode GET -->
        <form action="result_get.php" method="GET" onsubmit="return validateForm(this, 'GET')" novalidate class="get-form">
            <div class="form-group">
                <label for="fname">Nama Depan</label>
                <input type="text" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Nama Belakang</label>
                <input type="text" name="lname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan dan Kesan Belajar di TI</label>
                <textarea name="pesan" required rows="4"></textarea>
            </div>
            <div class="btn-group"> 
                <button type="submit" class="btn-get">Kirim Survey (GET)</button>
            </div>
        </form>
        
    </div>
</body>
</html>
