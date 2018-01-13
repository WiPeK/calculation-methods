<?php
	$badania = [];
	if(isset($_GET['lekarz'])) {
		$bdn = simplexml_load_file('db/badania.xml');
		foreach ($bdn as $bb) {
			if (trim($bb->lekarz) == trim($_GET['lekarz'])) {
				array_push($badania, $bb);
			}
		}

	} elseif (isset($_GET['pacjent'])) {
		$bdn = simplexml_load_file('db/badania.xml');
		foreach ($bdn as $bb) {
			if (trim($bb->pacjent) == trim($_GET['pacjent'])) {
				array_push($badania, $bb);
			}
		}
	} else {
		$badania = simplexml_load_file('db/badania.xml');
	}

	function getKlient($id) {
		$pacjenci = simplexml_load_file('db/pacjenci.xml');
		foreach ($pacjenci as $pacjent) {
			foreach ($pacjent->attributes() as $attr => $value) {
				if (trim($value) == trim($id)) {
					return $pacjent->imie . " " . $pacjent->nazwisko;
				}
			}
		}
	}

	function getLekarz($id) {
		$lekarze = simplexml_load_file('db/lekarze.xml');
		foreach ($lekarze as $lekarz) {
			foreach ($lekarz->attributes() as $attr => $value) {
				if (trim($value) == trim($id)) {
					return $lekarz->imie . " " . $lekarz->nazwisko;
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Badania</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<table>
		<caption>Lista badan</caption>
		<thead>
			<tr>
				<th>Pacjent</th>
				<th>Lekarz</th>
				<th>Data</th>
				<th>Diagnoza</th>
				<th>Leki</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($badania as $badanie): ?>
				<tr>
					<td>
						<?php echo getKlient($badanie->pacjent); ?>
					</td>
					<td>
						<?php echo getLekarz($badanie->lekarz); ?>
					</td>
					<td>
						<?php echo $badanie->data; ?>	
					</td>
					<td>
						<?php echo $badanie->diagnoza; ?>	
					</td><td>
						<?php echo $badanie->leki; ?>	
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a href="index.php">Powrót</a>
</body>
</html>