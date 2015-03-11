<?php $page = basename($_SERVER['PHP_SELF']);
$description = "Pumps 2000 was established in Australia in 1989 to offer pumps capable of handling abrasive, solid-laden and corrosive fluids in underground mining environments, and to create an alternative to the heavy, maintenance-intensive diaphragm pumps that were used predominantly in mines. These pumps featured low weight, as well as improved pump life and performance.";
$keywords = 'oil pump, water pump, oil spill disaster pumps, lobe rotary pump, pumps for water damage, pumps 2000 america, megator, pittsburgh pa, pumping manufacturer';
if($page == "index.php")
{
    $title = "Your Best Source for Pumps, Pumping Systems &amp; Spill Recovery Solutions";
}
if($page == "about.php")
{
    $title = "About";
}
if($page == "contact.php")
{
    $title = "Contact Pumps 2000 America";
}
if($page == "floating-oil-booms.php")
{
    $title = "Floating Oil Booms";
}
if($page == "directions.php")
{
    $title = "Directions";
}
if($page == "floating-strainers.php")
{
    $title = "Floating Strainers";
}
if($page == "industries.php")
{
    $title = "Industries We Serve";
}
if($page == "oil-dispersant-systems.php")
{
    $title = "Oil Disaster Pumps";
}
if($page == "oil-recovery-unit.php")
{
    $title = "Oil Recovery Unit";
}
if($page == "oil-skimmers.php")
{
    $title = "Oil Skimmer Pump";
}
if($page == "oil-spill-trailer.php")
{
    $title = "Oil Spill Trailer";
}
if($page == "oil-water-separators.php")
{
    $title = "Oil/Water Separator";
}
if($page == "products.php")
{
    $title = "Diaphragm Pumps, Rotary Lobe Pumps &amp; Other Pump Products";
}
if($page == "reps.php")
{
    $title = "Pump Product Sales Reprensetatives";
}
if($page == "resource-center.php")
{
    $title = "Technical Pump Information, Data &amp; Documentation";
}
if($page == "rotary-lobe-pump.php")
{
    $title = "Rotary Lobe Pump";
}
if($page == "salarollpump.php")
{
    $title = "Sala Roll Pump";
}
if($page == "sliding-shoe-pump.php")
{
    $title = "Sliding Shoe Pump";
}
if($page == "system-3.php")
{
    $title = "System 3 Pumps";
}
if($page == "truxor.php")
{
    $title = "Truxor Pump";
}
else {
    $title = "Diaphragm Pumps, Rotary Lobe Pumps, Oil and Disaster Pumps";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title; ?> - Pumps 2000 America</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if (isset($description)) { echo $description; } ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<meta name="google-translate-customization" content="ef9abbda8990ceb9-1c974da4b51e0523-g3d09fe1fa260c0ec-13"></meta>
<meta name="keywords" content="<?php if (isset($keywords)) { echo $keywords; } ?>" />

<link type="text/css" rel="stylesheet" href="styles/reset.css" media="screen" />
<link type="text/css" rel="stylesheet" href="styles/basic.css" media="screen" />
<link type="text/css" rel="stylesheet" href="styles/print.css" media="print" />
<link type="text/css" rel="stylesheet" href="styles/colorbox.css" media="screen" />
<link type="text/css" rel="stylesheet" href="styles/jquery.bxslider.css" media="screen" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>



<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.quicksand.js"></script>
<script type="text/javascript" src="scripts/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="scripts/hoverIntent.js"></script>
<script type="text/javascript" src="scripts/jquery.colorbox.js"></script>
<?php if ($page == "industries.php") { ?>
<script type="text/javascript" src="scripts/mainindustries.js"></script>
<?php } else { ?>
<script type="text/javascript" src="scripts/main.js"></script>
<?php } ?>
<?php if ($page == "reps.php") { ?>
    <script src="scripts/jquery.vector-map.js" type="text/javascript"></script>
    <script src="scripts/usa-en.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function(){
        $('#repmap').vectorMap({
            map: 'usa_en', 
            color: '#07263a',
            hoverColor: '#0979bf',
            backgroundColor: '#ffffff', 
            onRegionClick: showLocation
        });
    });
    </script>
    <script src="scripts/reps.js"></script>
<?php } ?>

