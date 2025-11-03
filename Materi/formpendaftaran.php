<?php

$nama = $_POST['username'];
$depan= substr($nama,0,5);
$umur = $_POST['umur'];
$hobi = isset($_POST["Hobi"]) ? $_POST["Hobi"] : [];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

echo "Selamat datang, " . htmlspecialchars($nama) . "! Anda telah berhasil mendaftar.". "<br>";
echo "Bagian depan nama Anda: " . htmlspecialchars($depan) . "<br>";
echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Umur: " . htmlspecialchars($umur) . "<br>";
echo "Hobi: ". (!empty($hobi) ? implode(', ', array_map('htmlspecialchars', $hobi)) : "Tidak Ada") . "<br>";
echo "Alamat: " . htmlspecialchars($alamat) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";

if($umur <= 18){
    echo "Anda masih di bawah umur.";
}
elseif ($umur >= 35){
    echo "kamu terlalu tua";
}
else {
    echo "Anda sudah dewasa.";
}
?>