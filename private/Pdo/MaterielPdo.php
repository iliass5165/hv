<?php

class MaterielPdo extends MyPdo

{

	public function __construct()
	{
		try
		{
			parent::__construct();
		}

		catch (exception $e)
		{
			echo "Erreur de la connexion avec la base de données" .$e->GetMessage(); 
		}
	}

	public function create($materiel)
	{
		try
		{
			$req = $this->connection->prepare("INSERT INTO materiel('titre','description') VALUES (:titre, :description)");
			$req->bindValue(':titre',$materiel->getTitre());
			$req->bindValue(':description',$materiel->getDescription());
			$req->execute();
			$req->closeCursor();
		}

		catch (exception $e)
		{
			echo "Impossible de créer un nouvel article sur le matériel" .$e->GetMessage();
		}
	}

	public function show($id)
	{
		try
		{
			$req = $this->conncetion->prepare("SELECT FROM materiel WHERE id= :id");
			$req->bindValue(':id',$id);
			$req->execute();
			$req->closeCursor();
			$materiel = New Materiel();
			$materiel->setId($req[:'id']);
			$materiel->setTitre($req['titre']);
			$materiel->setDescription($req['description']);

		}

		catch (exception $e)
		{
			echo "Impossible d'afficher le matériel" .$e->GetMessage();
		}
	}

	public function getall()
	{
		try
		{
			$req = $this->connection->prepare("SELECT * FROM materiel");
			$req->execute();
			$req->closeCursor();
			$data = array();

			while ($rep=$req->fetch()) 
			{
				$materiel = New Materiel();
				$materiel->setId($req["id"]);
				$materiel->setTitre($req["titre"]);
				$materiel->setDescription($req["description"]);
				$data[] = $materiel;
			}
				return $data;
		}


		catch(exception $e)
		{
			echo "Impossible d'executer la récupération de contenu".$e->GetMessage();
		}
	}

	public function delete($materiel)
	{
		try
		{
			$req = $this->connection->prepare("DELETE materiel SET titre = :titre AND description = :description WHERE id = :id");
			$req->bindValue("id", $id->getId());
			$req->bindValue("titre", $titre->getTitre());
			$req->bindValue("description", $description->getDescription());
			$req->execute();
			$req->closeCursor();

		}
		catch (exception $e)
		{
			echo "Impossible de supprimer cette liste de matériel".$e->GetMessage();
		}
	}

}