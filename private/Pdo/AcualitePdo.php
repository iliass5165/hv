<?php

<?php
class NewsPdo extends Mypdo
{
	public function __construct()
	{
		try 
		{
			parent::__construct();
			
		}
		catch (Exception $e)
		{
			echo "Error lors de la connection de la classe News avec la base de données : ".$e->getMessage();	
		}
	}

	public function create($uneNews)
	{

		try 
		{	
			$req = $this->connection->prepare('INSERT INTO news(titre, description, dte, image,FK_User) VALUES(:titre, :description,:dte, :image,:FK_User)');
			$req->bindValue(':titre',$uneNews->titre, PDO::PARAM_STR);
			$req->bindValue(':description',$uneNews->description, PDO::PARAM_STR);
			$req->bindValue(':dte',$uneNews->dte->format("Y-m-d"));
			$req->bindValue(':image',$uneNews->image, PDO::PARAM_STR);
			$req->bindValue(':image',$uneNews->image, PDO::PARAM_STR);
			$req->bindValue(':FK_User',$uneNews->createur);
			$req->execute();
			$req->closeCursor();
		} 
		catch (Exception $e) 
		{
			echo 'error lors de l\'ajout d\'une news'.$e->getMessage();
		}
	}


	public function getAll()
	{
		try 

			{$req = $this->connection->query('SELECT * FROM news order by fk_User');
			 $resultat = array();
			
			while($rep = $req->fetch())
			{	
				$requ = $this->connection->prepare('SELECT login from user u inner join news n ON u.id = n.fk_User WHERE u.id=:id');
				$requ->bindValue(':id', $rep['fk_User']);
				$requ->execute();

				$NomCreateur = $requ->fetch();
				$requ->closeCursor();

				$uneNews = new News();
				$f->id = $rep['id'];
				$uneNews->titre = $rep['titre'];
				$uneNews->description = $rep['description'];
				$uneNews->dte = $rep['dte'];
				$uneNews->image = $rep['image'];
				$uneNews->createur = $NomCreateur[0];
				$resultat[] =  $uneNews;
			}
			$req->closeCursor();
			return $resultat;
				
		} 
		catch (Exception $e) 
		{
			echo 'erreur lors de la recuperation des news'.$e->getMessage();	
		}
		
	}

	public function showOneNews($unId)
	{
		try 
		{

		$req = $this->connection->prepare('SELECT * FROM news WHERE id=?');
		$req->execute(array($unId));
		$rep = $req->fetch();

		$requ = $this->connection->prepare('SELECT login from user u inner join news n ON u.id = n.fk_User WHERE u.id=:id');
				$requ->bindValue(':id', $rep['fk_User']);
				$requ->execute();

				$NomCreateur = $requ->fetch();
				$requ->closeCursor();

        $uneNews = new News();
        $uneNews->id = $rep['id'];
        $uneNews->titre = $rep['titre'];
        $uneNews->description = $rep['description'];
        $uneNews->dte = $rep['dte'];
        $uneNews->image = $rep['image'];
		$uneNews->createur = $NomCreateur[0];

		
		$req->closeCursor();
		return $uneNews;
		} 
		catch (Exception $e) 
		{
			echo 'erreur dans la requete de l\'affichage d\'une news'.$e->getMessage();
		}
	}

	public function deleteOneNews($unId)
	{
			
		$requ = $this->connection->prepare('DELETE FROM comment WHERE fk_News = :id');
		$requ->bindValue(':id', $unId);
        $requ->execute();
        $requ->closeCursor();
        

        $req = $this->connection->prepare('DELETE FROM news WHERE id=:id');
        $req->bindValue(':id', $unId);
        $req->execute();
        $req->closeCursor();
        
	}



	public function updateUneNews($uneNews, $unId)
	{
		$req = $this->connection->prepare('UPDATE news SET titre=:titre, description=:description, image=:image WHERE id=:id');
		$req->bindValue(':titre', $uneNews->titre, PDO::PARAM_STR);
		$req->bindValue(':description',$uneNews->description, PDO::PARAM_STR);
		$req->bindValue(':image', $uneNews->image, PDO::PARAM_STR);
		$req->bindValue(':id', $unId, PDO::PARAM_STR);
		$req->execute();
		$req->closeCursor();
	}
	public function avoirImage($unId)
	{

		$requ = $this->connection->prepare('SELECT image FROM news WHERE id=?');
		$requ->execute(array($unId));
		
		$nomImage = $requ->fetch();
		
		$requ->closeCursor();
		return $nomImage;
	}

	public function updateUneNews_withoutImage($uneNews, $unId)
	{
		$req = $this->connection->prepare('UPDATE news SET titre=:titre, description=:description WHERE id=:id');
		
		$req->bindValue(':titre', $uneNews->titre, PDO::PARAM_STR);
		$req->bindValue(':description', $uneNews->description, PDO::PARAM_STR);
		$req->bindValue(':id', $unId, PDO::PARAM_STR);
		$req->execute();
		$req->closeCursor();
	}
		
}
