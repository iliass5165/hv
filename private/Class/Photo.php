<?php

class Photo
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

}
