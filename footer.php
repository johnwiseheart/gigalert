	<footer>
	    <div class="row">
	        <div class="large-12 columns">
            <div class="small-4 columns">
	              <p>&copy; John Wiseheart 2013</p>
              </div>
              <div class="small-6 columns">
                  <ul class="inline-list right">
                    <li><a href="http://facebook.com/gigalert"><i style="color:#2ba6cb" class="social foundicon-facebook"></i></a></li>
                    <li><a href="http://twitter.com/gigalert"><i style="color:#2ba6cb" class="social foundicon-twitter"></i></a></li>
                    <li><a href="http://plus.google.com/gigalert"><i style="color:#2ba6cb;" class="social foundicon-google-plus"></i></a></li>
                  </u>
              </div>
	        </div>
	    </div>
	  </footer>
  
	<?php include('../modals/settings.php'); ?>
  <?php include('../modals/register.php'); ?>
  <?php include('../modals/bands.php'); ?>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo $assets; ?>/js/vendor/zepto' : '<?php echo $assets; ?>/js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
 <!-- <script src="js/foundation.min.js"></script>-->

<script src="<?php echo $assets; ?>/js/jquery-1.9.1.min.js"></script>

  
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.alerts.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.clearing.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.cookie.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.dropdown.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.forms.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.joyride.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.magellan.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.orbit.js"></script>
  
  <!--<script src="assets/js/foundation/foundation.placeholder.js"></script>-->
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.reveal.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.section.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.tooltips.js"></script>
  
  <script src="<?php echo $assets; ?>/js/foundation/foundation.topbar.js"></script>
  
  
<script src="<?php echo $assets; ?>/js/jquery.blockUI.js"></script>
<script src="<?php echo $assets; ?>/js/jquery.stickyFooter.js"></script>
<script src="<?php echo $assets; ?>/js/jquery.h5validate.js"></script>
<script src="<?php echo $assets; ?>/js/jquery-ui.js"></script>


<script src="<?php echo $assets; ?>/js/highcharts.js"></script>

<script>
	$(document).foundation();

	var isBlender = false;
	
	var availableTags = [
	"Metallica",
	"Radiohead",
	"The Beatles",
	"Led Zeppelin",
	"Pink Floyd",
	"Nirvana",
	"Iron Maiden",
	"Red Hot Chili Peppers",
	"Rage Against the Machine",
	"System of a Down",
	"The Clash",
	"Jimi Hendrix",
	"Pantera",
	"Black Sabbath",
	"Lamb of God",
	"The Doors",
	"Tool",
	"Queens of the Stone Age",
	"AC/DC",
	"The Who"
	];

    $(function () {
	    
	    $('#formRegister').h5Validate({
	    	errorClass:'error',
	        focusout: true,
	        focusin: false,
	        change: false,
	        keyup: false
	    });
	    
	    
	    $("#autoComplete").autocomplete({
	    	source: availableTags
	    });

        $('#graphContainer').highcharts({
            chart: {
                type: 'line',
                marginRight: 130,
           
                backgroundColor:'rgba(255, 255, 255, 0.1)'
            },
            title: {
                text: 'Concert Clickthroughs',
                x: -20 //center
            },
            exporting: {
			    enabled: false
			},
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Clicks'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ' clicks'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Total',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'Unique',
                data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            }]
        });
		
	    // Build the chart
        $('#graphContainer1').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: true,
                backgroundColor:'rgba(255, 255, 255, 0.1)'
            },
            title: {
            	text: 'Rate of Something'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            exporting: {
			    enabled: false
			},
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: false,
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                    ['Firefox',   45.0],
                    ['IE',       26.8],
                    {
                        name: 'Chrome',
                        y: 12.8,
                        sliced: true,
                        selected: true
                    },
                    ['Safari',    8.5],
                    ['Opera',     6.2],
                    ['Others',   0.7]
                ]
            }]
        });

        $('#graphContainer2').highcharts({
            chart: {
                type: 'column',
                backgroundColor:'rgba(255, 255, 255, 0.1)'
            },
            title: {
                text: 'Amount of Things'
            },
            exporting: {
				enabled: false
			},
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr'
                ]
            },
            yAxis: {
                min: 0,
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'One',
                data: [49.9, 71.5, 106.4, 129.5]
    
            }, {
                name: 'Two',
                data: [83.6, 78.8, 98.5, 93.4]
    
            }, {
                name: 'Three',
                data: [48.9, 38.8, 39.3, 41.4]
    
            }]
        });
	});
</script>
</body>
</html>