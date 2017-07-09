<?php 

class Multiplier implements OperatorInterface{

	public function operation($result,$number)
	{
		return $result * $number;
	}
}

 ?>