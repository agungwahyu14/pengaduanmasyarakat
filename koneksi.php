<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_ukk_wahyu");

if (!$conn) {
    die("Gagal Terhubung ke Database : " . mysqli_connect_error());
}
