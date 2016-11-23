<?php

Class StatutPdo extends MyPdo
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
			$req = $this->connection->prepare("SELECT * FROM statut WHERE id = :id");
			$req-> bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();
			
			$statut = new Statut();
			$statut->setId($req['id']);
			$statut->setIntitule($req['intitulestatut']);
			return $statut;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'statut". $e->getMessage();
		}
	}

	public function create($statut)
	{
		try
		{
		$req = $this->connection->prepare('INSERT INTO statut(intitulestatut) VALUES(:intitulestatut');
		$req->bindValue(':intitulestatut',$statut->getIntitule(), PDO::PARAM_STR);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'statut". $e->getMessage();
		}
	}

	public function edit($id,$statut)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE statut SET intitulestatut = :intitulestatut WHERE id = :id");
			$req->bindValue(':intitulestatut', $statut->getIntitule(), PDO::PARAM_STR);
			$req->bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification d'statut". $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
		$req = $this->connection->prepare('DELETE FROM statut WHERE id = :id');
		$req->bindValue(':id', $id);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'statut". $e->getMessage();
		}
		public function getall()
		{
			$req = $this->$connection->prepare('SELECT * FROM statut');
			$req->execute();
			$afficher = [];
			while ($data = $req->fetch())
				{
					$statut = new Statut();
					$statut->setId($data['id']);
					$statut->setIntitule($data['intitulestatut']);
					$afficher[] = $statut;
				}
				return $afficher;
				$req->closeCursor();

		}
}