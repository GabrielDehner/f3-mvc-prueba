<h3>Agregar Usuario</h3>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <form action="{{@BASE}}/add" method="POST">
                <div class="form-group">
                    <label for="">Nombre del Usuario</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre">
                </div>
         
                <div class="form-group">  
                    <label for="">Telefono del Usuario</label>
                    <input type="telephone" class="form-control" name="telep" placeholder="Ingrese Telefono">
                </div>
        
                <div class="form-group">
                    <label for="">Email del Usuario</label>
                    <input type="email" class="form-control" name="email" placeholder="Ingrese email">
                </div>
                <hr>
                <input type="submit" class="btn btn-primary" style="float:right" value="Agregar">           
            </form>
        </div>
    </div>
</div>
<br>