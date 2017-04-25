<html>
<?php include 'lib_gangway.php';?>
<head>
	<script src="//assets.adobedtm.com/e80b4f015d743e30fe9312f22bce1a7d162d6597/satelliteLib-eb8e1d8e6ea569e385e3ff826bd8a41215fb7cbb.js"></script>
	<script>
		// data layer object
		var DLO={
			pageName:'click test'
		}
	</script>
	<title>Gangway:Click Test</title>
</head>
<body>
<?php pageHeader();?>
<?php mainNav();?>
  
Nothing to see here, yet<br>


<a ID=link1 href="#" onClick="
s.tl(this,'o','Test Click 1', null)
">Some Clickable Thing 1</a><br>

<a ID=link2 href="#">Some Clickable Thing 2</a><br>

<script type="text/javascript">_satellite.pageBottom();</script>
</body>
</html>
