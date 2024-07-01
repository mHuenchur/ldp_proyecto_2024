<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="inicio/index">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Usuario</li>
  </ol>
</nav>

<div class="container-fluid">
    <table class="table table-responsive table-bordered table-striped table-secondary text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Cuenta</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
<?php
    $orden = 1;
    if(count($data) == 0){
        echo '<tr><td colspan="5"></td></tr>';
    }else{
        foreach($data as $cuenta){
            echo '<tr>';
            echo '<td>' . ($orden++) . '</td>';
            echo '<td>' . $cuenta[1] . '</td>';
            echo '<td>' . ($cuenta[2] === 1 ? 'Administrador' : 'Operador') . '</td>';
            if($cuenta[3] === 1){
                echo '<td><h5><span class="badge text-bg-primary">activo</span></h5></td>';
            }else{
                echo '<td><span class="badge text-bg-secondary">inactivo</span></td>';
            }
            echo '<td><a class="btn-consulta btn btn-warning" href="usuario/edit/'. ($cuenta[0]) .'" role="button">Consulta</a>';
            echo '<a class="btn btn-danger" href="usuario/delete" role="button">Eliminar</a></td>';
            echo '</tr>';
        }
    }
    
?>
        </tbody>
    </table>
</div>