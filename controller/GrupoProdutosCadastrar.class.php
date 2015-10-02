<?php
class GrupoProdutosCadastrar{
	public function controller(){
		try{
			$template = new Template("view/adicionar.html");
			$retorno=array("erro" => FALSE, "msg"=>$template->saida());
		}catch(exception $e){
			$retorno=array("erro" => TRUE, "msg"=>"Ocorreu um erro, por favor, tente novamente.");			
		}
		return $retorno;
	}
}
?>
