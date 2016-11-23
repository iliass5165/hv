<?php

Class ContactPdo extends MyPdo
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
			$req = $this->connection->prepare("SELECT * FROM contact WHERE id = :id");
			$req-> bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();
			
			$contact = new contact();
			$contact->setId($req['id']);
			$contact->setEmail($req['email']);
			$contact->setCoord($req['coordonneesmap']);
			$contact->setTelephone($req['telephone']);	
			$contact->setAdress($req['adresse']);
	
			return $contact;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage contact". $e->getMessage();
		}
	}

	public function create($contact)
		{
			try
				{
					$req = $this->connection->prepare('INSERT INTO conctact(email,coord,telephone,adresse) VALUES (:email, :coord, :telephone, :adresse)');
					$req->bindValue(':email',$contact->getEmail(), PDO::PARAM_STR);
					$req->bindValue(':coord',$contact->getCoord(), PDO::PARAM_STR);
					$req->bindValue(':telephone',$contact->getTelephone(), PDO::PARAM_STR);
					$req->bindValue(':adresse',$contact->getAdress(), PDO::PARAM_STR);
					$req->execute();
					$req->closeCursor();
				}
					catch(Exception $e)
						{
							"Erreur lors de l'execution de la requete d'affichage contact". $e->getMessage();
						}
		}
			public function edit($id,$contact)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE contact SET email = :email , coordonneesmap = :coordonneesmap , telephone = :telephone , adresse = :adresse WHERE id = :id");
			$req->bindValue(':email',$contact->getEmail(), PDO::PARAM_STR);
			$req->bindValue(':coord',$contact->getCoord(), PDO::PARAM_STR);
			$req->bindValue(':telephone',$contact->getTelephone(), PDO::PARAM_STR);
			$req->bindValue(':adresse',$contact->getAdress(), PDO::PARAM_STR);
			$req->bindValue(':id', $id);
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification contact". $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
		$req = $this->connection->prepare('DELETE FROM contact WHERE id = :id');
		$req->bindValue(':id', $id);
		$req->execute();
		$req->closeCursor();
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage contact". $e->getMessage();
		}

		public function getall()
		{
			$req = $this->$connection->prepare('SELECT * FROM contact');
			$req->execute();
			$afficher = [];
			while ($data = $req->fetch())
				{
					$contact = new Contact();
					$contact->setId($data['id']);
					$contact->setEmail($data['email']);
					$contact->setCoord($data['coordonneesmap']);
					$contact->setTelephone($data['telephone']);
					$contact->setAdress($data['adresse']);
					$afficher[] = $contact;
				}
				return $afficher;
				$req->closeCursor();

		}

}