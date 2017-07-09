<?php 

class Divider implements OperatorInterface{

	public function operation($result,$number)
	{
		return $result / $number;
	}
}

 ?>