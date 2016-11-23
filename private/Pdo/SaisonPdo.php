<?php

Class SaisonPdo extends MyPdo
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
			$req = $this->connection->prepare("SELECT * FROM saison WHERE id = :id");
			$req-> bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();
			
			$saison = new Saison();
			$saison->setId($req['id']);
			$saison->setDescription($req['description']);
			$saison->setIdeffectif($req['Effectif_id']);
			return $saison;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'saison". $e->getMessage();
		}
	}

	public function create($saison)
	{
		try
		{
		$req = $this->connection->prepare('INSERT INTO saison(description, date, Effectif_id) VALUES(:description, :date, :Effectif_id');
		$req->bindValue(':description',$saison->getDescription(), PDO::PARAM_STR);
		$req->bindValue(':date',$saison->getDate(), PDO::PARAM_DATE);
		$req->bindValue(':Effectif_id',$saison->getIdeffectif();
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'saison". $e->getMessage();
		}
	}

	public function edit($id,$saison)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE saison SET description = :description, date = :date, Effectif_id = :Effectif_id WHERE id = :id");
			$req->bindValue(':id', $id);
			$req->bindValue(':description', $saison->getDescription(), PDO::PARAM_STR);
			$req->bindValue('date', $saison->getDate());
			$req->bindValue(':Effectif_id', $saison->getIdeffectif());
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification d'saison". $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
		$req = $this->connection->prepare('DELETE FROM saison WHERE id = :id');
		$req->bindValue(':id', $id);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'saison". $e->getMessage();
		}
		public function getall()
		{
			$req = $this->$connection->prepare('SELECT * FROM saison');
			$req->execute();
			$afficher = [];
			while ($data = $req->fetch())
				{
					$saison = new Saison();
					$saison->setId($data['id']);
					$saison->setDescription($data['description']);
					$saison->setDate($data['date']);
					$saison->setIdeffectif($data['Effectif_id']);
					$afficher[] = $saison;
				}
				return $afficher;
				$req->closeCursor();

		}
}