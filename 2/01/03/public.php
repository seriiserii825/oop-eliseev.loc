<?php

// class - это объявление типа
class Student {
	public $firstName;
	public $lastName;
	public $birthDay;

	// для методов public можно не указывать, но лучше всегда использовать, чтобы не путаться.
	public	function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}
}

//Можно создавать много студентов и заполнить данные
$student1 = new Student;
$student2 = new Student;
$student3 = new Student;
$student4 = new Student;
$student5 = new Student;
$student6 = new Student;
$student7 = new Student;

echo $student1->getFullName().PHP_EOL;
echo $student2->getFullName().PHP_EOL;
echo $student3->getFullName().PHP_EOL;
echo $student4->getFullName().PHP_EOL;
echo $student5->getFullName().PHP_EOL;
echo $student6->getFullName().PHP_EOL;
echo $student7->getFullName().PHP_EOL;
