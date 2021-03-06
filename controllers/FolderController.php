<?php

class FolderController
{	
	public function actionView($itemId)
	{
		$items = Tree::getDirectoryTree();
		$item = Tree::getItemById($itemId);
		$countFolders = Folder::countFolders($itemId);
		$countFiles = File::countFiles($itemId);

		require_once(ROOT . '/views/folder/view.php');

		return true;
	}

	public function actionCreate($itemId = 0)
	{
		$items = Tree::getDirectoryTree();
		$item = Tree::getItemById($itemId);
		$countFolders = Folder::countFolders($itemId);
		$countFiles = File::countFiles($itemId);

		if (isset($_POST['submit'])) {
			$options['name'] = $_POST['name'];
			$options['id'] = $item['id'];
			$options['type'] = 0;
			$options['size'] = 0;

			$id = Folder::createFolder($options);

			header("Location: /");
		}

		require_once(ROOT . '/views/folder/create.php');
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

		require_once(ROOT . '/views/folder/delete.php');
		return true;
	}
}