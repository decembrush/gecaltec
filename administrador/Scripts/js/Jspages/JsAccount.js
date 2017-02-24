/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    
    
        $("#form-account").submit(function(){
               
            var validator = $("#form-account").validate({ /* settings */ });
            if ($("#form-account").valid() === false) {

                validator.focusInvalid();
                return false;
            }   
                        
            var path = $("#path").val() + "Account/updateAccountUser"; 
            
            $("#btn_accountUser").val("Por favor espere ...").attr("disabled", "disabled"); 
            //walert(path);
              
            $.ajax({                
                type: "POST",    
                url: path,
                datatype: "Json",
                data: $(this).serialize(),
                success: function (response) {
                    if (response.status) {
                        $("#alertMessageSuccess").removeAttr("style");
                        $("#alertMessageDanger").css({"display": "none"});
                        $("#messageSuccess").html(response.message);
                        
                        $("#btn_accountUser").val("Guardar Cambios").removeAttr("disabled", "disabled");                        
                        
                    }else{
                        $("#alertMessageDanger").removeAttr("style");
                        $("#alertMessageSuccess").css({"display": "none"});
                        $("#messageDanger").html(response.message);
                        
                        $("#btn_accountUser").val("Guardar Cambios").removeAttr("disabled", "disabled"); 
                        
                    }           
                    
                }                
            });           

            return false;
        });
});


