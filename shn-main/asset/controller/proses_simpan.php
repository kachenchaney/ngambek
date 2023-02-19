<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil Data yang Dikirim dari Form

$Nama Karyawan = $_POST['Nama Karyawan'];
$No Rekening = $_POST['No Rekening'];
$Gaji = $_POST['Gaji'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
	
// Rename Nama Karyawan fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "../images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query ="INSERT INTO users (Nama Karyawan,No Rekening,Gaji,Foto)
	VALUE ('$Nama Karyawan','$No Rekening','$Gaji','$fotobaru')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: ../../index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='../view/form_simpan.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='../view/form_simpan.php'>Kembali Ke Form</a>";
}
?>
