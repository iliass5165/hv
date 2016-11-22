<?php

Class AgendaPdo extends MyPdo
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

	public function show()
	{
		try
		{
			$req = $this->connection->prepare("SELECT * FROM agenda ORDER BY id desc limit 1");
			$req->execute();
			$req->closeCursor();
			/* $req['id' => 2 , 'url' => lolo}*/
			$agenda = new Agenda();
			$agenda->setId($req['id']);
			$agenda->setUrl($req['url']);
			return $agenda;
		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete d'affichage d'agenda". $e->getMessage();
		}
	}

	public function edit($agenda)
	{
		try
		{
			$req = $this->connection->prepare("UPDATE agenda SET url = :url WHERE id = :id");
			$req->bindValue(':url', $agenda->getUrl(), PDO::PARAM_STR);
			$req->bindValue(':id', $agenda->getId());
			$req->execute();
			$req->closeCursor();

		}
		catch(Exception $e)
		{
			"Erreur lors de l'execution de la requete de modification d'agenda". $e->getMessage();
		}
	}
}