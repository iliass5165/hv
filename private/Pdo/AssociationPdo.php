<?php

Class AssociationPdo extends MyPdo
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
			$req = $this->connection->prepare("SELECT * FROM association WHERE id = :id");
			$req-> bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();
			
			$association = new Association();
			$association->setId($req['id']);
			$association->setNom($req['nom']);
			$association->setPrenom($req['prenom']);
			$association->setTelephone($req['telephone']);
			$association->setMailperso($req['mailperso']);
			$association->setMailpro($req['mailpro']);
			$association->setReglement($req['reglement']);
			$association->setStatus($req['status']);
			
			return $association;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'association". $e->getMessage();
		}
	}

	public function create($association)
	{
		try
		{
		$req = $this->connection->prepare('INSERT INTO association(nom, prenom, telephone, mailperso, mailpro, reglement, status) VALUES(:nom, :prenom, :telephone, :mailperso, :mailpro, :reglement, :status');
		$req->bindValue(':date',$association->geDate());
		$req->bindValue(':commentaire',$association->getCommentaire(), PDO::PARAM_STR);
		$req->bindValue(':nom',$association->getNom(), PDO::PARAM_STR);
		$req->bindValue(':prenom',$association->getPrenom(), PDO::PARAM_STR);
		$req->bindValue(':telephone',$association->getTelephone(), PDO::PARAM_STR);
		$req->bindValue(':mailperso',$association->getMailperso(), PDO::PARAM_STR);
		$req->bindValue(':mailpro',$association->getMailpro(), PDO::PARAM_STR);
		$req->bindValue(':reglement',$association->getReglement(), PDO::PARAM_STR);
		$req->bindValue(':status',$association->getStatus(), PDO::PARAM_STR);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'association". $e->getMessage();
		}
	}

	public function edit($id,$association)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE association SET nom = :nom, prenom = :prenom, telephone = :telephone, mailperso = :mailperso, reglement = :reglement, status = :status  WHERE id = :id");
			$req->bindValue(':id', $id);
			$req->bindValue(':date', $association->getDate();
			$req->bindValue('commentaire', $association->getCommentaire(), PDO::PARAM_STR);
			$req->bindValue('nom', $association->getNom(), PDO::PARAM_STR);
			$req->bindValue('prenom', $association->getPrenom(), PDO::PARAM_STR);
			$req->bindValue('telephone', $association->getTelephone(), PDO::PARAM_STR);
			$req->bindValue('mailperso', $association->getMailperso(), PDO::PARAM_STR);
			$req->bindValue('reglement', $association->getReglement(), PDO::PARAM_STR);
			$req->bindValue('status', $association->getStatus(), PDO::PARAM_STR);

			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification d'association". $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
		$req = $this->connection->prepare('DELETE FROM association WHERE id = :id');
		$req->bindValue(':id', $id);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'association". $e->getMessage();
		}
		public function getall()
		{
			$req = $this->$connection->prepare('SELECT * FROM association');
			$req->execute();
			$afficher = [];
			while ($data = $req->fetch())
				{
					$association = new Association();
					$association->setId($data['id']);
					$association->setNom($data['nom']);
					$association->setPrenom($data['prenom']);
					$association->setTelephone($data['telephone']);
					$association->setMailperso($data['mailperso']);
					$association->setMailpro($data['mailpro']);
					$association->setReglement($data['reglement']);
					$association->setStatus($data['status_id']);
					$afficher[] = $association;
				}
				return $afficher;
				$req->closeCursor();

		}
}