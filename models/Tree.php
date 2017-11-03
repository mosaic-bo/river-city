<?php

class Tree
{
	public static function getDirectoryTree()
	{
		$db = Db::getConnection();

		$directoryTree = array();

		$result = $db->query('SELECT * FROM dir_tree ORDER BY id_parent ASC');

		$i = 0;
		while ($row = $result->fetch()) {
			$directoryTree[$i]['id'] = $row['id'];
			$directoryTree[$i]['name'] = $row['name'];
			$directoryTree[$i]['id_parent'] = $row['id_parent'];
			$directoryTree[$i]['type'] = $row['type'];
			$directoryTree[$i]['size'] = $row['size'];
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
}