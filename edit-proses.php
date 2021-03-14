<?php
//mulai proses edit data
 
//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id

 
  $nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$telepon		= $_POST['telepon'];	//membuat variabel $telepon dan datanya dari inputan telepon
	$jenis_kelamin	= $_POST['jenis_kelamin'];	//membuat variabel $jenis kelamin dan datanya dari inputan jenis kelamin
	$ttl	= $_POST['ttl'];	//membuat variabel $ttl dan datanya dari inputan dropdown ttl
	$tinggi_badan	= $_POST['tinggi_badan'];	//membuat variabel $tinggi_badan dan datanya dari inputan dropdown tinggi_badan
	$berat_badan	= $_POST['berat_badan'];	//membuat variabel $berat_badan dan datanya dari inputan dropdown berat_badan
	$hobi	= $_POST['hobi'];	//membuat variabel $hobi dan datanya dari inputan dropdown hobi
	$medsos	= $_POST['medsos'];	//membuat variabel $medsos dan datanya dari inputan dropdown medsos
	$status_yoga	= $_POST['status_yoga'];	//membuat variabel $status_yoga dan datanya dari inputan dropdown status_yoga
	
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysqli_query($koneksi, "UPDATE member SET nama='$nama', telepon='$telepon', jenis_kelamin='$jenis_kelamin', ttl='$ttl', tinggi_badan='$tinggi_badan', berat_badan='$berat_badan', hobi='$hobi', medsos='$medsos', status_yoga='$status_yoga' WHERE id='$id'");
	
  
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
 
}else{	//jika tidak terdeteksi tombol simpan di klik
 
	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';
 
}
?>