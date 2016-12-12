<?php

class Categorie
{
	private $id
	private $titre


//getter
public function getId()
{
	return $this->id;
}

public function getTitre()
{
	return $this->titre;
}

//setter
public function setTitre($titre)
{
	return $this->titre = $titre;
}

public function setId($id)
{
	return $this->id = $id;
}

}
