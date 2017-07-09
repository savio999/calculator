<?php 

class calculator
{
	private $result=0;
	private $operator;

	public function calculate()
	{
		foreach(func_get_args() as $var)
		{
			$this->result=$this->operator->operation($this->result,$var);
		}
	}

	public function setOperation(OperatorInterface $operator)
	{
		$this->operator=$operator;
	}

	public function getResult()
	{
		return $this->result;
	}


}

 ?>