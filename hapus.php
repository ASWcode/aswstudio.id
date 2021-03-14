<?php
//memulai proses hapus data
 
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=id
if(isset($_GET['id'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=id
	$id = $_GET['id'];
	
	//cek ke database apakah ada data siswa dengan id='$id'
	$cek = mysqli_query($koneksi, "SELECT id FROM member WHERE id='$id'") or die(mysqli_connect_error());
	
	//jika data member tidak ada
	if(mysqli_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table member dengan kondisi WHERE id='$id'
		$del = mysqli_query($koneksi, "DELETE FROM member WHERE id='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo 'Data member berhasil di hapus! ';		//Pesan jika proses hapus berhasil
			echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
			
		}else{
			
			echo 'Gagal menghapus data! ';		//Pesan jika proses hapus gagal
			echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>