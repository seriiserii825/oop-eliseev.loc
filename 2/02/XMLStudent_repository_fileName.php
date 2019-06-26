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

class XMLStudent_repository {

	private $file;

	public function __construct($file)
	{
		$this->file = $file;
	}

	public function loadAll(){
		$rows = simplexml_load_file($this->file);

		$students = [];

		foreach ($rows as $row) {
			//получаем строки
			$values = array_map('trim', explode(';', $row));
			$student = new Student($values[0], $values[1], $values[2]);

			$students[] = $student;
		}

		return $students;
	}

	public function saveAll(array $students){
		$rows = [];

		foreach ($students as $student) {
			$rows[] = implode(';', [
				$student->firstName,
				$student->lastName,
				$student->birthDay,
			]);
		}


		file_put_contents($this->file, implode(PHP_EOL, $rows));
	}
}


$studentRepository = new XMLStudent_repository(__DIR__.'/list.txt');

//Загружаем студентов из файла
$students = $studentRepository->loadAll();


foreach ($students as $student) {
	echo $student->getFullName() . ' ' . $student->birthDay.PHP_EOL;
}

$studentRepository->saveAll($students);



