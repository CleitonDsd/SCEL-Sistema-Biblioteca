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
