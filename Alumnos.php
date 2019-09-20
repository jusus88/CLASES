<?php 


class Alumnos extends Usuario
{
	private $carrera;
	private $semestre;

function __construct()
{	
	parent::__construct(); /// para no borrar el construct anterior
	$this->carrera="computacion";
	$this->semestre="VI";
}
	public function Carrera($carrera)
	{
		//codigo de seguridad 
		$this->carrera=$carrera;
	} 
	public function Semestre($semestre)
	{
		$this ->semestre=$semestre;
	} 
	public function setCarrera($carrera)
	{
		//codigo de seguridad 
		return $this->carrera;
	} 
	public function getSemestre($semestre)
	{
		return $this->semestre;
	} 

}

 ?>