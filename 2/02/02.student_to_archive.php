<?php
//открываем файл
$fileName = __DIR__.'/list.txt';
$rows = file($fileName);

//создаем пустой массив студенов
$students = [];

foreach ($rows as $row) {
	//получаем строки
	$values = array_map('trim', explode(';', $row));

	//помещаем каждого студента в массив
	$students = [
		'firstName' => $values[0],
		'lastName' => $values[1],
		'birthDay' => $values[2],
	];

}

foreach($students as $student){
	echo $student['firstName'] . ' ' . $student['lastName'] . ' ' . $student['birthDay']. PHP_EOL;
}

