<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Erlangga Riansyah">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prodi List</title>
</head>
<body>
<header>
	<h1>Edit Data Prodi</h1>
</header>
<main>
	<form action="/ci/index.php/prodi/save" method="POST">
		<fieldset>
			<legend>Prodi Form</legend>
			<div>
				<label for="kode">Kode</label>
				<input type="number" name="kode" id="kode" value="<?php echo $prodi->kode ?>">
			</div>
			<div>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" value="<?php echo $prodi->nama ?>">
			</div>
			<div>
				<label for="kaprodi">Kaprodi</label>
				<input type="text" name="kaprodi" id="kaprodi" value="<?php echo $prodi->kaprodi ?>">
			</div>
			<button type="submit">ADD</button>
		</fieldset>
	</form>
</main>
</body>
</html>
