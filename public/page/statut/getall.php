
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Statuts</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($lesStatuts as $statut):?>
      <tr>
        <td><?php echo $statut->getIntitule();?></td>
      </tr>
  		<?php endforeach; ?>
    </tbody>
  </table>

