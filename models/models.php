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
    public function get_equipos(){
        $consulta=$this->db->query("select * from equipos t1 inner join usuarios t2 on t1.idusuario=t2.idusuario;");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function search_user($palabra){
        $consulta=$this->db->query("select * from usuarios where idUsuario like '".$palabra."%' or Nombre like '".$palabra."%' or Paterno like '".$palabra."%' or Materno like '".$palabra."%' or Departamento like '".$palabra."%'  ;");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function search_machine($palabra){
        $consulta=$this->db->query("select * from equipos t1 inner join usuarios t2 on t1.idusuario=t2.idusuario where Marca like '".$palabra."%' or Modelo like '".$palabra."%' or Serie like '".$palabra."%' or IdInventario like '".$palabra."%' or t1.IdUsuario like '".$palabra."%' or Nombre like '".$palabra."%' or Paterno like '".$palabra."%'  or Materno like '".$palabra."%'  ;");
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
    public function add_equipo($marca,$modelo,$serie,$inv,$user,$hd,$ram,$procesador,$fechacompra,$fechagar){        
        $consulta=$this->db->query("insert into equipos values(null,'$marca','$modelo','$serie','$inv',$user,'$hd','$ram','$procesador','$fechacompra','$fechagar');");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function update_user($cuenta,$nombre,$paterno,$materno,$departamento,$nivelDeConfianza,$email,$tel,$ext){
        $consulta=$this->db->query("update Usuarios set Nombre='$nombre', Paterno='$paterno', Materno='$materno', "
                                . "Departamento='$departamento', NivelDeConfianza='$nivelDeConfianza', Email='$email', Telefono='$tel', Extencion='$ext' where idUsuario=$cuenta; ");                                
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function delete_user($cuenta){
        $consulta=$this->db->query("delete from usuarios where idUsuario=$cuenta;");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
}
?>