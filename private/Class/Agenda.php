<?php

Class Agenda
	{
		private $id
		private $url
		
	}

	//getter
public function getId()
{
	return $this->id;
}

public function getUrl()
{
	return $this->url;
}
//setter 
public function setId($id)
{
	$this->id = $id;
}

public function setUrl($url)
{
	$this->url = $url;
}
