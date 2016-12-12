<?php

class Gymnase
{
	private $id
	private $titre
	private $description


//getter
public function getId()
{
	return $this->id;
}

public function getTitre()
{
	return $this->titre;
}

public function getDescription()
{
	return $this->description;
}

//setter
public function setTitre($titre)
{
	return $this->titre = $titre;
}


}