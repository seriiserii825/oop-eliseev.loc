<?php
class Student
{
	//статичная переменна, пренадлежит классу, а не объекту. Она глобальна.
	public static $val;

	private $firstName;
	private $lastName;
	private $type;

	//доступ к константе
	public function  construct($firstName, $lastName) {
		if (empty($firstName) || empty($lastName)) {
			throw new InvalidArgumentException('Некорректные данные1');
		}
		$this->lastName = SlastName;
		$this->firstName = $firstName;
		$this->type = $type;
	}

}
//обращение к переменной снаружи как к константе
Student::$val = 15;
echo Student::$val;


