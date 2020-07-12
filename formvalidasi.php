<?php
  $txt_file    = file_get_contents('file.txt');
  $data        = explode("\n", $txt_file);
  array($data);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username = input($_POST["Username"]);
  $Password= input($_POST["Password"]);
  $Nama= input($_POST["Nama"]);
  $Email= input($_POST["Email"]);
  $Nomer_KTP= input($_POST["Nomer_KTP"]);
  $Telp= input($_POST["Telp"]);
  $Kode_pos= input($_POST["Kode_pos"]);
  $jenis_kelamin= input($_POST["jenis_kelamin"]);
  $Alamat= input($_POST["Alamat"]);
  $Kota= input($_POST["Kota"]);
}

function input($data) {
  $data = trim($data);

  return $data;
}
echo" <h1 align=center><b>Member Online Lazada</h1></b>";
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

$file =fopen("file.txt","r+");
fputs($file, $Username . "\n");
fputs($file, $Password . "\n");
fputs($file, $Nama. "\n");
fputs($file, $Email . "\n");
fputs($file, $Nomer_KTP . "\n");
fputs($file, $Telp. "\n");
fputs($file, $Kode_pos. "\n");
fputs($file, $jenis_kelamin. "\n");
fputs($file, $Alamat. "\n");
fputs($file, $Kota. "\n");

fputs($file,"$Username|$Password|$Nama|$Email|$Nomer_KTP|$Telp|$Kode_pos|$jenis_kelamin|$Alamat|$Kota|\n");
fclose($file);  
echo "<center>";
echo "Data form anda telah tersimpan.....";
echo "</table>";
?>
</br>

<a align="center" href="form.html">Kembali Ke Menu Form Pendaftaran</a></br>


    <link rel="stylesheet" type="text/css" href="form.css">
