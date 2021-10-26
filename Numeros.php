<?php

class Numeros

{
	private $numeros;

	public function __construct(){				
	$this->numeros = array();
	}
		
	/*
	Insere numeros em um vetor
	
	Numeros vazia : []
	inserir( 3 ); -> [ 3 ]
	inserir( 1 ); -> [ 3, 1 ]
	inserir( 2 ); -> [ 3, 1, 2 ]
	*/	
	public function inserir( $numero ){	

		array_push($this->numeros, $numero);
	}				

	/*
	Procura e número solicitado no vetor e o remove do vetor se o achar	
	
	Retorna:
	- true se encontrou e removeu com sucesso
	- false se não encontro o número
	*/
	public function remover( $numero ) {
		$retorno;
		if(in_array($numero,$this->numeros)==true){
			$indice = array_search($numero, $this->numeros);
			unset($this->numeros[$indice]);
			$retorno = "true";
		}
		else{
			$retorno = "false";
		}
		
		return $retorno;
	}
	
	/*
		Retorna o menor número da lista
	*/
	public function menor(){
		
		return min($this->numeros);		
	}
	
	/*
		Retorna o maior número da lista
	*/	
	public function maior(){
		
		return max($this->numeros);	
	}
	
	
	
}


?>