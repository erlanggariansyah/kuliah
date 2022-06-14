<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Erlangga Riansyah">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dosen List</title>
</head>
<body>
<header>
	<h1>Edit Data Dosen</h1>
</header>
<main>
	<form action="/ci/index.php/dosen/save" method="POST">
		<fieldset>
			<legend>Dosen Form</legend>
			<div>
				<label for="nidn">NIDN</label>
				<input type="number" name="nidn" id="nidn" value="<?php echo $dosen->nidn ?>">
			</div>
			<div>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" value="<?php echo $dosen->nama ?>">
			</div>
			<div>
				<label for="gender">Gender</label>
				<select name="gender" id="gender">
					<option value='L'>L</option>
					<option value='P'>P</option>
				</select>
			</div>
			<div>
				<label for="tgl_lahir">Tanggal Lahir</label>
				<input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $dosen->tgl_lahir ?>">
			</div>
			<div>
				<label for="tmp_lahir">Tempat Lahir</label>
				<input type="text" name="tmp_lahir" id="tmp_lahir" value="<?php echo $dosen->tmp_lahir ?>">
			</div>
			<div>
				<label for="pendidikan_akhir">Pendidikan Akhir</label>
				<input type="text" name="pendidikan_akhir" id="pendidikan_akhir" value="<?php echo $dosen->pendidikan_akhir ?>">
			</div>
			<div>
				<label for="prodi_kode">Prodi Kode</label>
				<input type="number" maxlength="2" name="prodi_kode" id="prodi_kode" value="<?php echo $dosen->prodi_kode ?>">
			</div>
			<button type="submit">ADD</button>
		</fieldset>
	</form>
</main>
</body>
</html>
