<?php session_start(); ?>
<?php
	if(isset($_POST['login_bname'])) {
		$band = $_POST['login_bname'];
			$_SESSION['bandname']=$band;
	}
	
	if((isset($_SESSION['bandname']))) {
		header('Location: http://localhost/gigAlert/band/dashboard');	
	}	
?>

<?php include('../header.php'); ?>
<body>
	<?php require('../elements/nav.php'); ?>
	<div class="row">
		<div class="large-12 columns">


			<div class="row" style="margin-top:45px">
				<div class="large-5 columns large-centered">
					<div class="panel">
						<h3>Band Login</h3>
						<hr>
						<form action="login" method="post">
							<div class="row collapse">
						        <div class="small-12 columns">
						          <input type="text" name="login_bname" placeholder="Username">
						          <input type="password" name="login_npass" placeholder="Password">
						        </div>
						        <div class="small-12 columns">
						        	<input type="submit" class="small button" value="Login" />
						        </div>
						      </div>
						    </div>
					    </form>
					</div>
				</div>
			</div>

		</div>
	</div>
<?php include('../footer.php') ?>