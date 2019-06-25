<?php

class Student {
	var $firstName;
	var $lastName;
	var $birthDate;

	function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}
}

$student1 = new Student();
$student1->firstName = 'Vasya';
$student1->lastName = 'Pupkin';

$student2 = $student1;
$student2->firstName = 'Petya';

echo $student1->getFullName().PHP_EOL;
echo $student2->getFullName().PHP_EOL;
