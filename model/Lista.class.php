<?php
class Lista {
	private $tabela;
	
	public function __construct($tabela = NULL) {
		if($tabela) {
			$this->tabela = $tabela;
		}
		else {
			echo "Faltando parâmetro!";
		}
	}
	
	public function model() {
		try {
			$conexao = Transacao::get();
			$sql = "SELECT * FROM $this->tabela ";
			$resultado = $conexao->Query($sql);
			if($resultado->rowCount() > 0) {
				while($dados = $resultado->fetchObject()) {
					$dado[] = $dados;
				}
				$retorno["msg"] = $dado;
				$retorno["erro"] = false;
			}
			else {
				$retorno["msg"] = "Nenhum registro encontrado!";
				$retorno["erro"] = true;
			}
		}
		catch(Exception $e) {
			$retorno["msg"] = "Ocorreu um erro! ".$e->getMessage();
			$retorno["erro"] = true;
		}
		return $retorno;
	}
}
?>