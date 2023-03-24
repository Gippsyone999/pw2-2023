<<<<<<< HEAD
<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.container {
			text-align: center;
		}
	</style>
</head>

<body class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
	<div class="container">
		<h2>Data Pendaftar</h2>
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
					<td>Syhri Ghifari Maulidi</td>
					<td>Syahri@gmail.com</td>
					<td>Jakarta</td>
					<td>+62089635904941</td>
				</tr>

				<tr>
					<td>2</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<tr>

					<?php

					if (isset($_POST['proses'])) {

						$namasiswa = $_POST['nama_lengkap'];
						$email = $_POST['email'];
						$alamat = $_POST['alamat'];
						$telepon = $_POST['telepon'];
						?>

						<td> 3 </td>
						<td><?= $namasiswa ?></td>
						<td><?= $email ?></td>
						<td><?= $alamat ?></td>
						<td><?= $telepon ?></td>
				</tr>
				    <?php
					}
					?>
			</tbody>
		</table>
	</div>
</body>
=======
<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.container {
			text-align: center;
		}
	</style>
</head>

<body class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
	<div class="container">
		<h2>Data Pendaftar</h2>
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
					<td>Syhri Ghifari Maulidi</td>
					<td>Syahri@gmail.com</td>
					<td>Jakarta</td>
					<td>+62089635904941</td>
				</tr>

				<tr>
					<td>2</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<tr>

					<?php

					if (isset($_POST['proses'])) {

						$namasiswa = $_POST['nama_lengkap'];
						$email = $_POST['email'];
						$alamat = $_POST['alamat'];
						$telepon = $_POST['telepon'];
						?>

						<td> 3 </td>
						<td><?= $namasiswa ?></td>
						<td><?= $email ?></td>
						<td><?= $alamat ?></td>
						<td><?= $telepon ?></td>
				</tr>
				    <?php
					}
					?>
			</tbody>
		</table>
	</div>
</body>
>>>>>>> 8cdfdd24553335e7463ba1793dd2f5a91b611889
=======
<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.container {
			text-align: center;
		}
	</style>
</head>

<body class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
	<div class="container">
		<h2>Data Pendaftar</h2>
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
					<td>Syhri Ghifari Maulidi</td>
					<td>Syahri@gmail.com</td>
					<td>Jakarta</td>
					<td>+62089635904941</td>
				</tr>

				<tr>
					<td>2</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<tr>

					<?php

					if (isset($_POST['proses'])) {

						$namasiswa = $_POST['nama_lengkap'];
						$email = $_POST['email'];
						$alamat = $_POST['alamat'];
						$telepon = $_POST['telepon'];
						?>

						<td> 3 </td>
						<td><?= $namasiswa ?></td>
						<td><?= $email ?></td>
						<td><?= $alamat ?></td>
						<td><?= $telepon ?></td>
				</tr>
				    <?php
					}
					?>
			</tbody>
		</table>
	</div>
</body>
>>>>>>> 8cdfdd24553335e7463ba1793dd2f5a91b611889
</html>