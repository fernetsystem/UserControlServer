<div class="container">
    <div class="page-header">
        <h1>REGISTRAR <small>usuario</small></h1>
    </div>
    <div class="row col-xs-12">    
        <form role="form" action="index.php?c=controller&a=agregarUsuario&nombre=nombre&paterno=paterno&materno=materno&tel=tel&ext=ext&email=email&cuenta=cuentan&departamento=departamento&nivelDeConfianza=nivelDeConfianza; ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca nombre" required="El nombre es obligatorio">
                </div>    
                <div class="form-group col-md-4 col-sm-4">
                    <label for="paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Introduzca apellido paterno" required="El apellido es obligatorio">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="materno">Apellido Materno</label>
                    <input type="text" class="form-control" id="materno" name="materno" placeholder="Introduzca apellido materno" required="El apellido es obligatorio">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-sm-4">
                    <label for="cuenta">Cuenta</label>
                    <input type="text" class="form-control" id="cuenta" name="cuenta" placeholder="Número de cuenta">
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
                        <option value="Copropietario">Copropietario</option>
                        <option value="Colaborador">Colaborador</option>
                        <option value="Lectura">Lectura</option>
                    </select>
                </div>
            </div>
            <div class="row">                
                <div class="form-group col-md-4 col-sm-4">
                    <label for="tel">Teléfono</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="Teléfono">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="ext">Extención</label>
                    <input type="text" class="form-control" id="ext" name="ext" placeholder="Extención" >
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email del usuario">
                </div>
            </div>            
                <input type="submit" value="Aceptar" class="btn btn-primary"/>            
                <a href="index.php?c=controller&a=listadoPacientes2&; ?" class="btn btn-danger">Cancelar</a>
            </form>    
    </div>
</div>
