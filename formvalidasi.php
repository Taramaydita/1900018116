<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username = test_input($_POST["Username"]);
  $Password= test_input($_POST["Password"]);
  $Nama= test_input($_POST["Nama"]);
  $Email= test_input($_POST["Email"]);
  $Nomer_KTP= test_input($_POST["Nomer_KTP"]);
  $Telp= test_input($_POST["Telp"]);
  $Kode_pos= test_input($_POST["Kode_pos"]);
  $jenis_kelamin= test_input($_POST["jenis_kelamin"]);
  $Alamat= test_input($_POST["Alamat"]);
 	$Kota= test_input($_POST["Kota"]);
$Tipe_Pembayaran= test_input($_POST["cekpembayaran[]"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo "<h2>Input:</h2>";
echo $Username;
echo "<br>";
echo $Password;
echo "<br>";
echo $Nama;
echo "<br>";
echo $Email;
echo "<br>";
echo $Nomer_KTP;
echo "<br>";
echo $Telp;
echo "<br>";
echo $Kode_pos;
echo "<br>";
echo $jenis_kelamin;
echo "<br>";
echo $Alamat;
echo "<br>";
echo $Kota;
echo "<br>";
echo $Tipe_Pembayaran;
echo "<br>";
?>