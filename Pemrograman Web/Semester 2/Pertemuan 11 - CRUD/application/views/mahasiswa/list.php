<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Erlangga Riansyah">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mahasiswa List</title>
</head>
<body>
<main>
	<table>
		<caption>Mahasiswa Dosen</caption>
		<thead>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($mahasiswa as $d) : ?>
			<tr>
				<td><?php echo $d->nim ?></td>
				<td><?php echo $d->nama?></td>
				<td><a href="edit/<?php echo $d->nim ?>">Update</a><a href="delete/<?php echo $d->nim ?>">delete</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</main>
</body>
</html>
