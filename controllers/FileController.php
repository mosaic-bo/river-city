<?php

class FileController
{
	public function actionView($itemId) {
		$items = Tree::getDirectoryTree();
		$item = Tree::getItemById($itemId);

		require_once(ROOT . '/views/file/view.php');

		return true;
	}

	public function actionCreate($itemId = 0)
	{
		$items = Tree::getDirectoryTree();
		$item = Tree::getItemById($itemId);
		
		if (isset($_POST['submit'])) {
			$options['name'] = $_POST['name'];
			$options['id'] = $item['id'];
			$options['type'] = 1;
			$options['size'] = 0;

			$id = Folder::createFolder($options);

			header("Location: /");
		}

		require_once(ROOT . '/views/file/create.php');
		return true;
	}

	public function actionDelete($itemId)
	{
		$items = Tree::getDirectoryTree();
		$item = Tree::getItemById($itemId);

		if (isset($_POST['submit'])) {
			Folder::deleteFolder($itemId);
			header("Location: /");
		}

		require_once(ROOT . '/views/file/delete.php');
		return true;
	}

	public function actionSave($itemId)
	{
		$items = Tree::getDirectoryTree();
		$item = Tree::getItemById($itemId);

		require_once(ROOT . '/views/file/save.php');

		return true;
	}
}