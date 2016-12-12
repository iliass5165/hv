<?php

Class Inscription
{
	private $id;
	private $date;
	private $message;
	private $nom;
	private $prenom;
	private $dtnaissance;
	private $mail;
	private $licence;
		

		//getter
	public function getId()
	{
		return $this->id;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function getMessage()
	{
		return $this->message;
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function getPrenom()
	{
		return $this->prenom;
	}

	public function getDtnaissance()
	{
		return $this->dtnaissance;
	}

	public function getMail()
	{
		return $this->mail;
	}
	public function getLicence() 
	{
		return $this->licence;
	}



	//setter 
	public function setId($id)
	{
		$this->id = $id;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setMessage($message)
	{
		$this->message = $message;
	}
	public function setNom($nom)
	{
		$this->nom = $nom;
	}

	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
	}

	public function setDtnaissance($dtnaissance)
	{
		$this->dtnaissance = $dtnaissance;
	}

	public function setMail($mail)
	{
		$this->mail = $mail;
	}

	public function setLicence($licence) 
	{
		$this->licence = $licence;
	}
}




		