<div class="container">
    <div class="page-header">
        <h1>MODIFICAR <small>equipo</small></h1>
    </div>
    <?php  foreach ($datosEquipo as $datos){?>
    <div class="row col-xs-12">    
            <form role="form" action="index.php?c=controller&a=editarEquipo&idEquipo=idEquipo&marca=marca&modelo=modelo&serie=serie&inv=inv&user=user&fechacompra=fechacompra&fechagar=fechagar&hd=hd&procesador=procesador&ram=ram; ?>" method="post">
                <input type="hidden" name="idEquipo" value=<?php echo $datos['idEquipos'];?>>
                <div class="row">
                    <div class="form-group col-md-4 col-sm-4  ">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" value=<?php echo $datos['Marca'];?> >
                    </div>    
                    <div class="form-group col-md-4 col-sm-4  ">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value=<?php echo $datos['Modelo'];?>>
                    </div>
                    <div class="form-group col-md-4 col-sm-4 ">
                        <label for="serie">Serie</label>
                        <input type="text" class="form-control" id="serie" name="serie" required="" value=<?php echo $datos['Serie'];?>>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="inv">Inventario</label>
                        <input type="inv" class="form-control" id="inv" name="inv" required="" value=<?php echo $datos['IdInventario'];?>>
                    </div>
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="hd">Disco duro</label>
                        <input type="text" class="form-control" id="hd" name="hd" required="" value=<?php echo $datos['DiscoDuro'];?>>
                    </div>                
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="ram">Memoria ram</label>
                        <input type="text" class="form-control" id="ram" name="ram" required="" value=<?php echo $datos['MemoriaRam'];?>>
                    </div>
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="procesador">Procesador</label>
                        <input type="text" class="form-control" id="procesador" name="procesador" required="" value=<?php echo $datos['Procesador'];?>>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Usuario asignado" required="" value=<?php echo $datos['IdUsuario'];?>>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="fechacompra">Fecha de compra</label>
                        <input type="text" class="form-control " id="fechacompra" name="fechacompra"  value=<?php echo $datos['FechaDeCompra'];?>>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="fechagar">Vencimento de garantia</label>
                        <input type="text" class="form-control " id="fechagar" name="fechagar"  value=<?php echo $datos['VencimientoDeGarantia'];}?>>
                    </div>
                </div>                                    
                <input type="submit" value="Aceptar" class="btn btn-primary"/>            
                <a href="index.php?c=controller&a=listadoEquipos&; ?" class="btn btn-danger">Cancelar</a>
            </form>    
    </div>
</div>
