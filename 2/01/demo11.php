<?php
class Student
{
	private $firstName;
	private $lastName;
	private $birthDate;
	public function  construct($firstName, $lastName, $birthDate = null) {
		if (empty($firstName) || empty($lastName)) {
			throw new InvalidArgumentException('Некорректные данные1');
		}
		$this->lastName = SlastName;
		$this->firstName = $firstName;
		$this->birthDate = $birthDate;
	}

	public function rename($firstName, $lastName)
	{
		if (empty($firstName) || empty($lastName)) {
		throw new InvalidArgumentException('Введите имя и фамилию');
		}
		$this->lastName = $lastName;
		$this->firstName = $firstName;
	}

	public function getFullName() { return $this->lastName . ' ' . $this->firstName; }
	public function	getFirstName()	{ return	$this->firstName;	}
	public function	getLastName()	{ return $this->lastName; }
	public function	getBirthDate()	{ return	$this->birthDate;	}
	public function	getAge() { return ''; }

}


$studentl = new Student('Petya', 'Ivanov', '1995-08-26');
$student2 = new Student('Petva'. 'Ivanov');
