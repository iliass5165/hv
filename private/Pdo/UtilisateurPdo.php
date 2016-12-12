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
		public function show($user)
	{
		try
		{
			$req = $this->connection->prepare("SELECT * FROM utilisateur WHERE login = :login and motPasse = :mdp");
			$req-> bindValue(':login', $user->getLogin());
			$req-> bindValue(':mdp', $user->getMdp());
			$req->execute();

			$rep = $req->fetch();
			$utilisateur = new Utilisateur();
			$utilisateur->setId($rep['id']);
			$utilisateur->setLogin($rep['login']);
			$utilisateur->setMdp($rep['motPasse']);
			$req->closeCursor();
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
		$req = $this->connection->prepare('INSERT INTO utilisateur(login, motpasse) VALUES(:login, :motpasse');
		$req->bindValue(':login',$utilisateur->getLogin(), PDO::PARAM_STR);
		$req->bindValue(':motpasse',$utilisateur->getMdp(), PDO::PARAM_STR);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage utilisateur". $e->getMessage();
		}
	}

	public function edit($utilisateur)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE utilisateur SET  motpasse = :motpasse WHERE id = :id");
			$req->bindValue(':id', $utilisateur->getId());
			$req->bindValue('motpasse', $utilisateur->getMdp(), PDO::PARAM_STR);
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification utilisateur". $e->getMessage();
		}
	}
}