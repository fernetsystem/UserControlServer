<div class="container">    
    
    <br><br>
    <form action="index.php?c=controller&a=buscarUsuarios&palabra=palabra; ?>" method="post" class="form-inline">     
        <span class="pull-left" style="font-size:40px; font-family: sans-serif">Usuarios</span>
    <div class="pull-right">    
        <input type="text" placeholder="Usuario" name="palabra"  class="form-control">
        <input type="submit" value="Buscar" class="form-control btn btn-default "> 
                    <a class="btn btn-primary " href="index.php?c=controller&a=registrarUsuario&; ?">Agregar usuario</a>
                    </div>
    </form><br>
    <br><br><br>
    </div>
<table class="table table-hover table-responsive">
        <thead>
          <tr>
              <th>Cuenta</th>
              <th>Nombre</th>
              <th>Departamento</th>
              <th>Nivel de conf.</th>
              <th>Email</th>
              <th>Teléfono</th>
              <th>Extención</th>
              <th></th>
              <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($datosUsuarios as $datos){
            echo "<tr>";
            echo "<td> ".$datos['idUsuario']."</td>";
	    echo "<td> ".$datos['Nombre']." ".$datos['Paterno']." ".$datos['Materno']." </td>";            
            echo "<td> ".$datos['Departamento']."</td>";
            echo "<td> ".$datos['NivelDeConfianza']."</td>";
            echo "<td> ".$datos['Email']."</td>";
            echo "<td> ".$datos['Telefono']."</td>";
            echo "<td> ".$datos['Extencion']."</td>";
            echo "<td><a href='index.php?c=controller&a=formEditarUsuario&cuenta=".$datos['idUsuario']."&; ?' class='btn btn-primary btn-xs'>Editar</a></td>";
            echo "<td><a href='index.php?c=controller&a=eliminarUsuario&cuenta=".$datos['idUsuario']."&; ?' class='btn btn-danger btn-xs'>Eliminar</a></td>";

            echo "</tr>";  }
        	 ?>
        </tbody>
</table>




