<table>
		<caption>Strony</caption>
		<thead>
			<tr>
				<th>Id</a></th> 
				<th>Nazwa</th>
				<th>Usuń</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysql_fetch_row($data["articles"])): ?>
            <tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><a href="AdminArticleController.php?action=delete&id=<?php echo $row[0]; ?>">Usun</a></td>
			</tr>
			<?php endwhile; ?>
		</tbody>
	</table>