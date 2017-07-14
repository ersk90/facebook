<div class="well">
	<div class="row">	
		<div class="col-md-6 col-sm-12 col-xs-12">
			<h2 id="logo">facebook demo</h2>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<form class="form-inline" method="post" action="<?php echo $this->Url->build();?>">
			    <div class="form-group">
			      <label for="email">Email or phone</label>
			      <?php echo $this->Form->input('email',['placeholder'=>'Enter email','label'=>false]); ?>
			    </div>
			    <div class="form-group">
			      <label for="pwd">Password:</label>
			      <?php echo $this->Form->input('password',['placeholder'=>'Enter Password','label'=>false]) ?>
			    </div>
			    
			    <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

<div class="container" id="content">
	<div class="col-md-6">
		<?php echo $this->Html->image('facebook2561.png',['id'=>'fbImage']); ?>
	</div>
	<div class="col-md-6">
		<h2>Sign Up</h2>
		<p>It's free an easy</p>
	 	<?php echo $this->Form->create(null,['url'=>['controller'=>'users','action'=>'register']]); ?>

		  <div class="form-group">
		  	<div class="col-md-6">
		  		<?php echo $this->Form->input('firstname',['placeholder'=>'First Name','label'=>false]) ?>
		  	</div>
		  	<div class="col-md-6">
		  		<?php echo $this->Form->input('sirname',['placeholder'=>'Sir Name','label'=>false]) ?>
		  	</div>
		  </div>
		  <div class="form-group">
		  	<div class="col-md-12">
		  		<?php echo $this->Form->input('email',['placeholder'=>'Email or phone number','label'=>false]) ?> 
			</div>
		  </div>
		  <div class="form-group">
		  	<div class="col-md-12">
		  		<?php echo $this->Form->input('email',['placeholder'=>'Re-enter Email or phone number','label'=>false]) ?> 
			</div>
		  </div>
		  <div class="form-group">
		  	<div class="col-md-12">
		  		<?php echo $this->Form->input('password',['placeholder'=>'Password','label'=>false]) ?> 
		  	</div>
		  </div>
		  <div class="form-group">
		  	<div class="col-md-12">
		  		<?php echo $this->Form->input('birthday',['type'=>'text','placeholder'=>'Birthday','label'=>false]) ?>
		  	</div>
		  	<!-- <div class="col-md-2">
		  		<select>
		  			<option>Day</option>
		  			<option>1</option>
		  			<option>1</option>
		  			<option>1</option>
		  			<option>1</option>
		  			<option>1</option>
		  			<option>1</option>
		  		</select>
		  	</div>
		  	<div class="col-md-3 col-md-pull-1">
		  		<select>
		  			<option>Month</option>
		  			<option>January</option>
		  			<option>January</option>
		  			<option>January</option>
		  			<option>January</option>
		  			<option>January</option>
		  		</select>
		  	</div>
		  	<div class="col-md-3 col-md-pull-2">
		  		<select>
		  			<option>Year</option>
		  			<option>2017</option>
		  			<option>2017</option>
		  			<option>2017</option>
		  			<option>2017</option>
		  			<option>2017</option>
		  		</select>
		  	</div> -->
		  </div>
		  <div class="form-group">
		  	<div class="col-md-12">
			  <input type="radio" name="gender" value="male" required="required">Male
			  <input type="radio" name="gender" value="female" required="required">Female
		  	</div>
		  </div>
		  <div class="form-group">
		  	<div class="col-md-6">
		  		<button type="submit" class="btn btn-alert btn-lg">Submit</button>		  		
		  	</div>
		  </div>
		<?php echo $this->Form->end(); ?> 
	</div>		  
</div>

<div class="container-fluid" style="background: white; height: 30px;">
	<div class="container">
	<ul class="nav navbar-nav">
		<li><a href="">English (UK)</a></li>
		<li><a href="">हिन्दी</a></li>
		<li><a href="">ਪੰਜਾਬੀ</a></li>
		<li><a href="">اردو</a></li>
		<li><a href="">ગુજરાતી</a></li>
		<li><a href="">বাংলা</a></li>
		<li><a href="">தமிழ்</a></li>
		<li><a href="">తెలుగు</a></li>
		<li><a href="">മലയാളം</a></li>
		<li><a href="">ಕನ್ನಡ</a></li>
		<li><a href="">Español</a></li>
		
	</ul>
	<hr>
	</div>
</div>

