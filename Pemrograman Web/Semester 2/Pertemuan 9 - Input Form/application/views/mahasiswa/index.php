<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Refresh" content="60">
	<meta name="author" content="Erlangga Riansyah">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mahasiswa List</title>
	<style>
		th, td {
			border: solid 2px #000000;
		}
	</style>
</head>
<body>
<main>
	<header>
		<h1>Mahasiswa List</h1>
	</header>
	<article>
		<table>
			<caption>Mahasiswa</caption>
			<thead>
			<tr>
				<th>#</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>IPK</th>
				<th>Predikat</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$index = 1;
			foreach ($list_mhs as $d) {
				?>
				<tr>
					<td><?= $index ?></td>
					<td><?= $d->nim ?></td>
					<td><?= $d->nama ?></td>
					<td><?= $d->gender ?></td>
					<td><?= $d->ipk ?></td>
					<td><?= $d->predikat(); ?></td>
				</tr>
			<?php
				$index++;
			}
			?>
			</tbody>
		</table>
	</article>
</main>
</body>
</html>
