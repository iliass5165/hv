<?php

	Class Association
	{
		private $id
		private $nom
		private $prenom
		private $telephone
		private $mailperso
		private $mailpro 
		private $reglement
		private $statut

	}

	//getter
public function getId()
{
	return $this->id;
}

public function getNom()
{
	return $this->nom;
}

public function getPrenom()
{
	return $this->prenom;
}

public function getTelephone()
{
	return $this->telephone;
}

public function getMailperso()
{
	return $this->mailperso;
}
public function getMailpro() 
{
	return $this->mailpro;

public function getReglement()
{
	return $this->reglement;
}

public function getstatut()
{
	return $this->statut;
}

//setter 

public function setId($id)
{
	return $this->id = $id;
}

public function setNom($nom)
{
	return $this->nom = $nom;
}

public function setPrenom($prenom)
{
	return $this->prenom = $prenom;
}

public function setTelephone($telephone)
{
	return $this->telephone = $telephone;
}

public function setMailperso($mailperso)
{
	return $this->mailperso = $mailperso;
}

public function setMailpro($mailpro) 
{
	return $this->mailperso = $mailpro;
}
public function setReglement($reglement)
{
	return $this->reglement = $reglement;
}

public function setIdstatut($Idstatut);
{
	return $this->idstatut = $idstatut;
}





