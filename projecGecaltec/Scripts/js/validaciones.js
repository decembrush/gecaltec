$(function(){
	$("#btnIniciarSesion").on("click", function(){
		$("#form-login").validate({
			rules:{
				lgUser:{
					required: true
				},
				lgPsw:{
					required:true
				}
			},
			messages:
			{
				lgUser: {
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
					required: 'Ingresa el correo electrónico registrado para generar una nueva contraseña.',
					email: 'El correo ingresado no es valido'
				}
			}
		});
	});

	$("#nDic_btnSave").on("click", function(){
		$("#form-nDictamen").validate({
			rules:{
				nDic_iden:{
					required: true,
                                        maxlength: 12
				},
                                nYear:{
					required: true,
                                        number : true,
					minlength: 2,
					maxlength: 2
				},
				nDic_cod:{
					required: true,
                                        number : true,
					minlength: 2,
					maxlength: 6
				},
				nDic_decrip:{
					required: true,
                                        maxlength: 200
				}
			},
			messages:
			{
				nDic_iden: {
					required: 'Por favor, ingresa el # de dictamen del documento',
                                        maxlength: 'Ingresa máximo 12 caracteres'
				},
                                nYear:{
                                        required: 'Por favor, ingresa el año del documento',
					minlength: 'Ingresa minimo 2 caracteres',
					maxlength: 'Ingresa máximo 2 caracteres',
                                        number : "Por favor, ingrese un numero valido."
                                },
				nDic_cod:{
					required: 'Por favor, ingresa el # de hoja del documento',
					minlength: 'Ingresa minimo 2 caracteres',
					maxlength: 'Ingresa máximo 6 caracteres',
                                        number : "Por favor, ingrese un numero valido."
				},
				nDic_decrip:{
					required: 'Por favor, ingresa una descripcion breve para el documento',
                                        maxlength: 'Ingresa máximo 200 caracteres'
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
                                    required:true,
                                    email: true
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
					required: 'Por favor, ingresa el correo electronico.',
                                        email: 'El correo ingresado no es valido'
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

