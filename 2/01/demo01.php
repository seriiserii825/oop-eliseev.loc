<?php

class Student {
	// var - php 4. Функции и переменные всегда публичные
	var $firstName;
	var $lastName;
	var $birthDay;

	function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}
}

$student = new Student;

$student->firstName = 'Vasya';
$student->lastName = 'Pupkin';

echo $student->getFullName().PHP_EOL;
