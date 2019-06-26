<?php

class Student {
	public $firstName;
	public $lastName;

	public	function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}

	//тут можно добавить любую проверку
	public function rename($firstName, $lastName){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
}

$student = new Student;
//схитрить
$student->firstName = 'Vasya';
$student->lastName = 'Pupkin';

echo $student->getFullName().PHP_EOL;

//Теперь можно указать оба поля
$student->rename('Vasya', 'Pupkin');
