<?php
/**
* HelloWorldClass para explica��o de TDD
* @author Barg�o Robalo <bargaorobalo@gmail.com>
*
*/
class HelloWorldClass
{
	
	function __construct()
	{
		//I'm your father
	}

	public function show($parametro='')
	{
		if(is_null($parametro)){
			return "Ol� mundo.";
		}else{
			return "Ol�, eu sou o $nome.";
		}
	}
}

?>