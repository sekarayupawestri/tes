<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web Development Test</title>
		<style>
			body{
				width: 1050px;
				margin: 0 auto;
				padding-top: 50px;
			}
		</style>
	</head>
	<body>
				
		<form name="selectCity" action="result.php" method="GET">
			<select name="city" placeholder="City">
				<option>--- City ---</option>
				<option value="Jakarta">Jakarta</option>
				<option value="Semarang">Semarang</option>
				<option value="Surabaya">Surabaya</option>
			</select>
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>