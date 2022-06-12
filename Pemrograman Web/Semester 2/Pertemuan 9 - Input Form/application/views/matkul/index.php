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
		<h1>Mata Kuliah</h1>
	</header>
	<article>
		<table>
			<caption>Mata Kuliah</caption>
			<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>SKS</th>
				<th>Kode</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$index = 1;
			foreach ($list_mtkl as $d) {
				?>
				<tr>
					<td><?= $index ?></td>
					<td><?= $d->nama ?></td>
					<td><?= $d->sks ?></td>
					<td><?= $d->kode ?></td>
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
