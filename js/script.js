$(document).ready(function(){

	//validado dados do formulario
	$("#form").validate({

		rules:{
			nome:{
				required: true,
				minlength:3
            },
            data:{
                required:true,
            },
            bairro:{
                required:true,
            },
            rua:{
                required:true,
            },
            
            imagem_local: {
                required:true,
            }
            
		}, 

		//submetendo formulario
		submitHandler: function(form){

			//recuperando todos os dados do formulario
			
            var formdata = new FormData($("form[name='form']")[0]);
            
            alertify.confirm('','Confirmar', function(){
				
				$.ajax({
                    type: 'POST',
                    url: 'cadastro.php',
                    data: formdata ,
                    processData: false,
                    contentType: false

                }).done(function (retorno) {
					alertify.alert(retorno).set({ transition: 'zoom' })
            });
			},function(){ 'defaultFocusOff', true})
			.set({ transition: 'zomm' })

		}

})

})
