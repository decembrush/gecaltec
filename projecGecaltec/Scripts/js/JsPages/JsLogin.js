/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    
    
        $("#form-login").submit(function(){
               
            var validator = $("#form-login").validate({ /* settings */ });
            if ($("#form-login").valid() === false) {

                validator.focusInvalid();
                return false;
            }   
            
            var path = $("#path").val() + "Login/validateLogin"; 
            
            //alert(path);
              
            $.ajax({                
                type: "POST",    
                url: path,
                datatype: "Json",
                data: $(this).serialize(),
                success: function (response) {
                    
                    //alert(response.message);
                    
                    if (response.message == "") {
                        document.location.href = response.redirect;
                    }else{
                        alert(response.message); 
                        return false;
                    }                  
                    
                }                
            });           

            return false;
        });
});


