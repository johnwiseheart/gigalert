<?php session_start(); ?>
<?php
	include('../define.php');

	
?>
<?php include('../header.php'); ?>

<body>
	<?php require('../elements/nav.php'); ?>

<div class="row">
    <div class="large-12 columns">


      <h2>Band Dashboard</h2>

      <?php include('../elements/graph.php'); ?>

      <div class="row">
      	<div class="large-8 columns">
      		<div class="panel" style="min-height:430px;">
      			<h3>Settings</h3>
      			<form>
	      			<fieldset>
          <div class="row">
            <div class="large-8 columns">
              <label>Band Name</label>
              <input type="text" placeholder="Band Name">
            </div>
             <div class="large-4 columns">
              <label>Thumbnail Image 
              	<span data-tooltip data-width="300px" class="has-tip" title="An 80x80 image that will be used as the general thumbnail for your band."><i class="accessibility foundicon-question"></i></span>
              </label>
              <a class="button small">Upload</a>
            </div>
          </div>
          <div class="row">
          <div class="large-8 columns">
              <label>Description Text</label>
              <textarea placeholder="Description" style="height:160px;"></textarea>
            </div>
            <div class="large-4 columns">
              <label>Description Image 
	              <span data-tooltip data-width="300px" class="has-tip" title="A 1:1.6 image (of atleast 500px wide) that will be used as the side bar on your band page."><i class="accessibility foundicon-question"></i></span>
              </label>
              <a class="button small">Upload</a>
            </div>  
          </div>

          <div class="row">
            <div class="large-8 columns">
              <label>Orbit Text</label>
              <input type="text" placeholder="Orbit Text">
            </div>
            <div class="large-4 columns">
              <label>Orbit Image 
	              <span data-tooltip data-width="300px" class="has-tip" title="A 970x180 image that can be used as a slide in the carousel on the user dashboard."><i class="accessibility foundicon-question"></i></span>
              </label>
              <a class="button small">Upload</a>
            </div>
          </div>

          <div class="row">
           
          </div>


	      			</fieldset>
	      			<div class="row">
	      			<div class="large-12 columns">
         
              <a class="button small">Save</a>
	      			</div>
	      			</div>
      </form>
      		</div>
      	</div>

      	<div class="large-4 columns">
      		<div class="panel" style="min-height:430px;">
      			<h3>Statistics</h3>

      		    <div class="row">
      			    <div class="large-12 columns">
      			      <div id="graphContainer1" style="height: 200px; margin: 0 auto"></div>
      			      <hr>
      			      <div id="graphContainer2" style="height: 200px; margin: 0 auto"></div>
      			    </div>
      			</div>
      		</div>

      	</div>
      </div>

    </div>
  </div>
<?php include('../footer.php') ?>