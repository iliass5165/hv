<?php

class Categorie
{
	private $id;
	private $titre;


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
	public function setId($id)
	{	
		$this->id = $id;
	}


	public function setTitre($titre)
	{
		$this->titre = $titre;
	}

	
}
