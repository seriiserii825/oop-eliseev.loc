<?php

class Student {
	//преобразовывает объект в функцию
	public function __invoke($id, $str)
	{
		return 'Invoke ' . $id . $str;
	}
}

$student = new Student();
echo $student(123, 'asd');
