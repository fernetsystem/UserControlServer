<?php 
class model{
    
    private $db;
    private $myDataGet=array();
    
    public function __construct(){
	$this->db=Conectar::conexion();
	$this->myDataGet=array();
    }
            
    public function get_usuarios(){
        $consulta=$this->db->query("select * from usuarios;");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function add_user($cuenta,$nombre,$paterno,$materno,$departamento,$nivelDeConfianza,$email,$tel,$ext){        
        $consulta=$this->db->query("insert into usuarios values($cuenta,'$nombre','$paterno','$materno','$departamento','$nivelDeConfianza','$email','$tel','$ext');");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }    
}
?>