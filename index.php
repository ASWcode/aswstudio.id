<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by ASW</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Member</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No</th>
			<th>Name</th>
			<th>Telepon</th>
			<th>Jenis Kelamin</th>
			<th>TTL</th>
			<th>Tinggi Badan</th>
      <th>Berat Badan</th>
      <th>Hobi</th>
      <th>Media Sosial</th>
      <th>Status</th>
      <th>Aksi</th>

		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table member diurutkan berdasarkan id paling besar
		$query = mysqli_query($koneksi, "SELECT * FROM member ORDER BY id DESC") or die(mysqli_connect_error());

		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysqli_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysqli_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['nama'].'</td>';	//menampilkan data nama dari database
					echo '<td>'.$data['telepon'].'</td>';	//menampilkan data telepon dari database
					echo '<td>'.$data['jenis_kelamin'].'</td>';	//menampilkan jenis kelamin dari database
					echo '<td>'.$data['ttl'].'</td>';	//menampilkan data tanggal lahir dari database
					echo '<td>'.$data['tinggi_badan'].'</td>';	//menampilkan data tinggi badan dari database
					echo '<td>'.$data['berat_badan'].'</td>';	//menampilkan data berat badan dari database
					echo '<td>'.$data['hobi'].'</td>';	//menampilkan data hobi dari database
					echo '<td>'.$data['medsos'].'</td>';	//menampilkan data media sosial dari database
					echo '<td>'.$data['status_yoga'].'</td>';	//menampilkan data status yoga dari database
					echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>