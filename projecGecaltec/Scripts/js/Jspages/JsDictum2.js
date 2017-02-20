function loadDocument(data) {

    var path = $("#path").val();

    $("#hiddenResultDocument").removeAttr("style");
    $("#url_dictum").html("<a href=\"" + path + data.Path + "\" target=\"_blank\">Dictamen " + data.NumberFull + "-" + data.NumberSheet + "</a>");
    $("#description_dictum").html(data.Description);
    $("#url2_dictum").html("<a href=\"" + path + data.Path + "\" target=\"_blank\" >Descargar Aquí</a>");


    $("#hiddenNumberSheet").css({"display": "none"});
    $("#inp_no_dictamen").removeAttr("readonly");
    $("#inp_no_hoja").val("");
    $("#inp_no_dictamen").val("");
}


$(document).ready(function () {
$("#form_consult_dictum").submit(function () {


        //var validator = $("#form_consult_dictum").validate({/* settings */});
        //if ($("#form_consult_dictum").valid() === false) {
        //    validator.focusInvalid();
        //    return false;
        //}
        
        $("#btn_consulta").val("Por favor espere ...").attr("disabled", "disabled");


        if ($("#inp_no_hoja").val() === "") {

            var path = $("#path").val() + "Dictum/verifyDictum";
            //alert(path);
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

                        $("#hiddenNumberSheet").removeAttr("style");

                        $("#inp_no_dictamen").attr("readonly", "readonly");
                        $("#btn_consulta").val("Consultar Dictamen").removeAttr("disabled", "disabled");

                        $("#hiddenResultDocument").css({"display": "none"});

                    } else {
                        $("#alertMessageDanger").removeAttr("style");
                        $("#alertMessageSuccess").css({"display": "none"});
                        $("#messageDanger").html(response.message);

                        $("#hiddenResultDocument").css({"display": "none"});

                        $("#btn_consulta").val("Consultar Dictamen").removeAttr("disabled", "disabled");

                    }

                }
            });
        } else {
            var path = $("#path").val() + "Dictum/verifyDictumAndSheet";
            $.ajax({
                type: "POST",
                url: path,
                datatype: "Json",
                data: $(this).serialize(),
                success: function (response) {
                    if (response.status) {
                        $("#alertMessageSuccess").css({"display": "none"});
                        //$("#alertMessageDanger").css({"display": "none"});
                        //$("#messageSuccess").html(response.message);

                        $("#btn_consulta").val("Consultar Dictamen").removeAttr("disabled", "disabled");


                        loadDocument(response.data);


                    } else {
                        $("#alertMessageDanger").removeAttr("style");
                        $("#alertMessageSuccess").css({"display": "none"});
                        $("#messageDanger").html(response.message);

                        $("#hiddenNumberSheet").css({"display": "none"});
                        $("#hiddenResultDocument").css({"display": "none"});
                        $("#inp_no_dictamen").removeAttr("readonly");
                        $("#inp_no_hoja").val("");

                        $("#btn_consulta").val("Consultar Dictamen").removeAttr("disabled", "disabled");

                    }

                }
            });
        }

        return false;
    });
});