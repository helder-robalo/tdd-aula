<?php
	//importar biblioteca de testes
	require_once('../simpletest/autorun.php');

	//importar objeto a ser testado
	require_once('../class/HelloWorldClass.php');

	//definiчуo da classe de testes (heranчa)
	class TesteHelloWord extends UnitTestCase{
		/*
		 * Lista de Testes (Planejatamento da classe):
		 *
		 * - Deve retornar algum caracter;
		 * - Deve retornar a frase "Olс mundo.";
		 * - Deve retornar retornar "Olс, eu sou o $nome." passado por parтmetro
		 *
		 */

		//modela a primeirуo asserчуo 
		//[s.f. Afirmaчуo, proposiчуo que se tem como verdadeira: os fatos justificaram-lhe as asserчѕes.]
		function testCaractere(){
		 	$instancia = new HelloWorldClass();
			$this->assertTrue($instancia->show(null));
		}
		function testHelloWord(){
		 	$instancia = new HelloWorldClass();
			$this->assertEqual($instancia->show(null),"Olс mundo.");
		}
		//outros asserts devem ser criados para finalizar a lista de testes
		function testHelloWordNome(){
		 	$instancia = new HelloWorldClass();
		 	$parametro = "Goku";
			$this->assertEqual($instancia->show($parametro),"Olс, eu sou o $nome.");
		}
	}
?>