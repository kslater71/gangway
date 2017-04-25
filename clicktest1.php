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
  

<a ID=link1 href="#" onClick="
s.contextData['link.type'] = 'o';
s.contextData['link.name'] = 'Test Click 1 by CD';
s.contextData['link.type2'] = 'D=pe';
s.contextData['link.name2'] = 'D=pev2;
s.linkTrackVars='prop1,prop2,contextData.link.type,contextData.link.name';
s.tl(this,'o','Test Click 1');
">Some Clickable Thing 1</a><br>
<br>

<a ID=link2 href="#" onClick="
s.contextData['link.type'] = 'o';
s.contextData['link.name'] = 'Test Click 2 by CD';
s.contextData['link.type2'] = 'D=pe';
s.contextData['link.name2'] = 'D=pev2;
s.linkTrackVars='prop1,prop2,contextData.link.type,contextData.link.name';
s.tl(this,'o','Test Click 2');
">Some Clickable Thing 2</a><br>

<script type="text/javascript">_satellite.pageBottom();</script>
</body>
</html>
