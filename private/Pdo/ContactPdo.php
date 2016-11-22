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
			$contact->setCoord($req['coord']);
			$contact->setTelephone($req['telephone']);	
			$contact->setAdress($req['adress']);
	
			return $contact;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'agenda". $e->getMessage();
		}
	}

	public function create($contact)
		{
			try
				{
					$req = $this->connection->prepare('INSERT INTO conctact(email,coord,telephone,adress) VALUES (:email, :coord, :telephone, :adress)');
					$req->bindValue(':email',$contact->getEmail(), PDO::PARAM_STR);
					$req->bindValue(':coord',$contact->getCoord(), PDO::PARAM_STR);
					$req->bindValue(':telephone',$contact->getTelephone(), PDO::PARAM_STR);
					$req->bindValue(':adress',$contact->getAdress(), PDO::PARAM_STR);
					$req->execute();
					$req->closeCursor();
				}
					catch(Exception $e)
						{
							"Erreur lors de l'execution de la requete d'affichage d'agenda". $e->getMessage();
						}
		}
			public function edit($id,$contact)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE contact SET email = :email , coordonneesmap = :coordonneesmap , telephone = :telephone , adress = :adress WHERE id = :id");
			$req->bindValue(':email',$contact->getEmail(), PDO::PARAM_STR);
			$req->bindValue(':coord',$contact->getCoord(), PDO::PARAM_STR);
			$req->bindValue(':telephone',$contact->getTelephone(), PDO::PARAM_STR);
			$req->bindValue(':adress',$contact->getAdress(), PDO::PARAM_STR);
			$req->bindValue(':id', $id);
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
		$req = $this->connection->prepare('DELETE FROM contact WHERE id = :id');
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
					$contact->setAdress($data['adress']);
					$afficher[] = $contact;
				}
				return $afficher;
				$req->closeCursor();

		}

}