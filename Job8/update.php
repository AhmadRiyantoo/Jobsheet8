<html>
<body>
<?php
include_once("koneksi.php");
$update=mysql_query("update tamu set nama='STEKOM SEMARANG' where id =1");

if ($update)
{echo"berhasil mengupdate data pada tabel tamu melalui script php";}
else
{echo"gagal mengupdate data";}
?>
</body>
</html>