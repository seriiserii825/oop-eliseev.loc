<?php

//class может существовать и без методов.
class Student {
	public $firstName;
	public $lastName;
}

$student = new Student;
$student->firstName = 'Vasya';
$student->lastName = 'Pupkin';

echo $student->getFullName().PHP_EOL;
