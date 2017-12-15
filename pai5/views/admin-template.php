<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<?php include('header.php'); ?>
		<div class="middle-bar">
			<div class="manu-bar">
				<?php include('admin-menu.php'); ?>
			</div>
			<div class="content-bar">
				<?php if(isset($data["contentView"]) && !empty($data["contentView"])): ?>
					<?php include($data["contentView"]); ?>
				<?php endif; ?>
			</div>
		</div>
		<?php include('footer.php'); ?>
	</div>
</body>
</html>