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
}
?>
