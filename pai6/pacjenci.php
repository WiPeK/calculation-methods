<?php 
	$pacjenci = simplexml_load_file('db/pacjenci.xml');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pacjenci</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<table>
		<caption>Lista pacjentów</caption>
		<thead>
			<tr>
				<th>Imie</th>
				<th>Naziwsko</th>
				<th>Adres</th>
				<th>Badania</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pacjenci as $pacjent): ?>
				<tr>
					<td>
						<?php echo $pacjent->imie; ?>
					</td>
					<td>
						<?php echo $pacjent->nazwisko; ?>
					</td>
					<td>
						<?php echo $pacjent->adres; ?>
					<?php foreach ($pacjent->attributes() as $key => $value): ?>
						<td><a href="badania.php?pacjent=<?php echo $value; ?>">Badania</a></td>
					<?php endforeach; ?>	
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a href="index.php">Powrót</a>
</body>
</html>