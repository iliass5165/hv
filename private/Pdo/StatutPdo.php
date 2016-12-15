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
			$req->bindValue(':id', $id);
			$req->execute();
			
			$statut = new Statut();
			$rep = $req->fetch();
			$statut->setId($rep['id']);
			$statut->setIntitule($rep['intitulestatut']);
			$req->closeCursor();
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
			$req = $this->connection->prepare('INSERT INTO statut(intitulestatut) VALUES(:intitulestatut)');
			$req->bindValue(':intitulestatut',$statut->getIntitule(), PDO::PARAM_STR);
			$req->execute();
			$req->closeCursor();
			return 1;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'statut". $e->getMessage();
		}
	}

	public function update($statut)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE statut SET intitulestatut = :intitulestatut WHERE id = :id");
			$req->bindValue(':intitulestatut', $statut->getIntitule(), PDO::PARAM_STR);
			$req->bindValue(':id', $statut->getId());
			$req->execute();
			$req->closeCursor();
			return 1;
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
		return 1;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'statut". $e->getMessage();
		}
	}

	public function getall()
	{
		try
		{
			$req = $this->connection->prepare('SELECT * FROM statut');
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
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'statut". $e->getMessage();
		}
	}
}