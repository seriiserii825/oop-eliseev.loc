<?php

class Student {
	public $firstName;
	public $lastName;

	public	function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}

	//тут можно добавить любую проверку
	public function rename($firstName, $lastName){
		if(empty($firstName)){
			throw new InvalidArgumentException('Введите имя');
		}

		if(empty($lastName)){
			throw new InvalidArgumentException('Введите фамилию');
		}

		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
}

$student = new Student;


//Теперь можно указать оба поля
$student->rename('Vasya', 'Pupkin');

echo $student->getFullName().PHP_EOL;
