<?php
class Insere {
	private $tabela;
	private $campos;
	private $valores;
	public function __construct($tabela = NULL, $campos = NULL, $valores = NULL) {
		if($tabela && $campos && $valores) {
			$this->tabela = $tabela;
			$this->campos = $campos;
			$this->valores = $valores;
		}
		else {
			echo "Faltando parâmetros";
		}
	}
	
	public function model() {
		try {
			$conexao = Transacao::get();
			$sql = "INSERT INTO $this->tabela ($this->campos) VALUES ($this->valores) ";
			$resultado = $conexao->Query($sql);
			if($resultado->rowCount() > 0) {
				$retorno["erro"] = false;
				$retorno["msg"] = "Inserido com sucesso!";
				$retorno["id"] = $conexao->lastInsertId();
			}
			else {
				$retorno["erro"] = true;
				$retorno["msg"] = "Nenhum registro inserido!";
			}
		}
		catch(Exception $e) {
			$retorno["erro"] = true;
			$retorno["msg"] = "Ocorreu um erro! ".$e->getMessage();
		}
		return $retorno;
	}
}
?>