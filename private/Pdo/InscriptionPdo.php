<?php

Class InscriptionPdo extends MyPdo
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
			$req = $this->connection->prepare("SELECT * FROM inscription WHERE id = :id");
			$req-> bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();
			
			$inscription = new Inscription();
			$inscription->setId($req['id']);
			$inscription->setDate($req['date']);
			$inscription->setCommentaire($req['commentaire']);
			$inscription->setNom($req['nom']);
			$inscription->setPrenom($req['prenom']);
			$inscription->setDtnaissance($req['dtnaissance']);
			$inscription->setMail($req['mail']);
			$inscription->setLicence($req['licence']);
			return $inscription;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'inscription". $e->getMessage();
		}
	}

	public function create($inscription)
	{
		try
		{
		$req = $this->connection->prepare('INSERT INTO inscription(date, commentaire, nom, prenom, dtnaissance, mail, licence) VALUES(:date, :commentaire, :nom, :prenom, :dtnaissance, :mail, :licence');
		$req->bindValue(':date',$inscription->geDate());
		$req->bindValue(':commentaire',$inscription->getCommentaire(), PDO::PARAM_STR);
		$req->bindValue(':nom',$inscription->getNom(), PDO::PARAM_STR);
		$req->bindValue(':prenom',$inscription->getPrenom(), PDO::PARAM_STR);
		$req->bindValue(':dtnaissance',$inscription->getDtnaissance(), PDO::PARAM_STR);
		$req->bindValue(':mail',$inscription->getMail(), PDO::PARAM_STR);
		$req->bindValue(':licence',$inscription->getLicence(), PDO::PARAM_STR);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'inscription". $e->getMessage();
		}
	}

	public function edit($id,$inscription)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE inscription SET date = :date, commentaire = :commentaire, nom = :nom, prenom = :prenom, dtnaissance = :dtnaissance, mail = :mail, licence = :licence WHERE id = :id");
			$req->bindValue(':id', $id);
			$req->bindValue(':date', $inscription->getDate();
			$req->bindValue('commentaire', $inscription->getCommentaire(), PDO::PARAM_STR);
			$req->bindValue('nom', $inscription->getNom(), PDO::PARAM_STR);
			$req->bindValue('prenom', $inscription->getPrenom(), PDO::PARAM_STR);
			$req->bindValue('dtnaissance', $inscription->getDtnaissance(), PDO::PARAM_STR);
			$req->bindValue('mail', $inscription->getMail(), PDO::PARAM_STR);
			$req->bindValue('licence', $inscription->getLicence(), PDO::PARAM_STR);
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification d'inscription". $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
		$req = $this->connection->prepare('DELETE FROM inscription WHERE id = :id');
		$req->bindValue(':id', $id);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'inscription". $e->getMessage();
		}
		public function getall()
		{
			$req = $this->$connection->prepare('SELECT * FROM inscription');
			$req->execute();
			$afficher = [];
			while ($data = $req->fetch())
				{
					$inscription = new Inscription();
					$inscription->setId($data['id']);
					$inscription->setDate($data['date']);
					$inscription->setCommentaire($data['commentaire']);
					$inscription->setNom($data['nom']);
					$inscription->setPrenom($data['prenom']);
					$inscription->setDtnaissance($data['dtnaissance']);
					$inscription->setMail($data['mail']);
					$inscription->setLicence($data['licence']);
					$afficher[] = $inscription;
				}
				return $afficher;
				$req->closeCursor();

		}
}