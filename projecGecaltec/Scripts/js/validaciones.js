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
                                nYear:{
					required: true,
					minlength: 2,
					maxlength: 2
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
					required: 'Por favor, ingresa el # de dictamen del documento'
				},
                                nYear:{
                                        required: 'Por favor, ingresa el año del documento',
					minlength: 'Ingresa minimo 2 caracteres',
					maxlength: 'Ingresa máximo 2 caracteres'
                                },
				nDic_cod:{
					required: 'Por favor, ingresa el # de hoja del documento',
					minlength: 'Ingresa minimo 2 caracteres',
					maxlength: 'Ingresa máximo 8 caracteres'
				},
				nDic_decrip:{
					required: 'Por favor, ingresa una descripcion breve para el documento'
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
                                },
                                passwordUserNew:{
                                    required: function(element) {
                                        return $("#passwordUserOld").val() !== "";
                                    }
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
                                },
                                passwordUserNew: {
                                      required: 'Por favor, ingresa la nueva contraseña para el cambio de contraseña.'                                  
                                }
			}
		});
	});
        

});

