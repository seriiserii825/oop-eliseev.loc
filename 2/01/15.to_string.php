<?php

class Student {
	//срабатывает, когда пытаемся напечатать объект через echo.
	public function __toString()
	{
		return 'Cool object';
	}
}

$student = new Student();
echo 'I print ' . $student;