<?php if ($page == "directions.php") { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNq-M2daSfiIYTqUcUKxX3cmMcgnobQyQ&sensor=false"></script>
<script>
  var directionDisplay;
  var directionsService = new google.maps.DirectionsService();

  function initialize() {
	directionsDisplay = new google.maps.DirectionsRenderer();
	var mapOptions = {
	  zoom: 7,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById('map_canvas'),
		mapOptions);
	directionsDisplay.setMap(map);
	directionsDisplay.setPanel(document.getElementById('directions-panel'));
	
	var start = '<?php echo $loc1; ?>';
	var end = '1721 Main Street Pittsburgh PA 15215';
	var request = {
	  origin: start,
	  destination: end,
	  travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	directionsService.route(request, function(response, status) {
	  if (status == google.maps.DirectionsStatus.OK) {
		directionsDisplay.setDirections(response);
	  }
	});
	
	var control = document.getElementById('control');
	control.style.display = 'block';
	map.controls[google.maps.ControlPosition.TOP].push(control);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php } ?>
<script src="scripts/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
</head>
<body>
    
<img src="images/megator-logo-bw.jpg" class="printonly">

<div id="header">
    <a href="index.php"><img src="images/p2k-logo-lg.png" alt="Pumps Logo" id="logo" /></a>
    <div id="tagline" style="margin-top:60px;">
        <em>Pneumatic Dual Diaphragm Pumps</em>
    </div>
    
    <div id="google_translate_element" style="float:right;display:block;height:30px;width:160px;">
    
    </div><script type="text/javascript">function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es,fr,pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');}
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   <!--<div style="float:right; display:block; position:relative;margin-right:-2px;clear:right;">
        <a href="http://www.workboatshow.com/" target="_blank"><img src="images/tradeshow-nov-14.png" alt="Tradeshow" style="float:right;border:1px solid #000;" /></a>
    </div>-->
   
    
</div>
<div id="nav-container">
    <ul id="main-navigation" class="main-navigation">
        <li class="mainnavli"><a href="index.php" class="mainnav <?php if (isset($navactive) && $navactive == 'nhome') {echo ' nactive';}?>">Home</a></li>
        <li class="mainnavli"><a href="about.php" class="mainnav <?php if (isset($navactive) && $navactive == 'nabout') {echo ' nactive';}?>">About</a></li>
        <li class="mainnavli"><a href="products.php" class="mainnav <?php if (isset($navactive) && $navactive == 'nproducts') {echo ' nactive';}?>">Products</a>
        	<ul class="subnav">
                <li><a href="yellow-series.php">Yellow Series</a></li>
                <li><a href="red-series.php">Red FRAS Series</a></li>
                <li><a href="ebony-series.php">Ebony Series</a></li>
                <li><a href="accessories.php">Accessories</a></li>
            </ul>
        </li>
        <!-- <li class="mainnavli"><a href="industries.php" class="mainnav <?php if (isset($navactive) && $navactive == 'nindustries') {echo ' nactive';}?>">Industries</a></li> -->
        <!--<li class="mainnavli"><a href="reps.html" class="mainnav<?php if (isset($navactive) && $navactive == 'nreps') {echo ' nactive';}?>">Reps</a></li>-->
        <li class="mainnavli"><a href="news.php" class="mainnav <?php if (isset($navactive) && $navactive == 'nnews') {echo ' nactive';}?>">News</a></li>
        <!--<li class="mainnavli"><a href="resource-center.html" class="mainnav<?php if (isset($navactive) && $navactive == 'nresourcecenter') {echo ' nactive';}?>">Resource Center</a></li>-->
        <li class="mainnavli"><a href="contact.php" class="mainnav <?php if (isset($navactive) && $navactive == 'ncontact') {echo ' nactive';}?>">Contact</a></li>
        <li class="mainnavli distlogin" style="width:330px;margin-top:13px;"><span style="display:block;float:left;margin-right:5px;margin-top:4px;color:#fff;">Distributor Login:</span><form action="http://www.megator.com/marketing-library/checklogin.php" method="post" style="display:block;float:left;"><input name="saveusername" id="saveusername" placeholder="Email" type="text" /><input name="submit-button" id="submit-button" type="submit" value="Login" /></form></li>
    </ul>
</div><!--nav-container-->
        
<div class="clearfix"></div>