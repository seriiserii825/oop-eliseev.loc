<?php

class Reader
{
	private $file;

	public function  __construct($fileName)
	{
		$this->file = fopen($fileName, 'r');
	}
	public function  __destruct()
	{
		fclose($this->file);
	}
}
