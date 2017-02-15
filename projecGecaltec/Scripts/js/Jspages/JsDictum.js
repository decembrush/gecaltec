/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).on('load', function () {

    //alert('Window load');

    //list of dictum
    listOfDictum();

});

function listOfDictum() {

    var path = $("#path").val() + "Dictum/listDictum";

    $.ajax({
        //type: "POST",    
        url: path,
        datatype: "Json",
        processData: false,
        contentType: false,
        success: onSuccess
    });

}

function onSuccess(response) {

    var path = $("#path").val();
    $('#RowDictums').html('');
    var trHTML = '';


    for (var i = 0; i < response.List.length; i++) {

        trHTML += ('<tr><td>' + response.List[i].NumberDictum + "-" + response.List[i].Year + "</td>"
                + "<td>" + response.List[i].NumberSheet + "</td>"
                + "<td>" + response.List[i].Description + "</td>"
                + "<td>" + response.List[i].DateCreate + "</td>"
                + "<td>" + "<a href=\"" + path + response.List[i].Path + "\" target=\"_blank\">" + response.List[i].Name + "</a>" + "</td>"
                + "<td>"

                + "<div class=\"cnt_btn_icons\">"

                + "<a href=\"" + path + response.List[i].Path + "\" target=\"_blank\" class=\"btn btn-icon btn-icon-g\"><i class=\"fa fa-eye\"></i></a>"
                + "<button onclick=\"deleteDictum(" + response.List[i].Id + ")\" class=\"btn btn-icon btn-icon-r\"><i class=\"fa fa-trash\"></i></button>"

                + "</div>"
                + "</tr>");

    }
    $('#RowDictums').html(trHTML);

}

function deleteDictum(id) {
    //alert(id);
    var r = confirm("Esta seguro que desea eliminar este dictamen?");
    if (r == false) {
        return false;
    }

    var path = $("#path").val() + "Dictum/deleteDictumById";
    $.ajax({
        type: "POST",
        url: path,
        datatype: "Json",
        data: {'id': id},
        success: function (response) {
            if (response.status) {
                $("#alertMessageSuccess2").removeAttr("style");
                $("#alertMessageDanger2").css({"display": "none"});
                $("#messageSuccess2").html(response.message);

                listOfDictum();
                //location.reload();

            } else {
                $("#alertMessageDanger2").removeAttr("style");
                $("#alertMessageSuccess2").css({"display": "none"});
                $("#messageDanger2").html(response.message);
            }

        }
    });

    return false;
}

