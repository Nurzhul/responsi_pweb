<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Tanggal kedatangan: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Email: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Model: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Komentar: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='index.html'> Home </a>";

?>