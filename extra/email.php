y = "Sydney";	
	}
	
	if(isset($_GET['price'])) {
		$ticket = $_GET['price'];
	} else {
		$ticket = 99.95;
	}
	
	if(isset($_GET['over18'])) {
		$over18 = $_GET['over18'];
	} else {
		$over18 = 1;
	}
	
?>

<div style='width:80%;margin:0 auto;font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;margin-top:30px'>
	<div>
		
		<div style="position:relative;width:300px;height:60px;">
			<img src="../assets/img/gigalert.png" style="width:48px;height:48px;">
		  <div style="position:absolute;bottom:-4px;left:54px"><h1>GigAlert Update</h1></div>
		</div>
	
	</div>
	<div style='border:1px solid #d2d2d2;background: #d9d9d9;padding-left:10px;line-height: 1.5;margin-top:15px'>
		<h3><?php echo $band; ?> is touring near you!</h3>
		<p>
			Hi <?php echo $user; ?>, <br />
			Just letting you know that <?php echo $band; ?> will soon be touring in <?php echo $city; ?>, and tickets go on sale soon!
		</p>
		<p>
			Tickets are $<?php echo $ticket; ?>, and can be purchased <a href="#" style="color: #2ba6cb;text-decoration: none;line-height: 1.5;">here</a>.
		</p>
		<?php if($over18>=1) { ?>
		<p>
			The event is over 18s only.
		</p>
		<?php } ?>
		<p>
			Yours Sincerely, <br />
			GigAlert
		</p>
	</div>




	
	<div style="text-align:center;font-size:0.5em;margin-top:10px">
		<a href="#" style="color: #2ba6cb;text-decoration: none;line-height: inherit;">Remove this band</a> | 
		<a href="#" style="color: #2ba6cb;text-decoration: none;line-height: inherit;">Unsubscribe</a> | 
		<a href="#" style="color: #2ba6cb;text-decoration: none;line-height: inherit;">Change your preferences</a>
	</div>
</div>