<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$model = $_POST['model'];
$komentar = $_POST['komentar'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$tanggal|$email|$model|$komentar\n");
fclose($fp);

echo "Terima kasih telah mendaftar<br>";
echo "<a href='index.html'>Home</a><br>";
echo "<a href='lihat.php'>Lihat pelanggan</a><br>"
?>