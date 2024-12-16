<?php
session_start();
include'koneksi.php'; 

if (isset($_POST['tambah'])) {
$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];
$tanggalunggah = date('Y-m-d');
$albumid = $_POST['namaalbum'];
$userid = $_SESSION['userid'];
$foto = $_FILE['lokasifile']['name'];
$tmp = $_FILE['lokasifile']['tmp-name'];
$lokasi ="../assets/img";
$namafoto = rand().'-'.$foto; 

move_uploaded_file($tmp, $namafoto);

$sql = mysqli_query($koneksi, "INSERT INTO foto VALUES('','$judulfoto','$deskripsifoto','$tanggalunggah','$namafoto','$albumid','$userid')");

echo "<script>
alert('data berhasil disimpan');
location.href='../admin/foto.php';
</script>";
}

if (isset($_POST['edit'])){
$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];
$tanggalunggah = date('Y-m-d');
$albumid = $_POST['namaalbum'];
$userid = $_SESSION['userid'];
$foto = $_FILE['lokasifile']['name'];
$tmp = $_FILE['lokasifile']['tmp-name'];
$lokasi ="../assets/img";
$namafoto = rand().'-'.$foto;

if ($foto == null ) {
$sql = mysqli_query($koneksi, "UPDATE");
}
}
?>