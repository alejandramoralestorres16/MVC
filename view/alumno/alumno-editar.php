<h1 class="page-header">
    <?php echo $alm->__GET('id') != null ? $alm->__GET('Nombre') : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">Productos</a></li>
  <li class="active"><?php echo $alm->__GET('id') != null ? $alm->__GET('Nombre') : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
    
    <div class="form-group">
        <label>Código</label>
        <input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" class="form-control" placeholder="Ingrese código" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="Apellido" value="<?php echo $alm->__GET('Apellido'); ?>" class="form-control" placeholder="Ingrese descripción" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Costo</label>
        <input type="text" name="Correo" value="<?php echo $alm->__GET('Correo'); ?>" class="form-control" placeholder="Ingrese costo " data-validacion-tipo="requerido|email" />
    </div>
   
    
    <div class="form-group">
        <label>Stock</label>
        <input  type="text" name="FechaNacimiento" value="<?php echo $alm->__GET('FechaNacimiento'); ?>" class="form-control datepicker" placeholder="Ingrese stock"  />
    </div>
    
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Producto</label>
                <input type="hidden" name="Foto"  value="<?php echo $alm->__GET('Foto'); ?>" />
                <input type="file" name="Foto" class="form-control datepicker"    placeholder="Ingrese una imagen" />
            </div>     
        </div>
        <div class="col-xs-6">
            <?php if($alm->__GET('Foto') != ''): ?>
                <div class="img-thumbnail text-center">
                    <img src="uploads/<?php echo $alm->__GET('Foto'); ?>" style="width:50%;" />
                </div>
            <?php endif; ?>            
        </div>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>