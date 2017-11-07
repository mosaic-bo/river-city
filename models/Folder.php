<?php

class Folder
{
	public static function createFolder($options)
	{
		// Соединение с БД
		$db = Db::getConnection();

		$sql = "INSERT INTO dir_tree (name, id_parent, type, size) VALUES (:name, :id_parent, :type, :size) ";
		$result = $db->prepare($sql);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':id_parent', $options['id'], PDO::PARAM_INT);
		$result->bindParam(':type', $options['type'], PDO::PARAM_INT);
		$result->bindParam(':size', $options['size'], PDO::PARAM_INT);

		return $result->execute();
	}

	public static function deleteFolder($id)
	{
		$db = Db::getConnection();

		$sql = "DELETE FROM dir_tree WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		return $result->execute();
	}

	public static function countFolders($id = 0)
	{
		$db = Db::getConnection();

		$result = $db->query("SELECT id, id_parent, type FROM dir_tree WHERE id_parent = {$id}");

		$tree = array();

		$i = 0;
		while ($row = $result->fetch()) {
			$tree[$row['id_parent']][] = $row;
			$i++;
		}

		$count = 0;
		array_walk_recursive($tree, function($item, $key) use(&$count, $id) {
			if ($key == 'type' && $item == '0') {
				$count++;
			}
		});

		return $count;
	}
}