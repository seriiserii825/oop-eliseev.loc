<?php
class Student
{
	//можно определять в классе
	const TYPE_OCHN = 1;
	const TYPE_ZAOCHN = 2;

	private $firstName;
	private $lastName;
	private $type;

	//доступ к константе
	public function  construct($firstName, $lastName, $type = self::TYPE_OCHN) {
		if (empty($firstName) || empty($lastName)) {
			throw new InvalidArgumentException('Некорректные данные1');
		}
		$this->lastName = SlastName;
		$this->firstName = $firstName;
		$this->type = $type;
	}

	public function isOchn(){
		return $this->type === TYPE_OCHN;
	}

	public function isZaOchn(){
		return $this->type === TYPE_ZAOCHN;
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

//константа вызывается через класс
$studentl = new Student('Petya', 'Ivanov', Student::TYPE_OCHN);
$student2 = new Student('Petva'. 'Ivanov');
