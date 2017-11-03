<?php

class FolderController
{	
	public function actionView($itemId)
	{
		$items = Tree::getDirectoryTree();
		$item = Tree::getItemById($itemId);


		require_once(ROOT . '/views/folder/view.php');

		return true;
	}

	public function actionCreate()
	{
		echo 'create';
		return true;
	}
}