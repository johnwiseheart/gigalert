<?php session_start(); ?>
<?php
	include('define.php');
?>
	

<?php include('header.php'); ?>
<body>
	<div class="row">
		<div class="large-12 columns">




			<div class="row">
				<div class="large-10 columns large-centered text-center">
					<img src="assets/img/logoBig.png" style="width:50%;height:50%" />
					<h1>GigAlert</h1>
				</div>
			</div>
			<div class="row">
				<div class="large-8 columns">
					<div class="panel"  style="height:200px">
						<h4>What is GigAlert?</h4>
						<p>GigAlert is currently a proof of concept for a simplistic concert tracker website. I did some research, and found that a simple concert tracking website did not exist. Every existing solution needed lots of user information, Facebook connection or had copious amounts of advertisements. I wanted a simple app - all that should be needed is email and location. And so I designed it.</p>
						
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel"  style="height:200px">
						<h4>Login Details:</h4>
						<p><strong>Username (User):</strong> user<br />
						<strong>Username (Band):</strong> band<br /><br />
						A password is not required.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns text-center">
					<h3><a href="user/home.php">Enter Site</a></h3>
				</div>
			</div>
			
			
			
			
		</div>
	</div>
<?php include('footer.php') ?>