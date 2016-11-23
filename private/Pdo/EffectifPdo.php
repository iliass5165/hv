<?php

Class EffectifPdo extends MyPdo
{
	public function __construct()
	{
		try
		{
			parent::__construct();
		}
		catch(Exception $e)
		{
			Echo "Erreur de la connexion avec la base de données ".$e->getMessage();
		}
	}
		public function show($id)
	{
		try
		{
			$req = $this->connection->prepare("SELECT * FROM effectif WHERE id = :id");
			$req-> bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();
			
			$effectif = new Effectif();
			$effectif->setId($req['id']);
			$effectif->setGenre($req['genre']);
			$effectif->setCategorie($req['categorie']);
			$effectif->setIdsaison($req['saison_id']);
			return $effectif;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage effectif". $e->getMessage();
		}
	}

	public function create($effectif)
	{
		try
		{
		$req = $this->connection->prepare('INSERT INTO effectif(genre, categorie, saison_id) VALUES(:genre, :categorie, :saison_id');
		$req->bindValue(':genre',$effectif->getGenre(), PDO::PARAM_STR);
		$req->bindValue(':categorie',$effectif->getCategorie(), PDO::PARAM_DATE);
		$req->bindValue(':saison_id',$effectif->getIdsaison();
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage effectif". $e->getMessage();
		}
	}

	public function edit($id,$effectif)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE effectif SET genre = :genre, categorie = :categorie, saison_id = :saison_id WHERE id = :id");
			$req->bindValue(':id',$id);
			$req->bindValue(':genre',$effectif->getGenre(), PDO::PARAM_STR);
			$req->bindValue('categorie',$effectif->getCategorie(), PDO::PARAM_STR);
			$req->bindValue(':saison_id',$effectif->getIdsaison());
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification effectif". $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
		$req = $this->connection->prepare('DELETE FROM effectif WHERE id = :id');
		$req->bindValue(':id', $id);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage effectif". $e->getMessage();
		}
		public function getall()
		{
			$req = $this->$connection->prepare('SELECT * FROM effectif');
			$req->execute();
			$afficher = [];
			while ($data = $req->fetch())
				{
					$effectif = new Effectif();
					$effectif->setId($data['id']);
					$effectif->setGenre($data['genre']);
					$effectif->setCategorie($data['categorie']);
					$effectif->setIdsaison($data['saison_id']);
					$afficher[] = $effectif;
				}
				return $afficher;
				$req->closeCursor();

		}
}