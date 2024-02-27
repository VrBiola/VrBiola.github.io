<?php
// Membuat array dengan data mahasiswa
$mahasiswa = array(
    array("Nama" => "Brahim Diaz", "NPM" => "12345678", "Tempat Lahir" => "Malaga", "Tanggal Lahir" => "03-08-1999", "Jurusan" => "Informatika"),
    );

// Menampilkan data mahasiswa
echo "<h2>Data Mahasiswa</h2>";
echo "<hr>";

//echo "<table border='1'>";
echo "<ul>";
//echo "<tr><th>Nama</th><th>NIM</th><th>Jurusan</th></tr>";
foreach ($mahasiswa as $data) {
    //echo "<tr>";
    echo "<li>" . $data['Nama'] . "</li>";
    echo "<li>" . $data['NPM'] . "</li>";
    echo "<li>" . $data['Tempat Lahir'] . "</li>";
    echo "<li>" . $data['Tanggal Lahir'] . "</li>";
    echo "<li>" . $data['Jurusan'] . "</li>";
    //echo "</tr>";
}
echo "</ul>";
//echo "</table>";
?>
