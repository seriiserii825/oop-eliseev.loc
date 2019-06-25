<?php

class Student {
	public $firstName;
	public $lastName;

	public	function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}
}

//Если объект скопировать в переменную, то она будет ссылаться на этот же объект.
$student1 = new Student;
$student2 = $student1;

echo $student1->getFullName().PHP_EOL;
echo $student2->getFullName().PHP_EOL;

$student1 = null;
unset($student2);
