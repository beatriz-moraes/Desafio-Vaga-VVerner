$(document).ready(function(){
	const opcoes = $("#opcoes");

	opcoes.change(function(){
		$(".col-12.col-sm-6.col-lg-3").addClass("d-none"); //Oculta todos os elementos.

    	if (opcoes.val() != "todos") {
    		let selecionado = "." + opcoes.val(); //.post-01 .post-02 .post-03 .post-04

    		$(selecionado).removeClass("d-none"); //Exibe apenas os que tem a classe selecionada.
    	} else {
    		$(".col-12.col-sm-6.col-lg-3").removeClass("d-none"); //Exibe todos os elementos.
    	}
 	});
});