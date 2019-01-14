/* Java Script *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/
/*Algumas funções serão comentadas, pois ainda não consigo manipular todas'*/

/*<>Arquivo Para Validação dos Campos do Formulário<>'*/
/*<>File to validate fields in form<>'*/

$(document).ready(function(){
			$("#formCadastro").validate({
				rules:{
					// nome do campo do Formulário {
					// 	se é requerido, obrigatório (required),
					// 	máximo de caracteres (maxlength),
					// 	minímo de caracteres (minlength),
					// 	minímo de frases (minWords)
					// }
					nomeAluno: { 
						required: true,
						maxlength: 150,
						minlength: 10,
						minWords: 2
					},
					emailAluno: {
						required: true,
						email: true,
						maxlength: 250,
						minlength: 10
					},
					rmAluno: {
						required: true,
						min: 3

					},
					moduloAluno: {
						required: true,
						minlength: 1
					},
					periodoAluno: {
						required: true,
						maxlength: 15
					},
					cursoAluno: {
						required: true,
						minlength: 5,						
						maxlength: 50
					},
					telefoneAluno: {
						required: true,						
					},						
				},
				submitHandler: function(form){
					alert("Cadastrado com Sucesso")						
				}				
			})
		})