<?php
//открываем файл
$fileName = __DIR__.'/list.txt';
$rows = file($fileName);

foreach ($rows as $row) {
	//получаем строки
	$values = array_map('trim', explode(';', $row));
	//выводим
	echo $values[0] . ' ' . $values[1] . ' ' . $values[2].PHP_EOL;
}
