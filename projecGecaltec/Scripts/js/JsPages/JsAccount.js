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
            
            //alert(path);
              
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


