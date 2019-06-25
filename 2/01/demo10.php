<?php

class Student {
	//доступ к полю только через метод rename
	private $firstName;
	private $lastName;

	public function __construct()
	{
		echo 'Constructor'.PHP_EOL;
	}

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

	//getter
	public function getFirstName(){
		return $this->firstName;
	}

	//getter
	public function getLastName(){
		return $this->lastName;
	}
}

$student = new Student;

//Теперь можно указать оба поля
$student->rename('Vasya', 'Pupkin');

echo $student->getFirstName().PHP_EOL;
echo $student->getLastName().PHP_EOL;

