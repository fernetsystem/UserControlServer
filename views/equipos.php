<div class="container">    
    
    <br><br>
    <form action="index.php?c=controller&a=buscarEquipo&palabra=palabra; ?>" method="post" class="form-inline">     
        <span class="pull-left" style="font-size:40px; font-family: sans-serif">Equipos</span>
    <div class="pull-right">    
        <input type="text" placeholder="Buscar equipo" name="palabra" class="form-control">
        <input type="submit" value="Buscar" class="form-control btn btn-default "> 
                    <a class="btn btn-primary " href="index.php?c=controller&a=registrarEquipo&; ?">Agregar equipo</a>
                    </div>
    </form><br>
    <br><br><br>
</div>
<table class="table table-hover ">
        <thead>
          <tr>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Serie</th>
              <th>Inventario</th>
              <th>Cuenta</th>
              <th>Usuario</th>
              <th>Disco duro</th>
              <th>Ram</th>
              <th>Procesador</th>
              <th>Compra</th>
              <th>Garantia</th>
              <th></th><th></th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($datosEquipos as $datos){
            echo "<tr>";
	    echo "<td> ".$datos['Marca']."</td>";
            echo "<td> ".$datos['Modelo']."</td>";
            echo "<td> ".$datos['Serie']."</td>";
            echo "<td> ".$datos['IdInventario']."</td>";
            echo "<td> ".$datos['IdUsuario']."</td>";
            echo "<td> ".$datos['Nombre']." ".$datos['Paterno']." ".$datos['Materno']." </td>";            
            echo "<td> ".$datos['DiscoDuro']."</td>";
            echo "<td> ".$datos['MemoriaRam']."</td>";
            echo "<td> ".$datos['Procesador']."</td>";
            echo "<td> ".$datos['FechaDeCompra']."</td>";
            echo "<td> ".$datos['VencimientoDeGarantia']."</td>";  
            echo "<td><a href='index.php?c=controller&a=formEditarEquipo&idEquipos=".$datos['idEquipos']."&; ?' class='btn btn-primary btn-xs'>Editar</a></td>";
            echo "<td><a href='index.php?c=controller&a=eliminarEquipo&idEquipos=".$datos['idEquipos']."&; ?' class='btn btn-danger btn-xs'>Eliminar</a></td>";           
        }?>
        </tbody>
</table>

</div>