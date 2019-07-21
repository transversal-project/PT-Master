<?php

namespace App\Config;
use \PDO;
class Database
{
	private $bd;
	public function __construct(){
		
			# code...
		 $this->bd = new PDO('mysql:dbname=projettrans;host=localhost','root','');
		 $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		
	//return  $this->bd;
	}

	public function getDB()
	{
		return $this->bd;
	}
	public function query($sql)
	{
		$stmt = $this->bd->query($sql);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}