$(document).ready(function () {

    $("#form-nDictamen").submit(function () {

        var validator = $("#form-nDictamen").validate({ /* settings */});
        if ($("#form-nDictamen").valid() === false) {

            validator.focusInvalid();
            return false;
        }

//var filenameSi = $("#fileImgSi").val();
        var fileUpload = $("#file-2").val();
        var extension = fileUpload.replace(/^.*\./, '');

        // Iff there is no dot anywhere in filename, we would have extension == filename,
        // so we account for this possibility now
        if (extension == fileUpload) {
            extension = '';
        } else {
            // if there is an extension, we convert to lower case
            // (N.B. this conversion will not effect the value of the extension
            // on the file upload.)
            extension = extension.toLowerCase();
        }


//alert($("#file-2").get(0).files);
        if ($("#file-2").get(0).files.length == 0) {
            $("#alertMessageDanger").removeAttr("style");
            $("#alertMessageSuccess").css({"display": "none"});
            $("#messageDanger").html("El documento es requerido.");
            return false;
        }

        //alert($("#file-2").get(0).files[0].size);

        if ($("#file-2").get(0).files[0].size > 5242880) {
            $("#alertMessageDanger").removeAttr("style");
            $("#alertMessageSuccess").css({"display": "none"});
            $("#messageDanger").html("El documento tiene un tamaño mayor a 5MB.");
            return false;
        }

        switch (extension) {
            case 'pdf':
                break;
            default:
                $("#alertMessageDanger").removeAttr("style");
                $("#alertMessageSuccess").css({"display": "none"});
                $("#messageDanger").html("El tipo de extension del archivo: " + extension + ", es invalido");

                return false;
        }

        var path = $("#path").val() + "Dictum/insertDocument";

        $("#nDic_btnSave").val("Por favor espere ...").attr("disabled", "disabled");
        //walert(path);
        var data = new FormData();
        data.append("nDic_iden", $("#nDic_iden").val());
        data.append("nYear", $("#nYear").val());
        data.append("nDic_cod", $("#nDic_cod").val());
        data.append("nDic_decrip", $("#nDic_decrip").val());
        data.append("file_2", $("#file-2").get(0).files[0]);

        $.ajax({
            type: "POST",
            url: path,
            datatype: "Json",
            contentType: false,
            processData: false,
            data: data,
            success: function (response) {
                if (response.status) {
                    $("#alertMessageSuccess").removeAttr("style");
                    $("#alertMessageDanger").css({"display": "none"});
                    $("#messageSuccess").html(response.message);

                    $("#nDic_btnSave").val("Guardar").removeAttr("disabled", "disabled");

                    var input = $("input[name=file-2]");
                    var fileName = input.val();

                    if (fileName) { // returns true if the string is not empty
                        input.val('');
                    }

                    //$("#file-2").get(0).files[0].val('');
                    $("#form-nDictamen")[0].reset();
                    listOfDictum();
                    //location.reload();

                } else {
                    $("#alertMessageDanger").removeAttr("style");
                    $("#alertMessageSuccess").css({"display": "none"});
                    $("#messageDanger").html(response.message);

                    $("#nDic_btnSave").val("Guardar").removeAttr("disabled", "disabled");

                }

            }
        });


        return false;
    });


    $("#form-nDictamen2").submit(function () {

        var validator = $("#form-nDictamen2").validate({ /* settings */});
        if ($("#form-nDictamen2").valid() === false) {

            validator.focusInvalid();
            return false;
        }

        var str = $("#inp_no_dictamen").val();
        if (str.indexOf('-') === -1) {
            $("#alertMessageDanger").removeAttr("style");
            $("#alertMessageSuccess").css({"display": "none"});
            $("#messageDanger").html("Numero de dictamen incorrecto, por favor verifique.");
            return false;
        }

        var path = $("#path").val() + "Dictum/verifyDictamen";

        if ($("#inp_no_hoja").val() === "") {
            $.ajax({
                type: "POST",
                url: path,
                datatype: "Json",
                contentType: false,
                processData: false,
                data: $(this).serialize(),
                success: function (response) {
                    if (response.status) {
                        $("#alertMessageSuccess").removeAttr("style");
                        $("#alertMessageDanger").css({"display": "none"});
                        $("#messageSuccess").html(response.message);

                        $("#btn_consulta").val("Consultar Dictamen").removeAttr("disabled", "disabled");

                        $("#hiddenNumberSheet").removeAttr("style");

                        $("#inp_no_dictamen").attr("readonly", "readonly");


                    } else {
                        $("#alertMessageDanger").removeAttr("style");
                        $("#alertMessageSuccess").css({"display": "none"});
                        $("#messageDanger").html(response.message);

                        $("#btn_consulta").val("Consultar Dictamen").removeAttr("disabled", "disabled");

                    }

                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: path,
                datatype: "Json",
                contentType: false,
                processData: false,
                data: $(this).serialize(),
                success: function (response) {
                    if (response.status) {
                        $("#alertMessageSuccess").removeAttr("style");
                        $("#alertMessageDanger").css({"display": "none"});
                        $("#messageSuccess").html(response.message);

                        $("#btn_consulta").val("Consultar Dictamen").removeAttr("disabled", "disabled");

                        
                        loadDocument();


                    } else {
                        $("#alertMessageDanger").removeAttr("style");
                        $("#alertMessageSuccess").css({"display": "none"});
                        $("#messageDanger").html(response.message);

                        $("#btn_consulta").val("Consultar Dictamen").removeAttr("disabled", "disabled");

                    }

                }
            });
        }

        return false;
    });

});


