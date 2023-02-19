<html>
<head>
	<title>Ubah Data</title>
	<link rel="stylesheet" href="../css/ubah.css">
</head>
<body>
<section class="base">
	<h1>Ubah Data Karyawan</h1>
	
	<?php
	// Load file koneksi.php
	include "../koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$id = $_GET['id'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM users WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="../controller/proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama Karyawan Karyawan</td>
		<td><input type="text" name="Nama Karyawan" value="<?php echo $data['Nama Karyawan']; ?>"></td>
	</tr>
	<tr>
		<td>No Rekening</td>
		<td><input type="text" name="No Rekening" value="<?php echo $data['No Rekening']; ?>"></td>
	</tr>
	<tr>
			<td>Gaji</td>
			<td>
			<?php
			if($data['Gaji'] == "Rp 500.000"){
				echo "<input type='radio' name='Gaji' value='Rp 500.000' checked='checked'> Rp 500.000";
				echo "<input type='radio' name='Gaji' value='Rp 1.500.000'> Rp 1.500.000";
				echo "<input type='radio' name='Gaji' value='Rp 3.000.000'> Rp 3.000.000";
			}else{
				if ($data['Gaji'] == "XI TKJ 2") {
					echo "<input type='radio' name='Gaji' value='Rp 500.000'> Rp 500.000";
					echo "<input type='radio' name='Gaji' value='Rp 1.500.000' checked='checked'> Rp 1.500.000";
					echo "<input type='radio' name='Gaji' value='Rp 3.000.000'> Rp 3.000.000";
				}else{
					echo "<div>";
					echo "<input type='radio' name='Gaji' value='Rp 500.000'> Rp 500.000";
					echo "<input type='radio' name='Gaji' value='Rp 1.500.000'> Rp 1.500.000";
					echo "<input type='radio' name='Gaji' value='Rp 3.000.000' checked='checked'> Rp 3.000.000";
					echo "</div>";
				}
			}
			?>
			</td>
	</tr>
	<td>Foto</td>
	<tr>
		<td style="display:flex;">
			<input type="checkbox" name="ubah_foto" value="true" style="height: 25px; width: 25px;">Ceklis jika ingin mengubah foto<br>
		</td>
		<td>
			<input type="file" name="foto">
		</td>
	</tr>
	</table>
	
	<hr>
	<div>
	<button type="submit" value="Ubah">Simpan Data</button>
	<a href="../../index.php"><button type="button" value="Batal">Batal</button></a>
	</div>
	
	<section>
	</form>
</body>
</html>
