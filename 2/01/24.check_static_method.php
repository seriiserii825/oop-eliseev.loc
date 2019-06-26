<?php

class Student
{
	//можно определять в классе
	const TYPE_OCHN = 1;
	const TYPE_ZAOCHN = 2;

	private $firstName;
	private $lastName;
	private $type;

	//получает список констант
	public static function getTypeList(){
		return [
			self::TYPE_OCHN => 'очный',
			self::TYPE_ZAOCHN => 'заочный',
		];
	}

	//доступ к константе
	public function  __construct($firstName, $lastName, $type = self::TYPE_OCHN) {
		if (empty($firstName) || empty($lastName)) {
			throw new InvalidArgumentException('Некорректные данные1');
		}
		//проверяем, если существует тип в массиве
		if(!array_key_exists($type, self::getTypeList())){
			throw new InvalidArgumentException('Некорректные данные1');
		}
		$this->lastName = SlastName;
		$this->firstName = $firstName;
		$this->type = $type;
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
 var_dump(Student::getTypeList());
