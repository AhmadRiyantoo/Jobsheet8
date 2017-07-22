<html>
<body>
<?php
include_once("koneksi.php");
$id=2;
$delete=mysql_query("delet form tamu where id='$id'");
if ($delete)
{echo"berhasil menghapus data pada tabel tamu dengan id $id";}
else
{echo"gagal menghapus data";}
?>
</body>
</html>