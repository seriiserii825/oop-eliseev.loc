<?php

/**
 * @param $file string file
 * @return array students
 */
function loadStudentsFromTxt($file){
	$rows = file($file);

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

	return $students;
}

function getFullName($student){
	return $student['lastName'] . ' ' . $student['firstName'];
}

//открываем файл
$fileName = __DIR__.'/list.txt';

//Загружаем студентов из файла
$students = loadStudentsFromTxt($fileName);

foreach($students as $student){
	echo getFullName($student) . ' ' . $student['birthDay']. PHP_EOL;
}





