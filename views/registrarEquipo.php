<div class="container">
    <div class="page-header">
        <h1>REGISTRAR <small>equipo</small></h1>
    </div>
    <div class="row col-xs-12">    
            <form role="form" action="index.php?c=controller&a=agregarEquipo&marca=marca&modelo=modelo&serie=serie&inv=inv&user=user&fechacompra=fechacompra&fechagar=fechagar&hd=hd&procesador=procesador&ram=ram; ?>" method="post">
                <div class="row">
                    <div class="form-group col-md-4 col-sm-4  ">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Introduzca marca" required="">
                    </div>    
                    <div class="form-group col-md-4 col-sm-4  ">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Introduzca modelo" required="">
                    </div>
                    <div class="form-group col-md-4 col-sm-4 ">
                        <label for="serie">Serie</label>
                        <input type="text" class="form-control" id="serie" name="serie" placeholder="número de serie" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="inv">Inventario</label>
                        <input type="inv" class="form-control" id="inv" name="inv" placeholder="Introduzca número de inventario" required="">
                    </div>
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="hd">Disco duro</label>
                        <input type="text" class="form-control" id="hd" name="hd" placeholder="Capacidad de disco duro" required="">
                    </div>                
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="ram">Memoria ram</label>
                        <input type="text" class="form-control" id="ram" name="ram" placeholder="Memoria ram" required="">
                    </div>
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="procesador">Procesador</label>
                        <input type="text" class="form-control" id="procesador" name="procesador" placeholder="Procesador"required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Usuario asignado" required="">
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="fechacompra">Fecha de compra</label>
                        <input type="date" class="form-control " id="fechacompra" name="fechacompra" required="">
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="fechagar">Vencimento de garantia</label>
                        <input type="date" class="form-control " id="fechagar" name="fechagar"  required="">
                    </div>
                </div>                                    
                <input type="submit" value="Aceptar" class="btn btn-primary"/>            
            </form>    
    </div>
</div>