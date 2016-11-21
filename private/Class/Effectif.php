<?php

Class Effectif
	{
		private $id
		private $genre
		private $categorie
		private $idsaison
		
	}

	//getter
public function getId()
{
	return $this->id;
}

public function getGenre()
{
	return $this->genre;
}

public function getCategorie()
{
	return $this->categorie;
}

public function getIdsaison()
{
	return $this->idsaison;
}

//setter 
public function setId($id)
{
	$this->id = $id;
}

public function setGenre($genre)
{
	$this->genre = $genre;
}

public function setCategorie($categorie)
{
	$this->categorie = $categorie;
}