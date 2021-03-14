<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysqli_query($koneksi, "SELECT * FROM member WHERE id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysqli_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">      
      <tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?> " required></td>
			</tr>
      <tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input type="number" name="telepon" value="<?php echo (int)$data['telepon']; ?>" required></td>
			</tr>
			<tr>
				<td>jenis kelamin</td>
				<td>:</td>
				<td>
					<select name="jenis_kelamin" required>
						<option value="">Pilih</option>
						<option value="Pria" <?php if($data['jenis_kelamin'] == 'Pria'){ echo 'selected'; } ?>>Pria</option>
						<option value="Wanita" <?php if($data['jenis_kelamin'] == 'Wanita'){ echo 'selected'; } ?>>Wanita</option>
					</select>
				</td>
			</tr>
      <tr>
				<td>TTL</td>
				<td>:</td>
				<td><input type="date" name="ttl" required  value="<?php echo $data['ttl'];?>"></td>
			</tr>
      <tr>
				<td>Tinggi Badan</td>
				<td>:</td>
				<td><input type="text" name="tinggi_badan" value="<?php echo $data['tinggi_badan']; ?> " required></td>
			</tr>
      <tr>
				<td>Berat Badan</td>
				<td>:</td>
				<td><input type="text" name="berat_badan" value="<?php echo $data['berat_badan']; ?> " required></td>
			</tr>
      <tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="text" name="hobi" value="<?php echo $data['hobi']; ?> "required></td>
			</tr>
      <tr>
				<td>Media Sosial</td>
				<td>:</td>
				<td><input type="text" name="medsos" value="<?php echo $data['medsos']; ?> "required></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<select name="status_yoga" required>
						<option value="">Pilih</option>
						<option value="Non Member" <?php if($data['status_yoga'] == 'Non Member'){ echo 'selected'; } ?>>Non Member</option>
						<option value="Member Studio" <?php if($data['status_yoga'] == 'Member Studio'){ echo 'selected'; } ?>>Member Studio</option>
						<option value="Private" <?php if($data['status_yoga'] == 'Private'){ echo 'selected'; } ?>>Private</option>
					</select>
				</td>
			</tr>
      <tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>