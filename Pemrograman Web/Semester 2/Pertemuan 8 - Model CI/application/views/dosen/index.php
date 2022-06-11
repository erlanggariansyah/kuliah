<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Refresh" content="60">
	<meta name="author" content="Erlangga Riansyah">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dosen List</title>
	<style>
		th, td {
			border: solid 2px #000000;
		}
	</style>
</head>
<body>
<main>
	<header>
		<h1>Dosen List</h1>
	</header>
	<article>
		<table>
			<caption>Dosen</caption>
			<thead>
			<tr>
				<th>#</th>
				<th>NIDN</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>Pendidikan</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$index = 1;
			foreach ($list_dsn as $d) {
				?>
				<tr>
					<td><?= $index ?></td>
					<td><?= $d->nidn ?></td>
					<td><?= $d->nama ?></td>
					<td><?= $d->gender ?></td>
					<td><?= $d->pendidikan ?></td>
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
