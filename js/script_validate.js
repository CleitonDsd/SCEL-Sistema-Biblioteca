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
					rmAluno: {
						required: true,
						min: 3
					},
					nomeAluno: { 
						required: true,
						maxlength: 150,
						minlength: 8,
						minWords: 2
					},
					emailAluno: {
						required: true,
						email: true,
						maxlength: 250,
						minlength: 10
					},
					moduloAluno: {
						required: true,
						maxlength: 3					
					},
					periodoAluno: {
						required: true					
					},
					cursoAluno: {
						required: true						
					},
					telefoneAluno: {
						required: true					
					}						
				},												
			})
})

// Formulário de Livros
$(document).ready(function(){	
	$("#formularioCadLivro").validate({
		rules:{
					// nome do campo do Formulário {
					// 	se é requerido, obrigatório (required),
					// 	máximo de caracteres (maxlength),
					// 	minímo de caracteres (minlength),
					// 	minímo de frases (minWords)
					// }
					nomeLivro: { 
						required: true,
						maxlength: 150,
						minlength: 10
					},
					autorLivro: {
						required: true,						
						maxlength: 250,
						minlength: 10,
						minWords: 2
					},
					editoraLivro: {
						required: true,
						maxlength: 250,
						minlength: 3
					},	
					edicaoLivro: {	
						required: true,																
					},				
					ibsnLivro: {	
						required: true,																
					},	
					publicacaoLivro: {	
						required: true,																
					},									
					categoriaLivro: {
						required: true,											
					},
					estoqueLivro: {
						required: true,											
					}							
				},												
			})
})
// Formulário de Usuarios
$(document).ready(function(){	
	$("#formCadastroUsuarios").validate({
		rules:{
			nomeUsuario: { 
				required: true,
				maxlength: 150,
				minlength: 10,
				minWords: 2
			},
			emailUsuario: {
				required: true,
				email: true,
				maxlength: 250,
				minlength: 10
			},					
			loginUsuario: {
				required: true,
			},	
			funcaoUsuario: {
				required: true,
			},				
			senhaUsuario: {
				required: true,
				minlength: 4
			}					
		},												
	})
})
// <>Validação do Formulário de Empréstimos<>'
$(document).ready(function(){	
	$("#formCadEmp").validate({
		rules:{
					// nome do campo do Formulário {
					// 	se é requerido, obrigatório (required),
					// 	máximo de caracteres (maxlength),
					// 	minímo de caracteres (minlength),
					// 	minímo de frases (minWords)
					// }
					dataEmprestimo: { 
						required: true,						
					},
					dataDevolucao: { 
						required: true,						
					},
					nomeLivro: {
						required: true,
						maxlength: 150,
						minlength: 4						
					},
					editoraLivro: {
						required: true,
						maxlength: 250,
						minlength: 3						
					},
					rmAluno: {
						required: true,
						min: 3
					},
					nomeAluno: {
						required: true,
						maxlength: 150,
						minlength: 8,
						minWords: 2
					},
					quantidadeRetirada: {
						required: true,						
					}					
				},												
			})
})