<div class="container" style="margin-top:5%">
	<table>
 	<tr>
 		<td>Name</td>
 		<td>Action</td>
 	</tr>
<?php 
foreach ($user as $person) { ?>
 	<tr>
 		<td><?= $person['firstname'] ?></td>
 		<td><?php echo $this->Form->create(null,['url'=>['controller'=>'users','action'=>'sendrequest','uid'=>$person['uid']]]); ?>
 			<?php echo $this->Form->button(__("Add Friend")); ?>
 			<?php echo $this->Form->end(); ?>
 		</td>
 	</tr>
 

 <?php } ?>
 </table>	
</div>