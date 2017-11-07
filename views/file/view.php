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
				<h2><?php echo $item['name']; ?></h2>
				<p>3,56 МБ</p>
				<a href="/file/save/<?php echo $item['id']; ?>"><div class="save"></div></a>
				<a href="/file/delete/<?php echo $item['id']; ?>"><div class="delete"></div></a>
			</div>

			<div class="view-file">
				
			</div>
			
		</div>
	</div>
</body>
</html>