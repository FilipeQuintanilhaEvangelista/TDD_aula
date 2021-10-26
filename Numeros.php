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
	
	/*
		Conta quantas vezes um número apareceu na lista
	*/	
	public function contar( $numero ){
		$tamanho = count($this->numeros);
		$quantidade_encontrada = 0;
		$i = 0;
		while($i<=$tamanho-1)
		{
			if($this->numeros[$i] == $numero){
				$quantidade_encontrada = $quantidade_encontrada + 1;
			}

			$i++;
		}
		return $quantidade_encontrada;	
	}
		
	/* 
		Retorna a soma dos numeros armazenados na lista
	*/
	public function soma(){
		$tamanho = count($this->numeros);
		$soma = 0;
		$i = 0;
		while($i<=$tamanho-1)
		{
			$soma = $soma + $this->numeros[$i];

			$i++;
		}
		return $soma;		
	}
	
	/*
		Retorna o produto dos numeros armazenados na lista
	
	*/	
	public function produto(){


			$produto=1;
	
			for($i=0;$i<count($this->numeros);$i++)
			{
			
				$produto=$this->numeros[$i]*$produto;
			}
	
			return $produto;
	}
		
	/* 
		Retorna a quantidade de numeros armazenados
	*/
	public function quantidade(){
		$tamanho = count($this->numeros);
		return $tamanho;
	}
	
}


?>

	
	
}


?>