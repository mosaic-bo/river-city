<?php

return array(
	// Папка
	'folder/create/([0-9]+)' => 'folder/create/$1',
	'folder/create' => 'folder/create',
	'folder/delete/([0-9]+)' => 'folder/delete/$1',
	'folder/([0-9]+)' => 'folder/view/$1',

	// Файл

	'file/([0-9]+)' => 'file/view/$1',
	'file/save/([0-9]+)' => 'file/save/$1',
	'file/delete/([0-9]+)' => 'file/delete/$1',
	'file/create/([0-9]+)' => 'file/create/$1',
	'file/create' => 'file/create',

	// Общие пути
	'' => 'site/index',
);