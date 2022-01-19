<?php
require 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$petugas = mysqli_query($conn, "SELECT * FROM tb_petugas WHERE username='$user' AND password='$pass' ");
$masyarakat = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE username='$user' AND password='$pass' ");
$cekPetugas = mysqli_num_rows($petugas);
$cekMasyarakat = mysqli_num_rows($masyarakat);

if ($cekMasyarakat > 0) {
    $data = mysqli_fetch_assoc($masyarakat);
    if ($data['level'] == "masyarakat") {
        session_start();
        $_SESSION['nama'] = $user;
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['level'] = $data['level'];

        header("location: masyarakat/masyarakat.php");
    }
} elseif ($cekPetugas > 0) {
    $data = mysqli_fetch_assoc($petugas);
    if ($data['level'] == "admin") {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];

        header("location: admin/admin.php");
    } elseif ($data['level'] == "petugas") {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];

        header("location: petugas/petugas.php");
    }
} else {
?>
    <script type="text/javascript">
        alert('Username atau Password tidak ditemukan');
        window.location = "index.php";
    </script>
<?php
}
?>