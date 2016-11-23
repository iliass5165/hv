<?php

Class UtilisateurPdo extends MyPdo
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
			$req = $this->connection->prepare("SELECT * FROM utilisateur WHERE id = :id");
			$req-> bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();
			
			$utilisateur = new Utilisateur();
			$utilisateur->setId($req['id']);
			$utilisateur->setLogin($req['login']);
			$utilisateur->setMdp($req['mdp']);
			return $utilisateur;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage utilisateur". $e->getMessage();
		}
	}

	public function create($utilisateur)
	{
		try
		{
		$req = $this->connection->prepare('INSERT INTO utilisateur(login, mdp) VALUES(:login, :mdp');
		$req->bindValue(':login',$utilisateur->getLogin(), PDO::PARAM_STR);
		$req->bindValue(':mdp',$utilisateur->getMdp(), PDO::PARAM_DATE);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage utilisateur". $e->getMessage();
		}
	}

	public function edit($id,$utilisateur)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE utilisateur SET login = :login, mdp = :mdp WHERE id = :id");
			$req->bindValue(':id', $id);
			$req->bindValue(':login', $utilisateur->getLogin(), PDO::PARAM_STR);
			$req->bindValue('mdp', $utilisateur->getMdp(), PDO::PARAM_STR);
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification utilisateur". $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
		$req = $this->connection->prepare('DELETE FROM utilisateur WHERE id = :id');
		$req->bindValue(':id', $id);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage utilisateur". $e->getMessage();
		}
		public function getall()
		{
			$req = $this->$connection->prepare('SELECT * FROM utilisateur');
			$req->execute();
			$afficher = [];
			while ($data = $req->fetch())
				{
					$utilisateur = new Utilisateur();
					$utilisateur->setId($data['id']);
					$utilisateur->setLogin($data['login']);
					$utilisateur->setMdp($data['mdp']);
					$afficher[] = $utilisateur;
				}
				return $afficher;
				$req->closeCursor();

		}
}