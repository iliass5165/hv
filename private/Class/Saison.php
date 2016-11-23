<?php

class Saison
	{
		private $id
		private $description
		private $date
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

public function getDate()
{
	return $this->date;
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

public function setDatesaison($date)
{
	$this->date = $date;
}

public function setIdeffectif($ideffectif)
{
	$this->ideffectif = $ideffectif;
}
