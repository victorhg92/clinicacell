$(function(){
	var altura = $("body").height();	
	$("#capa_opaca").height(altura);

	$("#btn_menu_responsive").on("click", function(){
		$("#menu_responsive").fadeToggle();
	});

	$("#enlace_login").on("click", function(){		
		$("#login").fadeToggle();
		$("#capa_opaca").fadeToggle();
		$("#menu_responsive").fadeToggle();
		$("#capa_opaca").on("click", function(){
			$("#login").fadeToggle();
			$("#capa_opaca").fadeToggle();
			$("#menu_responsive").fadeToggle();
		});		
	});

	$("#enlace_registro").on("click", function(){
		$("#registro").fadeToggle();
		$("#capa_opaca").fadeToggle();
		$("#menu_responsive").fadeToggle();
		
		$("#capa_opaca").on("click", function(){
			$("#registro").fadeToggle();
			$("#capa_opaca").fadeToggle();
			$("#menu_responsive").fadeToggle();
			$("#capa_opaca").off();
		});		
	});
	
});
function ocultarMostrar() {	
}