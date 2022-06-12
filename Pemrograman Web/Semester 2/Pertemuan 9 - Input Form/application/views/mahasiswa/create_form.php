<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Erlangga Riansyah">
	<title>Tambah Mahasiswa</title>
</head>
<body>
<main>
	<header>
		<h1>Tambah data mahasiswa</h1>
	</header>
	<section>
		<form name="inputMahasiswaForm" action="store" method="POST">
			<div>
				<label for="nama">Nama Mahasiswa: </label>
				<input name="nama" type="text" id="nama">
			</div>
			<div>
				<label for="gender">Gender: </label>
				<select name="gender" id="gender">
					<option value="Pria">L</option>
					<option value="Wanita">P</option>
				</select>
			</div>
			<div>
				<label for="nim">NIM: </label>
				<input name="nim" type="number" id="nim">
			</div>
			<div>
				<label for="ipk">IPK</label>
				<input list="ipk" name="ipk" type="number">
			</div>
			<button type="submit">SUBMIT DATA</button>
		</form>
	</section>
</main>
</body>
</html>
