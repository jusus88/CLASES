 <?php 

class Usuario extends SGBD
{
	private $nombres;
	private $apellidos;
	private $dni;

	function __construct()
	{
		$this->nombres="Nuevo Usuario";
		$this->apellidos="Desconocido";
		$this->dni="S/N";
	}
		function __destruct()
		{
			echo "objeto empleado que ya no se usa";
			echo "..Borrando objeto";
		}

		//setter & getter
	public function setNombres($nombres)
	{
		//codigo que verifique y proteja tu objeto
	$this ->nombres=$nombres;
	}
	public function getNombres()
	{
		return $this->nombres;
	}

	function __toString()
	{
		var_dump($this);
	}
	function __invoke()
	{
		echo "Esta empleando de manera incorrecta el objeto";
	}


	public function guardar($nombres,$apellidos)
	{
		echo $nombres, ", ", $apellidos;
	}
	public function check_duplicados($nombres,$apellidos)
	{
		echo "no existe duplicados";
	}
	public function buscar($dato="")
	{
		echo "Sin datos a buscar, te mostrare todo";
	}
}

 ?>