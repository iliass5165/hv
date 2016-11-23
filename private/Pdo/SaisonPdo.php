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
			$saison->setIdeffectif($req['ideffectif']);
			return $saison;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'agenda". $e->getMessage();
		}
	}

	public function create($saison)
	{
		try
		{
		$req = $this->connection->prepare('INSERT INTO saison(description, datesaison, ideffectif) VALUES(:description, :datesaison, :ideffectif');
		$req->bindValue(':description',$saison->getDescription(), PDO::PARAM_STR);
		$req->bindValue(':datesaison',$saison->getDate(), PDO::PARAM_DATE);
		$req->bindValue(':ideffectif',$saison->getIdeffectif();
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'agenda". $e->getMessage();
		}
	}

	public function edit($id,$saison)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE saison SET description = :description, datesaison = :datesaison, ideffcetif = :ideffectif WHERE id = :id");
			$req->bindValue(':id', $id);
			$req->bindValue(':description', $saison->getDescription(), PDO::PARAM_STR);
			$req->bindValue('datesaison', $saison->getDatesaison());
			$req->bindValue(':ideffectif', $saison->getIdeffectif());
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification d'agenda". $e->getMessage();
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
			"Erreur lors de l'execution de la requete d'affichage d'agenda". $e->getMessage();
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
					$saison->setDatesaison($data['datesaison']);
					$saison->setIdeffectif($data['ideffectif']);
					$afficher[] = $saison;
				}
				return $afficher;
				$req->closeCursor();

		}
}