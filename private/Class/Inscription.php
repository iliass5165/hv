<?php

	Class Inscription
	{
		private $id
		private $date
		private $commentaire
		private $nom
		private $prenom
		private $dtnaissance
		private $mail
		private $licence
		
	}

	//getter
public function getId()
{
	return $this->id;
}

public function getDate()
{
	return $this->date;
}

public function getCommentaire()
{
	return $this->commentaire;
}
public function getNom()
{
	return $this->nom;
}
public function getPrenom()
{
	return $this->prenom;
}

public function getDtnaissance()
{
	return $this->dtnaissance;
}

public function getMail()
{
	return $this->mail;
}
public function getLicence() 
{
	return $this->licence;
}



//setter 
public function setId($id)
{
	$this->id = $id;
}

public function setDate($date)
{
	$this->date = $date;
}

public function setCommentaire($commentaire)
{
	$this->commentaire = $commentaire;
}
public function setNom($nom)
{
	return $this->nom = $nom;
}

public function setPrenom($prenom)
{
	return $this->prenom = $prenom;
}

public function setDtnaissance($dtnaissance)
{
	return $this->dtnaissance = $dtnaissance;
}

public function setMail($mail)
{
	return $this->mail = $mail;
}

public function setLicence($licence) 
{
	return $this->licence = $licence;
}




	