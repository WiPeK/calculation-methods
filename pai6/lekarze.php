<?php 
	$lekarze = simplexml_load_file('db/lekarze.xml');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lekarze</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<table>
		<caption>Lista lekarzy</caption>
		<thead>
			<tr>
				<th>Imie</th>
				<th>Naziwsko</th>
				<th>Specjalizacja</th>
				<th>Badania</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($lekarze as $lekarz): ?>
				<tr>
					<td>
						<?php echo $lekarz->imie; ?>
					</td>
					<td>
						<?php echo $lekarz->nazwisko; ?>
					</td>
					<td>
						<?php echo $lekarz->specjalizacja; ?>
					<?php foreach ($lekarz->attributes() as $key => $value): ?>
						<td><a href="badania.php?lekarz=<?php echo $value; ?>">Badania</a></td>
					<?php endforeach; ?>	
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a href="index.php">Powrót</a>
</body>
</html>