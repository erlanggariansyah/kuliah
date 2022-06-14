<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Erlangga Riansyah">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mahasiswa List</title>
</head>
<body>
<header>
	<h1>Tambah Data Mahasiswa</h1>
</header>
<main>
	<form action="add" method="POST">
		<fieldset>
			<legend>Mahasiswa Form</legend>
			<div>
				<label for="nim">NIM</label>
				<input type="number" name="nim" id="nim">
			</div>
			<div>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama">
			</div>
			<div>
				<label for="gender">Gender</label>
				<select name="gender" id="gender">
					<option value="L">L</option>
					<option value="P">P</option>
				</select>
			</div>
			<div>
				<label for="tgl_lahir">Tanggal Lahir</label>
				<input type="date" name="tgl_lahir" id="tgl_lahir">
			</div>
			<div>
				<label for="tmp_lahir">Tempat Lahir</label>
				<input type="text" name="tmp_lahir" id="tmp_lahir">
			</div>
			<div>
				<label for="ipk">IPK</label>
				<input type="number" name="ipk" id="ipk">
			</div>
			<div>
				<label for="prodi_kode">Prodi Kode</label>
				<input type="number" maxlength="2" name="prodi_kode" id="prodi_kode">
			</div>
			<button type="submit">ADD</button>
		</fieldset>
	</form>
</main>
</body>
</html>
