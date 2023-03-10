<h1 class="page-header">Productos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-info" href="?c=Alumno&a=Crud">Nuevo producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
          <th style="width:150px;" >Código</th>
            <th  >Descripción</th>
            <th  style="width:150px;" >Costo</th>
            <th >Stock</th>
            <th style="width:200px; margin-right: auto;">Imagen</th>
            <th style="width:30px;"></th>
            <th style="width:30px;"></th>
            
        </tr>
    </thead>
    
    
    
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
           
            <td><?php echo $r->__GET('Nombre'); ?></td>
            <td><?php echo $r->__GET('Apellido'); ?></td>
            <td><?php echo $r->__GET('Correo'); ?></td>
           
            <td><?php echo $r->__GET('FechaNacimiento'); ?></td>
             <td>
                <?php if($r->__GET('Foto') != ''): ?>
                    <img src="uploads/<?php echo $r->__GET('Foto'); ?>" style="width:100%;" />
                <?php endif; ?> 
            </td>
            <td>
                <a  class="btn btn-success" href="?c=Alumno&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    
    <tfoot>
        <tr>
            <td colspan="8" class="text-center">
               
            </td>
        </tr>
    </tfoot>
</table> 
