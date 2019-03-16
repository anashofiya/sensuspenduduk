<!DOCTYPE html>
<html>
<head>
	<title>Memasukkan Data Penduduk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Memasukkan Data Penduduk Baru</h1>
			</div>
	
	<br/>
 
	<a href="halamandepan.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Asal Daerah</td>
				<td><input type="text" name="asal daerah"></td>					
			</tr>	
			<tr>
				<td>Besar Gaji</td>
				<td><input type="text" name="gaji"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>