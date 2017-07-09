<?php 

class Adder implements OperatorInterface{

	public function operation($result,$number)
	{
		return $result + $number;
	}
}

 ?>