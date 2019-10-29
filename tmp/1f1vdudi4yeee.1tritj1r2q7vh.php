<hr>
<h3>Tabla Usuarios </h3>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach (($users?:[]) as $user): ?>
                    <tr>
                        <td><?= ($user['nombre']) ?></td>
                        <td><?= ($user['telefono']) ?></td>
                        <td><?= ($user['email']) ?></td>
                        <td>
                            <a href="<?= ($BASE) ?>/remove/<?= ($user['id']) ?>">
                                <button class="btn btn-danger btn-sm">
                                    Borrar
                                </button>
                            </a>
                            <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person(<?= ($user['id']) ?>)"> Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>

<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Registrar Hospedadores</h3>
            </div>

            <div class="modal-body form">

                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="idUsr" id="idUsr"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nombres</label>
                            <div class="col-md-9">
                                <input name="name" id="name" placeholder="Nombres" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3">Tel&eacute;fono</label>
                            <div class="col-md-9">
                                <input name="telephone" id="telephone" placeholder="Tel&eacute;fono" class="form-control" type="tel">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                    
                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input name="email" id="email" value="0" class="form-control" type="email">
                                <span class="help-block"></span>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    /*function new_function(id){
        $.ajax(
        //'/f3-mvc-prueba/assets/js/prueba_php.php',
        //'/f3-mvc-prueba/apps/controllers/HomeController.php',
        '/f3-mvc-prueba/ajax_edit/'+id,
        {
            success: function(data) {
                //alert('AJAX call was successful!');
                alert('Data from the server' + data);
            },
            error: function() {
                alert('There was some error performing the AJAX call!');
            }
        }
        );
    }*/
</script>