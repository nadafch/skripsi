<?php
$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'skripsi'; // Nama databasenya
$base_url = 'http://localhost:8080/Skripsi/'; // Set Base Url Web

// Koneksi ke MySQL dengan PDO
$koneksi=mysqli_connect($host,$username,$password,$database);
if (!$koneksi){
	die("koneksi gagal: " . mysqli_connect_error());
}
// else{
//     echo "koneksi berhasil";
// }
?>