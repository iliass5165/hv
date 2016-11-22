<?php

	Class Contact
	{
		private $id
		private $email
		private $coord
		private $telephone
		private $adress
	}

		//getter
public function getId()
{
	return $this->id;
}

public function getEmail()
{
	return $this->email;
}

public function getCoord()
{
	return $this->coord;
}
public function getTelephone()
{
	return $this->telephone;
}

public function getAdress()
{
	return $this->adress;
}

//setter 
public function setId($id)
{
	$this->id = $id;
}

public function setEmail($email)
{
	$this->email = $email;
}

public function setCoord($coord)
{
	$this->coord = $coord;
}
public function setTelephone($telephone)
{
	return $this->telephone = $telephone;
}
public function setAdress($adress)
{
	return $this->adress = $adress;
}