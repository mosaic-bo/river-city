<?php

class Tree
{
	public static function getDirectoryTree()
	{
		$db = Db::getConnection();

		$directoryTree = array();

		$result = $db->query('SELECT * FROM dir_tree');

		$i = 0;
		while ($row = $result->fetch()) {
			$directoryTree[$row['id_parent']][] = $row;
			$i++;

		}

		return $directoryTree;
	}

	public static function getItemById($id)
	{
		$id = intval($id);
		
		if ($id) {
			$db = Db::getConnection();

			$result = $db->query('SELECT * FROM dir_tree WHERE id =' . $id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			return $result->fetch();
		}
	}

	public static function createTree($directoryTree, $parent_id = 0)
	{
		if (is_array($directoryTree) && isset($directoryTree[$parent_id])) {
			$tree = '<ul>';
			
			foreach ($directoryTree[$parent_id] as $row) {
				if ($row['type'] == 0) {
					$tree .= '<li class="folder"><a href="/folder/' . $row['id'] . '">' . $row['name'];
					$tree .= self::createTree($directoryTree, $row['id']);
					$tree .= '</a></li>';
				} else {
					$tree .= '<li class="file"><a href="/file/' . $row['id'] . '">' . $row['name'];
					$tree .= self::createTree($directoryTree, $row['id']);
					$tree .= '</a></li>';
				}
			}

			$tree .= '</ul>';
		} else {
			return false;
		}

		return $tree;
	}

}