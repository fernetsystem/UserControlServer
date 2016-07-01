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
}
?>