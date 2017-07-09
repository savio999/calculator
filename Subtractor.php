<?php 

class Subtractor implements OperatorInterface{

	public function operation($result,$number)
	{
		return $result - $number;
	}
}

 ?>