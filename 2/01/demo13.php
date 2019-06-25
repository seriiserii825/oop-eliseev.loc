<?php

class Student {
	public function __get($name)
	{
		return 'Get ' . $name . PHP_EOL;
	}

	public function __set($name, $value)
	{
		return 'Set ' . $name . ' ' . $value . PHP_EOL;
	}

	public function __isset($name)
	{
		return 'isset ' . $name . PHP_EOL;
	}

	public function __unset($name)
	{
		return 'unset ' . $name . PHP_EOL;
	}
}
