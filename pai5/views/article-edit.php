<form class="article-form" action="AdminArticleController.php?action=save" method="post" accept-charset="utf-8">
	Podaj nazwe strony <input type="text" name="name" required>
	Tekst lub adres strony<textarea name="content" required></textarea>
	Wybierz typ strony
	<select name="type" required>
		<option value="0">Wewnętrzna</option>
		<option value="1">Zewnętrzna</option>
	</select>
	<input type="submit" name="submit" value="Dodaj">
</form>