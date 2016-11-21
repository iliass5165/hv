<?php 
class Mypdo
{
	protected $connection;
	public function __construct()
	{
		try 
		{
			$this->connection = new PDO("mysql:host=localhost;dbname=hv;charset=utf8", "root", "toor");
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (Exception $e)
		{
			echo "Error lors de la connection à la base de données : ".$e->getMessage();	
		}
	}
}