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
		try
		{
			$req = $this->connection->prepare('INSERT INTO news(titre, contenu, categorie_id, photo_id) VALUES(:titre, :contenu, :categorie, :photo)');
			$req->bindValue(':titre',$actualite->getTitre(), PDO::PARAM_STR);
			$req->bindValue(':contenu',$actualite->getContenu(), PDO::PARAM_STR);
			$req->bindValue(':categorie',$actualite->getCategorie());
			$req->bindValue(':photo',$actualite->getPhoto(), PDO::PARAM_STR);
			$req->execute();
			$req->closeCursor();
		}
		catch(Exception $e)
		{
			echo "Erreur lors de l'execution de la requete ".$e->getMessage();
		}
	}

	public function getAll()
	{
		$req = $this->connection->prepare("SELECT * FROM news");
		$req->execute();
		$data = [];
		while($rep = $req->fetch())
		{
			$news = new News();
			$news->setId($rep['id']);
			$news->setTitre($rep['titre']);
			$news->setDescription($rep['contenu']);
			$news->setCategorie($rep['categorie_id']);
			$news->setPhoto($rep['photo_id']);
			$data[] = $news;
		}
		$req->closeCursor();
		return $data;
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

