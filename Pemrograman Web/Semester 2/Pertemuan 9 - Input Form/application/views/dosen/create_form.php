<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Erlangga Riansyah">
	<title>Tambah Dosen</title>
</head>
<body>
<main>
	<header>
		<h1>Tambah data dosen</h1>
	</header>
	<section>
		<form name="inputDosenForm" action="store" method="POST">
			<div>
				<label for="nama">Nama Dosen: </label>
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
				<label for="nidn">NIDN: </label>
				<input name="nidn" type="text" id="nidn">
			</div>
			<datalist id="pendidikan">
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA/SMK/MA</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
			</datalist>
			<div>
				<label for="pendidikan">Pendidikan</label>
				<input list="pendidikan" name="pendidikan" type="text">
			</div>
			<button type="submit">SUBMIT DATA</button>
		</form>
	</section>
</main>
</body>
</html>
