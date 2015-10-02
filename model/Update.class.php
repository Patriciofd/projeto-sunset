<?php
class Update {
	private $tabela;
	private $valores;
	private $condicao;
	
	public function __construct($tabela = NULL, $valores = NULL, $condicao = NULL) {
		if($tabela && $valores && $condicao) {
			$this->tabela = $tabela;
			$this->valores = $valores;
			$this->condicao = $condicao;
		}
		else {
			echo "Faltando parâmetros!";
		}
	}
	
	public function model() {
		try {
			$conexao = Transacao::get();
			$sql = "UPDATE $this->tabela SET $this->valores WHERE $this->condicao ";
			$resultado = $conexao->Query($sql);
			if($resultado->rowCount() > 0) {
				$retorno["erro"] = false;
				$retorno["msg"] = "Alterado com sucesso!";
			}
			else {
				$retorno["erro"] = true;
				$retorno["msg"] = "Nenhum valor alterado!";
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