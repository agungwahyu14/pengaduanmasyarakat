<?php
require 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$masyarakat = mysqli_query($conn, "INSERT INTO tb_masyarakat VALUES('$nik','$nama','$user','$pass','$telp','$level')");

if ($masyarakat) {
?>
    <script type="text/javascript">
        alert('Data Berhasil Disimpan,Silahkan Gunakan Untuk Login');
        window.location = "index.php";
    </script>
<?php
}
?>