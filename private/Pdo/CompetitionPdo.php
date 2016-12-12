<?php

Class CompetitionPdo extends MyPdo
{
	public function __construct()
	{
		try 
		{
			parent::__construct();
			
		}
		catch (Exception $e)
		{
			echo "Error lors de la connection de la classe News avec la base de données : ".$e->getMessage();	
		}
	}


	public function create($actualite)
	{
		
	}

	public function getAll()
	{

	}

	public function show($id)
	{

	}
	public function edit($id)
	{

	}

	public function delete($id)
	{
		
	}


}