$(function(){
	$("#btnIniciarSesion").on("click", function(){
		$("#form-login").validate({
			rules:{
				lgUsuario:{
					required: true
				},
				lgPsw:{
					required:true
				}
			},
			messages:
			{
				lgUsuario: {
					required: 'Por favor, ingresa este campo'

				},
				lgPsw:{
					required: 'Por favor, ingresa tu contraseña'
				}
			}
		});
	});

	$("#btnRecordar").on("click", function(){
		$("#form-rec").validate({
			rules:{
				recEmail:{
					required: true,
					email: true
				}
			},
			messages:
			{
				recEmail: {
					required: 'Por favor, ingresa tu correo',
					email: 'El correo ingresado no es valido'
				}
			}
		});
	});

	$("#nDic_btnSave").on("click", function(){
		$("#form-nDictamen").validate({
			rules:{
				nDic_iden:{
					required: true
				},
				nDic_cod:{
					required: true,
					minlength: 2,
					maxlength: 8
				},
				nDic_decrip:{
					required: true
				}
			},
			messages:
			{
				nDic_iden: {
					required: 'Por favor, ingresa el id del documento'
				},
				nDic_cod:{
					required: 'Por favor, ingresa el codigo del documento',
					minlength: 'Ingresa minimo 2 caracteres',
					maxlength: 'Ingresa máximo 8 caracteres'
				},
				nDic_decrip:{
					required: 'Por favor, ingresa el codigo del documento'
				}
			}
		});
	});
        
        
        $("#btn_accountUser").on("click", function(){
		$("#form-account").validate({
			rules:{
				nameUser:{
					required: true
				},
				mailUser:{
					required:true
				},
                                passwordUserNewRepeat: {
                                    equalTo: "#passwordUserNew"
                                }
			},
			messages:
			{
				nameUser: {
					required: 'Por favor, ingresa el usuario'

				},
				mailUser:{
					required: 'Por favor, ingresa el correo electronico.'
				},
                                passwordUserNewRepeat: {
                                    equalTo: "La contraseñas no coinciden."
                                }
			}
		});
	});
        

});

