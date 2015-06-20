<?php 
	if(isset($_SESSION['username'])) {
		$welcomeMessage = "Welcome, " . $_SESSION['username'];
		$logged = 1;
	} else if(isset($_SESSION['bandname'])) {
		$welcomeMessage = "Welcome, " . $_SESSION['bandname'];
		$logged = 2;
	} else {
		$welcomeMessage = "Hello, Guest";
	}
	
	
?>
<div class="fixed">
	<nav class="top-bar fixed">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="<?php echo WWW_LINK.SUB_LINK ?>"><img src="../assets/img/gigalert.png" style="width:32px;height:32px;vertical-align:middle;margin-top:-5px" /> GigAlert</a></h1>
	    </li>
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Left Nav Section -->
	    <ul class="left">
	      <li class="divider"></li>
	      
	      <?php if($logged==1) { ?>
	      	<li><a href="../user/dashboard.php">Dashboard</a></li>
	      	<li class="divider"></li>
		    <li><a href="../user/bands.php">Bands</a></li>
		    <li class="divider"></li>
		  <?php } elseif($logged==2) { ?>
			 <li><a href="../band/dashboard.php">Dashboard</a></li>
			 <li class="divider"></li>
		     <li><a href="#">Gigs</a></li>
		     <li class="divider"></li>
		  <?php } else { ?>
		  	 <!--<li><a href="../user/home.php">Home</a></li>
		  	 <li><a href="../band/login.php">Band Login</a></li>-->
		  <?php } ?>
	      
	      
	     
	      
	    </ul>

	    <!-- Right Nav Section -->
	    <ul class="right">
	      <!-- <li class="divider show-for-small"></li>
	     
	      </li> -->
	      
	      <li class="divider show-for-small"></li>
	      
	      <li><a href="#"><?php echo $welcomeMessage; ?></a></li>
	      
	      <?php if($logged==1) { ?>
		      <li class="has-form">
		        <a class="button" href="#" data-reveal-id="modalSettings"><i class="general foundicon-settings"></i></a>
		      </li>
		      <li class="has-form">
		        <a class="button" href="../logout.php">Log Out</i></a>
		      </li>
		  <?php } else if($logged==2) { ?>
		  		<li class="has-form">
		        <a class="button" href="../logout.php">Log Out</i></a>
		      </li>
		  <?php } else { ?>
		      <li class="has-form">
		      	<a class="button" href="#" data-reveal-id="modalRegister">Register</a>
		      </li>
		  <?php } ?>
	    </ul>
	  </section>
	</nav>
</div>