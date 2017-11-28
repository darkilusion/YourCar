<?php

class Database extends PDO{
	public function __construct(){
		try{
		
			parent::__construct('mysql:host=localhost;dbname=YourCar','root','');
			parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $ex){
		
			//echo $ex->getMessage();
			die("la base de datos seleccionada no existe");
		}
	}

}

