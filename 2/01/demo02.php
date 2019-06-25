<?php

class Student {
	//php5
	//private - видно изнутри, но не видно снаружи
	private $firstName;
	public $lastName;
	public $birthDay;

	// для методов public можно не указывать, но лучше всегда использовать, чтобы не путаться.
	public	function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}
}

$student = new Student;

//не видно firstname - private
$student->firstName = 'Vasya';
$student->lastName = 'Pupkin';

echo $student->getFullName().PHP_EOL;
