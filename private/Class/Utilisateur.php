<?php

Class Utilisateur
{
	private $id;
	private $login;
	private $mdp;

	//getter
	public function getId()
	{
		return $this->id;
	}

	public function getLogin()
	{
		return $this->login;
	}

	public function getMdp()
	{
		return $this->mdp;
	}
	//setter 
	
	public function setId($id)
	{
		$this->id = $id;
	}

	public function setLogin($login)
	{
		$this->login = $login;
	}

	public function setMdp($mdp)
	{
		$this->mdp = $mdp;
	}
}
