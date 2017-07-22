<html>
<body>
<?php
include_once("koneksi.php");
$table=mysql_query ( "CREATE TABLE tamu (
id INT NOT NULL,
nama VARCHAR(30) NOT NULL,
alamat VARCHAR(50) NOT NULL,
email VARCHAR(30) NOT NULL,
komentar VARCHAR(255) NOT NULL,
PRIMARY KEY(id))");

if ($table)
{echo"berhasil membuat tabel tamu melalui script php";}
else
{echo"gagal membuat tabel";}
?>
</body>
</html>