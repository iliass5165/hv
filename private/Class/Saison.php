<?php

class Saison
	{
		private $id
		private $description
		private $datesaison
		private $ideffectif
		
	}

	//getter
public function getId()
{
	return $this->id;
}

public function getDescription()
{
	return $this->description;
}

public function getDatesaison()
{
	return $this->datesaison;
}
public function getIdeffectif()
{
	return $this->ideffectif;
}

//setter 
public function setId($id)
{
	$this->id = $id;
}

public function setDescription($description)
{
	$this->description = $description;
}

public function setDatesaison($datesaison)
{
	$this->datesaison = $datesaison;
}

