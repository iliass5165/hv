<?php

class News
{
	private $id;
	private $titre;
	private $contenu;
	private $categorie;
	private $photo;


//getter
public function getId()
{
	return $this->id;
}

public function getTitre()
{
	return $this->titre;
}

public function getContenu()
{
	return $this->contenu;
}

public function getCategorie()
{
	return $this->categorie;
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

public function setTitre($titre)
{
	$this->titre = $titre;
}

public function setContenu($contenu)
{
	$this->contenu = $contenu;
}

}