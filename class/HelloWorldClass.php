<?php
/**
* HelloWorldClass para explicaчуo de TDD
* @author Bargуo Robalo <bargaorobalo@gmail.com>
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
			return "Olс mundo.";
		}else{
			return "Olс, eu sou o $nome.";
		}
	}
}

?>