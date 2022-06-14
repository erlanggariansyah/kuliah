<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Erlangga Riansyah">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dosen List</title>
</head>
<body>
<main>
	<table>
		<caption>List Dosen</caption>
		<thead>
		<tr>
			<th>NIDN</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($dosen as $d) : ?>
		<tr>
			<td><?php echo $d->nidn ?></td>
			<td><?php echo $d->nama?></td>
			<td><a href="edit/<?php echo $d->nidn ?>">Update</a><a href="delete/<?php echo $d->nidn ?>">delete</a></td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</main>
</body>
</html>
