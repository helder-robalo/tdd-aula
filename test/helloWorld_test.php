<?php
	//importar biblioteca de testes
	require_once('../simpletest/autorun.php');

	//importar objeto a ser testado
	require_once('../class/HelloWorldClass.php');

	//defini��o da classe de testes (heran�a)
	class TesteHelloWord extends UnitTestCase{
		/*
		 * Lista de Testes (Planejatamento da classe):
		 *
		 * - Deve retornar algum caracter;
		 * - Deve retornar a frase "Ol� mundo.";
		 * - Deve retornar retornar "Ol�, eu sou o $nome." passado por par�metro
		 *
		 */

		//modela a primeir�o asser��o 
		//[s.f. Afirma��o, proposi��o que se tem como verdadeira: os fatos justificaram-lhe as asser��es.]
		function testCaractere(){
		 	$instancia = new HelloWorldClass();
			$this->assertTrue($instancia->show(null));
		}
		function testHelloWord(){
		 	$instancia = new HelloWorldClass();
			$this->assertEqual($instancia->show(null),"Ol� mundo.");
		}
		//outros asserts devem ser criados para finalizar a lista de testes
		function testHelloWordNome(){
		 	$instancia = new HelloWorldClass();
		 	$parametro = "Goku";
			$this->assertEqual($instancia->show($parametro),"Ol�, eu sou o $nome.");
		}
	}
?>