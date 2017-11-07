<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RiverCity Test</title>
	<link rel="stylesheet" href="/template/css/style.css">
	<link rel="shortcut icon" href="/template/img/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="wrapper">
		<div class="sidebar">
			<ul>
				<li><a href="/">Root</a></li>
				<?php echo Tree::createTree($items); ?>
			</ul>
		</div>
		<div class="container">
			<div class="desc">
				<h2><?php if ($item['id'] == false) echo 'Root'; else echo $item['name']; ?></h2>
				<p>3,56 МБ</p>
				<div class="delete"></div>
			</div>

			<div class="create">
				<form action="#" method="post" enctype="multipart/form-data">
					<p>Введите имя файла:</p>
					<input type="text" name="name" placeholder="" value="">
					<input type="submit" name="submit" value="Создать">
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>