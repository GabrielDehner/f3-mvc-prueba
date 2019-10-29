var save_method; //for save method string
var table;
function edit_person1(idUsr){
    alert('llego'+idUsr);
}
/*
function edit_person(idUsr) {
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
  
    $.ajax({
        //url : "/f3-mvc-prueba/ajax_edit/" + idUsr,
        //url : "/f3-mvc-prueba/ajax_edit/" + idUsr,
        url : "/f3-mvc-prueba/ajax_edit/" + idUsr,
        type: "GET",
        async: 'true',
        dataType: "JSON",
        
        success: function(data)
        {
            alert(data);
            /*
            //alert(data.email);
            $('[name="idUsr"]').val(data.id);
            $('[name="name"]').val(data.nombre);
            $('[name="telephone"]').val(data.telefono);
            $('[name="email"]').val(data.email);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Editar Usuario'); // Set title to Bootstrap modal title
            *//*

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);

            alert('Error get data from ajax');
        }
    });
    /*$('[name="idUsr"]').val("1");
    $('[name="name"]').val("2");
    $('[name="telephone"]').val("3");
    $('[name="email"]').val("4");
    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
    $('.modal-title').text('Editar Usuario');*/
    //alert('llego'+idUsr);
//}
function edit_person(idUsr) {
    $.get("/f3-mvc-prueba/ajax_edit/" + idUsr, function (data) {
        console.log(data);
    });
}
function save(){

    if($('#name').val()!='' && $('#surname').val()!='' && $('#telephone').val()!='' && $('#sex').val()!='' && $('#birthday').val()!='' && $('#email').val()!='') {

        $('#btnSave').text('Guardando...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable

        var url;

        if (save_method == 'add') {
            url = "noexiste/ajax_add";
        } else {
            url = "UpdateUsers/ajax_update";
        }

        //if(save_method == 'add') {
        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function (data) {


                $('#modal_form').modal('hide');
                reload_table(data);


                $('#btnSave').text('Guardar'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable


            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable

            }
        });

    }else{
        alert("Complete todos los campos");
    }
}
