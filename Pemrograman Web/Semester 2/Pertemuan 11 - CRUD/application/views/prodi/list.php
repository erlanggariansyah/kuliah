<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Erlangga Riansyah">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prodi List</title>
</head>
<body>
<main>
	<table>
		<caption>List Prodi</caption>
		<thead>
		<tr>
			<th>Kode</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($prodi as $d) : ?>
			<tr>
				<td><?php echo $d->kode ?></td>
				<td><?php echo $d->nama?></td>
				<td><a href="edit/<?php echo $d->kode ?>">Update</a><a href="delete/<?php echo $d->kode ?>">delete</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</main>
</body>
</html>
