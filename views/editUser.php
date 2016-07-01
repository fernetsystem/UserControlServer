<div class="container">
    <div class="page-header">
        <h1>Modificar <small>usuario</small></h1>
    </div>
    <?php  foreach ($datosUsuario as $datos){?>
    <div class="row col-xs-12">    
        <form role="form" action="index.php?c=controller&a=editarUsuario&nombre=nombre&paterno=paterno&materno=materno&tel=tel&ext=ext&email=email&cuenta=cuentan&departamento=departamento&nivelDeConfianza=nivelDeConfianza; ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required="El nombre es obligatorio" value=<?php echo $datos['Nombre']; ?> >
                </div>    
                <div class="form-group col-md-4 col-sm-4">
                    <label for="paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="paterno" name="paterno" required="El apellido es obligatorio" value=<?php echo $datos['Paterno']; ?> >
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="materno">Apellido Materno</label>
                    <input type="text" class="form-control" id="materno" name="materno" required="El apellido es obligatorio" value=<?php echo $datos['Materno']; ?> >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="cuenta">Cuenta</label>
                    <input type="text" class="form-control" id="cuenta" name="cuenta" required="Ingrese una cuenta" value=<?php echo $datos['idUsuario']; ?>>
                </div>               
                <div class="form-group col-md-4 col-sm-4">
                    <label for="departamento">Departamento</label>
<!--                    <input type="text" class="form-control" id="sangre" name="sangre" placeholder="repita su password">-->
                    <select class="form-control" id="select" name="departamento">
                        
                        <option value="Administración">Administración</option>
                        <option value="Contabilidad">Contabilidad</option>
                        <option value="Desarrollo">Desarrollo</option>
                        <option value="Finanzas">Finanzas</option>
                        <option value="Recursos Humanos">Recursos Humanos</option>
                        <option value="Sistemas">Sistemas</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="nivelDeConfianza">Nivel de confianza</label>
                    <select class="form-control" id="select" name="nivelDeConfianza">
                        <option selected><?php echo $datos['NivelDeConfianza']; ?></option>
                        <option value="Copropietario">Copropietario</option>
                        <option value="Colaborador">Colaborador</option>
                        <option value="Lectura">Lectura</option>
                    </select>
                </div>
            </div>
            <div class="row">                
                <div class="form-group col-md-4 col-sm-4">
                    <label for="tel">Teléfono</label>
                    <input type="tel" class="form-control" id="tel" name="tel" value=<?php echo $datos['Telefono']; ?>>
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="ext">Extención</label>
                    <input type="text" class="form-control" id="ext" name="ext"value=<?php echo $datos['Extencion']; ?>>
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value=<?php echo $datos['Email'];} ?>>
                </div>
            </div>            
                <input type="submit" value="Aceptar" class="btn btn-primary"/>            
                <a href="index.php?c=controller&a=listadoUsuarios2&; ?" class="btn btn-danger">Cancelar</a>
            </form>    
    </div>
</div>





