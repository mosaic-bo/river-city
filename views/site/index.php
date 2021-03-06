<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RiverCity Test</title>
	<link rel="stylesheet" href="template/css/style.css">
	<link rel="shortcut icon" href="template/img/favicon/favicon.ico" type="image/x-icon">
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
				<h2>Root</h2>
				<p>3,56 МБ, <?php echo $countFolders . ' папки, ' . $countFiles . ' файл(ов)'; ?></p>
			</div>

			<div class="create">
				<div class="create-item">
					<a href="/folder/create/"><img src="template/img/create-folder.png" alt="Создать папку">
					<p><span class="orange">Создать папку</span></p></a>
				</div>
				<div class="create-item">
					<a href="/file/create/"><img src="template/img/create-file.png" alt="Создать файл">
					<p><span class="blue">Создать файл</span></p></a>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>