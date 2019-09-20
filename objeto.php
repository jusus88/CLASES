<?php 
class objeto
{
	private $caracteristicas;

	function __tostring()
	{
		echo "Instancia creada de la clase objeto";		
		echo "<hr/>";

	}
	function __invoke($a,$b)
	{
		echo $a+$b;

	}

	function __call($name,$argumnets)
	{
		echo "<br/>";
		echo"metodo llamando: :$name";
		echo "<br />";
		echo "Argumentos: ";
		foreach ($argumnets as $key => $value) 
		{
			echo $value,"  -  ";

		}
		echo "<hr/>";
	}
	function __set($nombre,$valor)
	{
		echo $nombre;
		echo "<br/>";
		echo "$valor";
	}
	function __callStatic($name,$argumnets)
	{
		echo "<br/>";
		echo"metodo llamado:$name";
		echo "<br />";
		echo "Argumentos: ";
		foreach ($argumnets as $key => $value) 
		{
			echo $value,"  -  ";

		}
		echo "<hr/>";
	}
}





 ?>