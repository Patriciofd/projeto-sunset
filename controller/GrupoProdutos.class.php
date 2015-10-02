<?php
class GrupoProdutos {
	public function controller(){
		try{
			Transacao::open();
			$lista = new Lista("PRODUTOS_GRUPO");
			$resultado = $lista->model();
			$template = new Template("view/tabela.html");
			if (!$resultado["erro"]){
				foreach($resultado["msg"] as $pgrupo){
					$linha = new Template("view/linha.html");
					$linha->set("DESCRICAO", $pgrupo->DESCRICAO);
					$vetDescricao[] = $linha;				
				}
				$saida = Template::juntar($vetDescricao);
				$template->set("linha", $saida);
			}
			$retorno=array("erro" => FALSE, "msg"=>$template->saida());
			Transacao::close();		
		}catch(exception $e){
			$retorno=array("erro" => TRUE, "msg"=>"Ocorreu um erro, por favor, tente novamente.");
			Transacao::rollback();
		}		
		return $retorno;
	}
		
}
?>