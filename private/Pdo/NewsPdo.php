<?php

Class NewsPdo extends MyPdo
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
		$req = $this->connection->prepare('INSERT INTO news(titre, contenu, categorie_id, photo_id) VALUES(:titre, :contenu, :categorie, :photo)');
		$req->bindValue(':titre',$actualite->getTitre(), PDO::PARAM_STR);
		$req->bindValue(':description',$actualite->getContenu(), PDO::PARAM_STR);
		$req->bindValue(':categorie',$actualite->getCategorie());
		$req->bindValue(':photo',$actualite->getPhoto(), PDO::PARAM_STR);
		$req->execute();
		$req->closeCursor();
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