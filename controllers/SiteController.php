<?php

class SiteController
{
	public function actionIndex()
	{
		$items = Tree::getDirectoryTree();
		require_once(ROOT . '/views/site/index.php');
		return true;
	}

	public function actionView()
	{
		echo 'View';
	}
}