<?php

class SiteController
{
	public function actionIndex()
	{
		$items = Tree::getDirectoryTree();
		$countFolders = Folder::countFolders();
		$countFiles = File::countFiles();

		require_once(ROOT . '/views/site/index.php');
		return true;
	}
}