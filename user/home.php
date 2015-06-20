<?php session_start(); ?>
<?php
	include('../define.php');

	if(isset($_POST['login_uname'])) {
		if($_POST['login_uname']=="band") {
			$_SESSION['bandname']=$_POST['login_uname'];
		} else if($_POST['login_uname']=="user") {
			$_SESSION['username']=$_POST['login_uname'];
		}
		
	}
	
	if((isset($_SESSION['username']))) {
		header('Location: '.WWW_LINK.SUB_LINK.'user/dashboard.php');	
	} elseif((isset($_SESSION['bandname']))) {
		header('Location: '.WWW_LINK.SUB_LINK.'band/dashboard.php');
	}
?>
	

<?php include('../header.php'); ?>
<body>
	<?php require('../elements/nav.php'); ?>
	<div class="row">
		<div class="large-12 columns">


			<h2>Welcome to GigAlert</h2>

			<?php include('../elements/orbit.php'); ?>

			<div class="row">
				<div class="large-8 columns">
					<div class="panel" style="min-height:430px;">
						<h3>What is GigAlert?</h3>
						<p>GigAlert is a service designed to notify you when bands that you like are touring close to you. <br />
							With no advertisements, no sponsored content and no complicated settings, GigAlert can be set up and forgotten about in seconds. When a band you like is touring near you, it will just send you a simple email letting you know!</p>
						<h4>Signing Up</h4>
						<p>Signing up to GigAlert is easy, and we don't need to know much about you. All we need is your <strong>email address</strong>, <strong>location</strong> and <strong>how far</strong> you would travel to see your bands. You can tell us your age if you want - it will help us find the right aged concerts for you!</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<h3>Login or Register</h3>

					    <div class="row">
						    <div class="large-12 columns">
						      <div class="row collapse">
						 		<form action="home.php" method="post">
							        <div class="small-12 columns">
							          <input type="text" name="login_uname" placeholder="Username">
							          <input type="password" name="login_pword" placeholder="Password">
							        </div>
							        <div class="small-6 columns">
							        	<input type="submit" class="small button" value="Login" />
							        </div>
							   
							        <div class="small-6 columns">
							        	<a class="small button" style="float:right;" href="#" data-reveal-id="modalRegister">Register</a>
							        </div>
						         </form>
						      </div>
						    </div>
						</div>
					</div>
					<div class="panel" style="height:184px;">
						<h3>Updates</h3>
						<div class="row">
						    <div class="large-12 columns">
						      <ul class="no-bullet">
						      	<li>Welcome page added</li>
						      	<li>Bands Page added</li>
						      	<li>Dashboard added</li>
						      </ul>
						    </div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
<?php include('../footer.php') ?>