<form class="article-form" action="AdminSecurityController.php?action=save" method="post" accept-charset="utf-8">
	Podaj ip <input type="text" name="ip" required pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9\*]?\d))){4}$">
	<input type="submit" name="submit" value="Dodaj">
</form>
<table>
	<caption>Czarna lista</caption>
	<thead>
		<tr>
			<th>IP</th>
			<th>Usuń</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($row = mysql_fetch_row($data["ip-list"])): ?>
        <tr>
			<td><?php echo $row[1]; ?></td>
			<td><a href="AdminSecurityController.php?action=delete&id=<?php echo $row[0]; ?>">Usun</a></td>
		</tr>
		<?php endwhile; ?>
	</tbody>
</table>