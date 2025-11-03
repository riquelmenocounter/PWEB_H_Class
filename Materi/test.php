<?php
$mahasiswa = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mahasiswa = ["nama" => "Andi", "umur" => 20, "jurusan" => "Informatika"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes form</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" value="Ambil Data">
    </form>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <?php if (empty($mahasiswa)) {
                echo "<td colspan='3'>Tidak ada data</td>";
            } else { ?>
                <td><?php echo $mahasiswa["nama"]; ?></td>
                <td><?php echo $mahasiswa["umur"]; ?></td>
                <td><?php echo $mahasiswa["jurusan"]; ?></td>
            <?php } ?>
        </tr>
    </table>

</body>

</html>