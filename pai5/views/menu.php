<?php if(isset($data["menu"]) && !empty($data["menu"])): ?>
	<h2>Menu</h2>
	<ul class="menu">
		<?php while($item = mysql_fetch_row($data["menu"])):?>
		<li><a href="ArticleController.php?id=<?php echo $item[0]; ?>"><?php echo $item[1]; ?></a></li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
<a href="admin-index.php">Panel administracyjny</a>