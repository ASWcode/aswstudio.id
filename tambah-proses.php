<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$telepon		= $_POST['telepon'];	//membuat variabel $telepon dan datanya dari inputan telepon
	$jenis_kelamin	= $_POST['jenis_kelamin'];	//membuat variabel $jenis kelamin dan datanya dari inputan jenis kelamin
	$ttl	= $_POST['ttl'];	//membuat variabel $ttl dan datanya dari inputan dropdown ttl
	$tinggi_badan	= $_POST['tinggi_badan'];	//membuat variabel $tinggi_badan dan datanya dari inputan dropdown tinggi_badan
	$berat_badan	= $_POST['berat_badan'];	//membuat variabel $berat_badan dan datanya dari inputan dropdown berat_badan
	$hobi	= $_POST['hobi'];	//membuat variabel $hobi dan datanya dari inputan dropdown hobi
	$medsos	= $_POST['medsos'];	//membuat variabel $medsos dan datanya dari inputan dropdown medsos
	$status_yoga	= $_POST['status_yoga'];	//membuat variabel $status_yoga dan datanya dari inputan dropdown status_yoga
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($koneksi, "INSERT INTO member VALUES(NULL, '$nama', '$telepon', '$jenis_kelamin', '$ttl', '$tinggi_badan', '$berat_badan', '$hobi', '$medsos', '$status_yoga') ");
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>