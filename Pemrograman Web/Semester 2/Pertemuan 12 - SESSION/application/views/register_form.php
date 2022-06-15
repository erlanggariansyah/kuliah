<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<meta name="author" content="Erlangga Riansyah">
</head>
<body>
<header>
</header>
<main>
	<header>
		<h1>Register Form</h1>
	</header>
	<form action="save" method="POST">
		<fieldset>
			<legend>Register</legend>
			<div>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" required>
			</div>
			<div>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" required>
			</div>
			<div>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" required>
			</div>
			<div>
				<label for="confirm-password">Confirm Password</label>
				<input id="confirm-password" name="confirm-password" type="password" onkeyup="check();" required>
				<span id="message"></span>
			</div>
			<button type="submit">SUBMIT</button>
		</fieldset>
	</form>
</main>
<script>
	let check = function() {
		if (document.getElementById('password').value ==
			document.getElementById('confirm-password').value) {
			document.getElementById('message').style.color = 'green';
			document.getElementById('message').innerHTML = 'matching';
		} else {
			document.getElementById('message').style.color = 'red';
			document.getElementById('message').innerHTML = 'not matching';
		}
	}
</script>
<noscript>
	Your browser doesn't support JavaScript
</noscript>
</body>
</html>
