<?php

class Categorie
{
	private $id
	private $nom
	private $horaires
	private $presentation
	private $photo


//getter
public function getId()
{
	return $this->id;
}

public function getNom()
{
	return $this->nom;
}

public function getHoraires()
{
	return $this->horaires;
}

public function getPresentation()
{
	return $this->presentation;
}

public function getPhoto()
{
	return $this->photo;
}

//setter
public function setNom($nom)
{
	return $this->nom = $nom;
}

public function setHoraires($horaires)
{
	return $this->horaires = $horaires;
}

public function setPresentation($presentation)
{
	return $this->presentation = $presentation;
}

}
