<?php session_start(); ?>
<?php
	include('../define.php');

	if(!(isset($_SESSION['username']))) {
		header('Location: '.WWW_LINK.SUB_LINK.'user/home');
	}	
?>
	
<?php include('../header.php'); ?>

<body>
	<?php require('../elements/nav.php'); ?>
	<div class="row">
		<div class="large-12 columns">



			<h2>Dashboard</h2>

			<?php include('../elements/orbit.php'); ?>

			<div class="row">
				<div class="large-8 columns">
					<div class="panel" style="min-height:430px;">
						<h3>Coming Soon</h3>
						<table>
						  <thead>
						    <tr>
						      <th width="90">Date</th>
						      <th width="150">Band</th>
						      <th>Information</th>
						      <th width="50"></th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>13/5/2013</td>
						      <td>Band Name 1</td>
						      <td>A 60 character description that, will lead to a modal window...</td>
						      <td><a class="small button" href="#" data-reveal-id="modalBands-00001"><i class="general foundicon-right-arrow"></i></a></td>
						    </tr>
						    <tr>
						      <td>18/5/2013</td>
						      <td>A Different Band</td>
						      <td>A 60 character description that, will lead to a modal window...</td>
						      <td><a class="small button" href="#"><i class="general foundicon-right-arrow"></i></a></td>
						    </tr>
						    <tr>
						      <td>23/5/2013</td>
						      <td>Band Band Band</td>
						      <td>A 60 character description that, will lead to a modal window...</td>
						      <td><a class="small button" href="#"><i class="general foundicon-right-arrow"></i></a></td>

						    </tr>
						    <tr>
						      <td>29/5/2013</td>
						      <td>Indie Generic Masters</td>
						      <td>A 60 character description that, will lead to a modal window...</td>
						      <td><a class="small button" href="#"><i class="general foundicon-right-arrow"></i></a></td>

						    </tr>
						    <tr>
						      <td>12/6/2013</td>
						      <td>YOGBN</td>
						      <td>A 60 character description that, will lead to a modal window...</td>
						      <td><a class="small button" href="#"><i class="general foundicon-right-arrow"></i></a></td>

						    </tr>
						  </tbody>
						</table>
					</div>
				</div>

				<div class="large-4 columns">
					<div class="panel">
						<h3>Add New Band</h3>

					    <div class="row">
						    <div class="large-12 columns">
						      <div class="row collapse">
						        <div class="small-10 columns">
						          <input type="text" id="autoComplete" placeholder="Band Name">
						        </div>
						        <div class="small-2 columns">
						          <a href="#" class="secondary button prefix"><i class="general foundicon-checkmark"></i></a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="panel" style="min-height:275px;">
						<h3>News</h3>
						<div class="row">
						    <div class="large-12 columns">
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      tempor incididunt ut labore et dolore magna aliqua. Ut en
						  		</p>
						    </div>
						</div>
					</div>

				</div>
			</div>


		</div>
	</div>
<?php include('../footer.php') ?>