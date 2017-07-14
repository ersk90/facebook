<div class="row" style="margin-top: 5%">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2>Online user</h2>
		<ul>
			<?php foreach ($all as $user) {
				foreach ($user as $userinfo) { ?>
			<li><?php echo $userinfo['firstname']; ?><i class="fa fa-circle" style="color:green; margin-left: 20px;"></i></li>
			<?php	}
			} ?>
		</ul>
	</div>
	<div class="col-md-3"></div>
</div>