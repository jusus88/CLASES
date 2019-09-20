<?php 

abstract class SGBD{
	abstract public function guardar($nombres,$apellidos);
	abstract public function check_duplicados($nombres,$apellidos);
	abstract public function buscar($dato="");
	/*abstract public function eliminar($dato);
	abstract public function modificar($dato);
	abstract public function actualizar($dato);
	abstract public function inicio();
	abstract public function fin();
	abstract public function anterior($actual);
	abstract public function siguiente($actual);*/

	

}

 ?>