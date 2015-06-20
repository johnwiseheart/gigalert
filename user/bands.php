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
			<h2>My Bands</h2>

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div class="row collapse">
				        <div class="small-12 columns">
				          <input type="text" placeholder="Type to add a band..." style="font-size:20pt;" id="autoComplete">
				        </div>
				      </div>
				</div>
			</div>
			<div class="row">
				<div class="large-8 columns">
					<div class="panel">
						<table width="100%">
						  <tbody>
						    <tr>
						      <td>Metallica</td>
						      <td width="60" class="text-right">
						      	<a class="small button alert no-margin" href="#" data-reveal-id="modalBands-00001">
						      		<i class="general foundicon-minus"></i>
						      	</a>
						      </td>
						    </tr>
						    <tr>
						      <td>Radiohead</td>
						      <td width="60" class="text-right">
						      	<a class="small button alert no-margin" href="#" data-reveal-id="modalBands-00001">
						      		<i class="general foundicon-minus"></i>
						      	</a>
						      </td>
						    </tr>
						    <tr>
						      <td>The Beetles</td>
						      <td width="60" class="text-right">
						      	<a class="small button alert no-margin" href="#" data-reveal-id="modalBands-00001">
						      		<i class="general foundicon-minus"></i>
						      	</a>
						      </td>
						    </tr>
						    <tr>
						      <td>Led Zeppelin</td>
						      <td width="60" class="text-right">
						      	<a class="small button alert no-margin" href="#" data-reveal-id="modalBands-00001">
						      		<i class="general foundicon-minus"></i>
						      	</a>
						      </td>
						    </tr>
						    <tr>
						      <td>Nirvana</td>
						      <td width="60" class="text-right">
						      	<a class="small button alert no-margin" href="#" data-reveal-id="modalBands-00001">
						      		<i class="general foundicon-minus"></i>
						      	</a>
						      </td>
						    </tr>
						    <tr>
						      <td>Iron Maiden</td>
						      <td width="60" class="text-right">
						      	<a class="small button alert no-margin" href="#" data-reveal-id="modalBands-00001">
						      		<i class="general foundicon-minus"></i>
						      	</a>
						      </td>
						    </tr>
						    <tr>
						      <td>System of a Down</td>
						      <td width="60" class="text-right">
						      	<a class="small button alert no-margin" href="#" data-reveal-id="modalBands-00001">
						      		<i class="general foundicon-minus"></i>
						      	</a>
						      </td>
						    </tr>
						    <tr>
						      <td>The Who</td>
						      <td width="60" class="text-right">
						      	<a class="small button alert no-margin" href="#" data-reveal-id="modalBands-00001">
						      		<i class="general foundicon-minus"></i>
						      	</a>
						      </td>
						    </tr>
						  </tbody>
						</table>
						
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel" style="min-height:391px;" id="blocked"lass="blocked">
						<h3>Suggested Bands</h3>
						<img src="../assets/img/thumb1.png" class="suggestBandThumb" />
						<p class="suggestBandText">Paramore</p>
						<hr>
						<img src="../assets/img/thumb2.png" class="suggestBandThumb" />
						<p class="suggestBandText">Nightwish</p>
						<hr>
						<img src="../assets/img/thumb3.png" class="suggestBandThumb" />
						<p class="suggestBandText">Bliss N Eso</p>
						<hr>
						<img src="../assets/img/thumb4.png" class="suggestBandThumb" />
						<p class="suggestBandText">Flume</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('../footer.php') ?>
