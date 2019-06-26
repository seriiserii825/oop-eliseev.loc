<?php

class Student {
	//вызывается, когда метод не определен
	public function __call($name, $arguments)
	{
		return 'Call ' . $name . ' ' . print_r($arguments, true);
	}
}

$student = new Student();
echo $student->move(123, 12).PHP_EOL;
