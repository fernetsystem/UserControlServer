<?php 

require_once("models/models.php");

class controller{

    private $Mymodel;    
    public function __construct(){
	$this->myModel = new model();
    }
    
    public function Index(){
        require_once 'views/main.php';               
    }

    public function registrarEquipo(){
        require_once 'views/header.inc';	
        require_once 'views/registrarEquipo.php';        
        require_once 'views/footer.inc';        
    }
    
    public function registrarUsuario(){
        require_once 'views/header.inc';	
        require_once 'views/registrarUsuario.php';            
        require_once 'views/footer.inc';        
    }
    

    public function listadoUsuarios(){               
        $datosUsuarios = $this->myModel->get_usuarios();
        require_once 'views/usuarios.php';                           
        require_once 'views/footer.inc';
    }
    public function listadoUsuarios2(){               
        require_once 'views/header.inc';
        $datosUsuarios = $this->myModel->get_usuarios();
        require_once 'views/usuarios.php';                           
        require_once 'views/footer.inc';
    }
    public function listadoEquipos(){               
        require_once 'views/header.inc';
        $datosEquipos = $this->myModel->get_equipos();
        require_once 'views/equipos.php';                           
        require_once 'views/footer.inc';
    }
    public function agregarUsuario(){            
       $datos = $this->myModel->add_user($_REQUEST['cuenta'],$_REQUEST['nombre'],$_REQUEST['paterno'],$_REQUEST['materno'],$_REQUEST['departamento'],$_REQUEST['nivelDeConfianza'],$_REQUEST['email'],$_REQUEST['tel'],$_REQUEST['ext']);
       if($datos > 0){
           require_once 'views/header.inc';
           echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>Operacion exitosa!</strong> usuario registrado .'.
                  '</div></div>';
        $myController = new controller();
        $myController->listadoUsuarios();	
	
	}else{
	require_once 'views/header.inc';
	echo '<div class="container"><div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> Ocurrio un error, intentelo de nuevo.'.
                  '</div></div>';
        $myController = new controller();
        $myController->listadoUsuarios();	

	}
    }
    public function agregarEquipo(){        
       $datos = $this->myModel->add_equipo($_REQUEST['marca'],$_REQUEST['modelo'],$_REQUEST['serie'],$_REQUEST['inv'],$_REQUEST['user'],$_REQUEST['hd'],$_REQUEST['ram'],$_REQUEST['procesador'],$_REQUEST['fechacompra'],$_REQUEST['fechagar']);
       if($datos > 0){
            require_once 'views/header.inc';
            echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>Operacion exitosa!</strong> equipo registrado .'.
                  '</div></div>';
            $myController = new controller();
            $myController->listadoEquipos();		
	}else{
        require_once 'views/header.inc';
	echo '<div class="container"><div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> Ocurrio un error, intentelo de nuevo.'.
                  '</div></div>';
        $myController = new controller();
        $myController->listadoEquipos();	
	}
    }
    public function formEditarUsuario(){        
        require_once 'views/header.inc';	        
        $datosUsuario = $this->myModel->get_datos_user($_REQUEST['cuenta']);        
        require_once 'views/editUser.php';	        
        require_once 'views/footer.inc';
    }
    public function editarUsuario(){                
        $datos = $this->myModel->update_user($_REQUEST['cuenta'],$_REQUEST['nombre'],$_REQUEST['paterno'],$_REQUEST['materno'],$_REQUEST['departamento'],$_REQUEST['nivelDeConfianza'],$_REQUEST['email'],$_REQUEST['tel'],$_REQUEST['ext']);        
        if($datos > 0){
        require_once 'views/header.inc';
	echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>Operacion exitosa!</strong> cambios realizados correctamente .'.
                  '</div></div>';           
        $myController = new controller();
        $myController->listadoUsuarios();	

	}else{
        require_once 'views/header.inc';
	echo '<div class="container"><div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> Ocurrio un error, intentelo de nuevo.'.
                  '</div></div>';
        $myController = new controller();
        $myController->listadoUsuarios();	
	}
    }
    public function eliminarUsuario(){        
        $datos = $this->myModel->delete_user($_REQUEST['cuenta']);
        if($datos > 0){
        require_once 'views/header.inc';    
        echo '<div class="container"><div class="alert alert-success fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>Operacion exitosa!</strong> Usuario eliminado .'.
                  '</div></div>';            
         $myController = new controller();
        $myController->listadoUsuarios();	

	}else{
    require_once 'views/header.inc';
	echo '<div class="container"><div class="alert alert-danger fade in">'.
                      '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                       '<strong>ERROR!</strong> Ocurrio un error, intentelo de nuevo.'.
                  '</div></div>';
         $myController = new controller();
        $myController->listadoUsuarios();                   
	}
     
    }
}
?>