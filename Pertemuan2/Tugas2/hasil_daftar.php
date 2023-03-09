<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Pendaftar</title>
		<!-- Load Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Data Pendaftar</h2>
		
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Alifah</td>
					<td>alifah@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Zahro</td>
					<td>zahro@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<?php

					$nomor =3;
					//Variable untuk menangkap data
					$Nama = $_POST['nama_lengkap'];
					$Email = $_POST['email'];
					$Alamat = $_POST['alamat'];
					$Telepon = $_POST['telepon'];

					//Tampilan data variable
					echo "<td>".$nomor."</td>";
					echo "<td>".$Nama."</td>";
					echo "<td>".$Email."</td>"; 
					echo "<td>".$Alamat."</td>";
					echo "<td>".$Telepon."</td>";
			
				?>

			</tbody>
		</table>
	</div>
</body>
</html>