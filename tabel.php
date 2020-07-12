<!DOCTYPE html>
<html>
<head>
	<title>Tabel Member Lazada</title>
	
</head>
<body>
		<h1 align="center">Member Lazada</h1>
		<table border="1">
			
 <tr>   
    <th width="250px">Username</th>
    <th width="250px">Password</th>
    <th width="300px">Nama</th>
    <th width="250px">E-mail</th>
    <th width="200px">No.KTP</th>
    <th width="200px">Telp</th>
    <th width="200px">Kode Pos</th>
    <th width="150px">Jenis Kelamin</th>
    <th width="200px">Alamat</th>
    <th width="200px">Kota</th>
  </tr>
  </tr>
<?php 
$file =fopen("file.txt","r+");
while ($txt_file = fgets($file,150)) 
{$data = explode("|", $txt_file);
?><tr>
					<th><?php echo"$data[0]";
					 ?></th>
					<th><?php echo"$data[1]"; 
					?></th>
					<th><?php echo"$data[2]"; 
					?></th>
					<th><?php echo"$data[3]"; 
					?></th>
					<th><?php echo"$data[4]";
					 ?></th>
					<th><?php echo"$data[5]";
					 ?></th>
				    <th><?php echo"$data[6]"; 
				    ?></th>
					<th><?php echo"$data[7]"; 
					?></th>
					<th><?php echo"$data[8]";
					 ?></th>
					<th><?php echo"$data[8]";
					 ?></th>
</tr>
	<?php } ?>
		</table>
		<a align="center" href="form.html">Kembali Ke Menu Form Pendaftaran</a>
	    <link rel="stylesheet" type="text/css" href="form.css">
	</div>

