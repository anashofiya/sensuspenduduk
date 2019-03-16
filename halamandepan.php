<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'cek-login.php'; ?>

<div class="judul">		
		<h1>Aplikasi Sensus Penduduk</h1>
		<h2>Aplikasi ini dibuat untuk memperkirakan jumlah penduduk di Indonesia</h2>
		</div>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data Penduduk</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal Daerah</th>
			<th>Gaji</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksisensuslanjut.php";
		$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['asal daerah']; ?></td>
			<td><?php echo $data['gaji']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	<h3>Summary</h3>
	<table border="1" class="table2">
		<tr>
			<th>No</th>
			<th>Asal Daerah</th>
			<th>Jumlah Penduduk</th>
			<th>Total Pendapatan</th>
			<th>Rata-rata Pendapatan</th>
			<th>Status</th>
		</tr> 
				</table>
	
<a href="logout.php">Logout</a>
</body>
</html>