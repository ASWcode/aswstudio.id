<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by ASW</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Member</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
      <tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input type="number" name="telepon" required></td>
			</tr>
			<tr>
				<td>jenis kelamin</td>
				<td>:</td>
				<td>
					<select name="jenis_kelamin" required>
						<option value="">Pilih</option>
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>
				</td>
			</tr>
      <tr>
				<td>TTL</td>
				<td>:</td>
				<td><input type="date" name="ttl" required></td>
			</tr>
      <tr>
				<td>Tinggi Badan</td>
				<td>:</td>
				<td><input type="text" name="tinggi_badan" required></td>
			</tr>
      <tr>
				<td>Berat Badan</td>
				<td>:</td>
				<td><input type="text" name="berat_badan" required></td>
			</tr>
      <tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="text" name="hobi" required></td>
			</tr>
      <tr>
				<td>Media Sosial</td>
				<td>:</td>
				<td><input type="text" name="medsos" required></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<select name="status_yoga" required>
						<option value="">Pilih</option>
						<option value="Non Member">Non Member</option>
						<option value="Member Studio">Member Studio</option>
						<option value="Private">Private</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>