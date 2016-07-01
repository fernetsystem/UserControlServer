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
}
?>
