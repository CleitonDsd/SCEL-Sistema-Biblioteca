/* Java Script *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/
/*Algumas funções serão comentadas, pois ainda não consigo manipular todas'*/

/*<>Funções para os Formulários<>'*/
/*<>functions to the forms<>'*/


// <>Função para verificar campos em branco e emitir alerta<>'
// <>Function to check blank fields and issue alert<>'
function verificaCampo() {

	if ($('#nomeAluno' == " ")) {
		swal({
			title: 'Ops...',
			type: 'warning',
			text: " Verifique se todos os campos estão preenchidos",
			timer: 2500			
		})	
	}	  
}
// Formulário de Cadastro de Livros
function verificaCampo2(){
	if ($('#nomeLivro' == "")) {
		swal({
			title: 'Ops...',
			type: 'warning',
			text: " Verifique se todos os campos estão preenchidos",
			timer: 2500			
		})	
	}
}
// Formulário de Cadastro de Usuários
function verificaCampo3(){
	if ($('#nomeUsuario' == "")) {
		swal({
			title: 'Ops...',
			type: 'warning',
			text: " Verifique se todos os campos estão preenchidos",
			timer: 2500			
		})	
	}
}
// Formulário de Cadastro de Usuários
function verificaCampo4(){
	if ($('#nomeLivro' == "")) {
		swal({
			title: 'Ops...',
			type: 'warning',
			text: " Verifique se todos os campos estão preenchidos",
			timer: 2500			
		})	
	}
}
// <>Função para o Alert Sweet, para confirmar volta para outra página<>'
// <>function for Alert Sweet, to confirm back to another page<>'
function desejaVoltar(){
	swal({
		title: 'Você  tem certeza que deseja Voltar?',
		text: 'Dados poderão ser perdidos',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Continuar',
		cancelButtonText: 'Cancelar'
	}).then((result) => {
		if (result.value) {
			window.location = '../html/menuRegisters.html';			
		}
	})

}
function desejaVoltar2(){
	swal({
		title: 'Você  tem certeza que deseja Voltar?',
		text: 'Dados poderão ser perdidos',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Continuar',
		cancelButtonText: 'Cancelar'
	}).then((result) => {
		if (result.value) {
			window.location = '../html/menuRegisters.html';			
		}
	})

}

// Função para validar senha no Formulário de Cadastro de Usuários
// Function to validate password in the form Register Users
$(function(){
	$("#btnCad").click(function(){
		var senha = $("#senhaUsuario").val();
		var senha2 = $("#Confirmsenha").val();
		if(senha != senha2){
			event.preventDefault();
			document.getElementById("Confirmsenha").style.backgroundColor = "tomato";
			// alert("As senhas não são iguais!");			
			swal('Algo deu errado!', 'Os campos de senha devem ser iguais', 'error');
		}
	});
});
