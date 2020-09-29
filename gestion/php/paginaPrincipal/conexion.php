<?php
	class conexion
	{
		private $servidor;
		private $usuario;
		private $contraseña;
		private $basedatos;
		public  $conexion;

		public function __construct(){
			// $this->servidor   = "localhost";
			// $this->usuario	  = "u401522299_geromettamatia";
			// $this->contraseña = "Aqwerty.22";
			// $this->basedatos  = "u401522299_paginaprincipa";



			$this->servidor   = "localhost";
			$this->usuario	  = "u574277858_secu2";
			$this->contraseña = "123";
			$this->basedatos  = "u574277858_epgs2secu2";




		}

		function conectar(){
			$this->conexion= new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->basedatos);
		}

		function cerrar(){
			$this->conexion->close();
		}
	}

?>