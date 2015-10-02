jQuery(document).ready( function () { 
// Tratar botão adicionar
	jQuery("#addInstrumento").click( function (e) { 
		jQuery("#insereEdita").find(".modal-title").html("Preencha os dados do Instrumento! ");
		jQuery("#formInstrumento").attr("action", "InstrumentoInsere");
		jQuery("#formInstrumento").trigger("reset");
		jQuery("#formInstrumento").validate().resetForm();
		jQuery("#formInstrumento div").removeClass("form-group has-success").removeClass("form-group has-error");
	});

	function editarRemover() {
		//Tratar botão editar
		jQuery(".editar").click( function (e) {
			jQuery("#formInstrumento").trigger("reset");
			jQuery("#formInstrumento").validate().resetForm();
			jQuery("#formInstrumento div").removeClass("form-group has-success").removeClass("form-group has-error");
			jQuery("#insereEdita").find(".modal-title").html("Altere os dados do Instrumento! ");
			jQuery("#formInstrumento").attr("action", "InstrumentoAltera");
			var id = jQuery(this).attr("cod");
			var linha = jQuery(this).parent().parent();
			jQuery("#formInstrumento input[name=nome]").val(linha.children("td:eq(0)").text());
			jQuery("#formInstrumento input[name=caracteristica]").val(linha.children("td:eq(1)").text());
			jQuery("#formInstrumento input[name=acabamento]").val(linha.children("td:eq(2)").text());
			jQuery("#formInstrumento input[name=id]").val(id);
		});
		
		// Tratar botão remover
		var id;
		var linha;
		jQuery('#confirma').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the 	
			id = button.data('cod') // Extract info from data-* 
			linha = button.parent().parent()
		});
		
		jQuery("#sim").click( function (e) {
			jQuery.get("ajax.php?acao=InstrumentoRemove&id="+id, function (retorno) {
				var retorno = JSON.parse(retorno);
				if (!retorno.erro) {
					jQuery("#status").find(".modal-title").html("Sucesso");
					linha.remove();
				}
				else {
					jQuery("#status").find(".modal-title").html("Erro");
				}
				jQuery("#status").find(".modal-body").html(retorno.msg);
				jQuery("#confirma").modal("hide");
				jQuery("#status").modal("show");
			});
		});
	}
	editarRemover();
	
// Validar formulário
	jQuery("#formInstrumento").validate({
		rules: {
			nome: "required",
			caracteristica: "required",
			acabamento: "required"
		},
		messages: {
			nome: "Digite um nome!",
			caracteristica: "Digite uma característica!",
			acabamento: "Digite uma acabamento!"
		},
		errorClass: "form-group has-error",
		validClass: "form-group has-success",
		highlight: function (element, errorClass, validClass) {
			jQuery(element).parent().removeClass(validClass).addClass(errorClass);
		},
		unhighlight: function (element, errorClass, validClass) {
			jQuery(element).parent().removeClass(errorClass).addClass(validClass);
		},
		submitHandler: function () {
			var dados = jQuery("#formInstrumento").serialize();
			var action = jQuery("#formInstrumento").attr("action");
			jQuery.post("ajax.php?acao="+action, dados, function (retorno) {
				var retorno = JSON.parse(retorno);
				if (!retorno.erro) {
					jQuery("#status").find(".modal-title").html("Sucesso");
					var valores = jQuery("#formInstrumento").serializeArray();
					if (action == "InstrumentoInsere") {
						var linha = "<tr cod="+retorno.id+">";
						jQuery.each(valores, function (indice, valor) {
							if (valor.name != "id") {
								linha += "<td>"+valor.value+"</td>";
							}
						});
						linha += 
						"<td>"+
							"<button type='button' class='btn btn-info editar' cod='"+retorno.id+"' data-toggle='modal' data-target='#insereEdita'> "+
								"<span class='glyphicon glyphicon-edit'></span> "+
							"</button> "+
						"</td>"+
						"<td> "+
							"<button type='button' class='btn btn-danger remover' data-cod='"+retorno.id+"' data-toggle='modal' data-target='#confirma'>" +
								"<span class='glyphicon glyphicon-trash'></span> "+
							"</button> "+
						"</td>"+
					"</tr>";
						var tabela = jQuery("#tabelaInstrumento tbody");
						if (tabela.html() == "") {
							tabela.html(linha);
						}
						else {
							tabela.append(linha);
						}
						editarRemover();
					}
					if (action == "InstrumentoAltera") {
						jQuery("#tabelaInstrumento tbody tr[cod="+valores[3].value+"] td:eq(0)").text(valores[0].value);
						jQuery("#tabelaInstrumento tbody tr[cod="+valores[3].value+"] td:eq(1)").text(valores[1].value);
						jQuery("#tabelaInstrumento tbody tr[cod="+valores[3].value+"] td:eq(2)").text(valores[2].value);
					}
				}
				else {
					jQuery("#status").find(".modal-title").html("Erro");
				}
				jQuery("#status").find(".modal-body").html(retorno.msg);
				jQuery("#insereEdita").modal("hide");
				jQuery("#status").modal("show");
			});
			return false;
		}
	});
	
	
});