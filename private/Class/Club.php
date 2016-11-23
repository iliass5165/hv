<?php

class Categorie
{
	private $id;
	private $nom;
	private $horaires;
	private $presentation;
	private $photo;


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
public function setId($id)
{
	$this->id = $id;
}
public function setNom($nom)
{
	$this->nom = $nom;
}

public function setHoraires($horaires)
{
	$this->horaires = $horaires;
}

public function setPresentation($presentation)
{
	$this->presentation = $presentation;
}

}
