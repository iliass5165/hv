<?php

Class Statut
	{
		private $id
		private $intitule
		
	}

	//getter
public function getId()
{
	return $this->id;
}

public function getIntitule()
{
	return $this->intitule;
}
//setter 
public function setId($id)
{
	$this->id = $id;
}

public function setIntitule($intitule)
{
	$this->intitule = $intitule;
}
