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
               
            $.ajax({
                type: "POST",
                url: "Login/validateLogin",
                datatype: "Json",
                data: $(this).serialize(),
                success: function (response) {
                    if (response.message !== "") {
                        alert(response.message);
                    }
                }
            });           

            return false;
        });
});


