/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    
    
        $("#form-rec").submit(function(){
               
            var validator = $("#form-rec").validate({ /* settings */ });
            if ($("#form-rec").valid() === false) {

                validator.focusInvalid();
                return false;
            }  
            
            var path = $("#path").val() + "RememberPassword/sendMail"; 
            
            $("#btnRecordar").val("Por favor espere ...").attr("disabled", "disabled"); 
            $.ajax({                
                type: "POST",    
                url: path,
                datatype: "Json",
                data: $(this).serialize(),
                success: function (response) { 
                    alert(response.message); 
                }                
            });          

            return true;
        });
});

