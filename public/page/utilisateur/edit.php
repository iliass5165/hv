<?php 

if(isset($_SESSION['message_error']))
{
  ?>
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Oops!</strong> <?php echo $_SESSION['message_error']; ?>
</div>
 
<?php

  unset($_SESSION['message_error']);
}
elseif(isset($_SESSION['message_success']))
{

?>
  <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Oops!</strong> <?php echo $_SESSION['message_success']; ?>
</div>
 
<?php

  unset($_SESSION['message_success']);
}
?>


<div class="well col-md-8 col-md-push-2">
	 <form method="POST" action="admin.php?controller=utilisateur&amp;action=edit">
        <div class="form-group">
        	<label for="password">Ancien mot de passe</label>
          <input type="password" name="old" class="form-control" placeholder="Ancien Mot de passe">
        </div>
        <div class="form-group">
        	<label for="password">Nouveau mot de passe</label>
          <input type="password" name="new" class="form-control" placeholder="Nouveau Mot de passe">
        </div>
        <div class="form-group">
        	<label for="password">Confirmer votre nouveau mot de passe</label>
          <input type="password" name="confirm" class="form-control" placeholder="Confirmer Nouveau mot de passe">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
</div>