<?php
/**
 * Created by PhpStorm.
 * User: Asus ROG
 * Date: 26.06.2019
 * Time: 17:48
 */

class Student
{
	public $firstName;
	public $lastName;
	public $birthDay;

	public function __construct($firstName, $lastName, $birthDay)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->birthDay = $birthDay;
	}

	public function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}
}


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
		$student = new Student($values[0], $values[1], $values[2]);

		$students[] = $student;
	}

	return $students;
}

//открываем файл
$fileName = __DIR__.'/list.txt';

//Загружаем студентов из файла
$students = loadStudentsFromTxt($fileName);

foreach ($students as $student) {
	echo $student->getFullName() . ' ' . $student->birthDay.PHP_EOL;
}

