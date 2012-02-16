<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>Axatrikx Projects</TITLE>
	<META NAME="GENERATOR" CONTENT="OpenOffice.org 2.0  (Linux)">
	<META NAME="AUTHOR" CONTENT="Amal Bose">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link href="style/style.css" rel="stylesheet" type="text/css" />

</HEAD>
<BODY LANG="en-US" DIR="LTR">
<div id='title'>
<h1>
Welcome to Axatrikx Projects
</h1>
</div>

<?php
include_once ("Axagit.php");
error_reporting(0);
$projects = getAllProjects();
?><div id='projectList'>
	<div class='proheader narrowcurve'>
	My Projects</div>
	<div class='projecttype narrowcurve'>
<?php

foreach ($projects as $project) {

	if (!$project->getForkType()) {
?> 

	<div class="projects narrowcurve" >
	<?php

		echo "<div class='proname narrowcurve'>";
		echo "<div class='prourl'><a href='";
		echo $project->getProjectURL();
		echo "' >";
		echo strtoupper($project->getProjectName());
		echo "</a></div>";
		echo "<div class='prolang'>";
		echo $project->getProjectLanguage();
		echo "</div>";
		echo "</div>";
		echo "<div class='prodesc'>";
		echo $project->getProjectDescription();
		echo "</div>";
		echo "<div class='procont'>";
		echo "<div class='createD'>";
		echo $project->getProjectCreatedDate();
		echo "</div>";
		echo "<div class='homeURL'>";
		echo "<a href='";
		echo $project->getProjectHomeURL();
		echo "'  class='button white' >Home URL</a>";
		echo "</div>";
		echo "</div>";
		echo "<div class='procont'>";
		echo "<div class='postD'>";
		echo $project->getProjectPushDate();
		echo "</div>";
		echo "<div class='URL'>";
		echo "<a href='";
		echo $project->getProjectURL();
		echo "'  class='button white'>Github URL</a>";
		echo "</div>";
		echo "</div>";
?>
	</div> <!-- projects -->
	
	<?php

	}

}
?></div> <!--myprojects--><?php

?>
	<div class='proheader narrowcurve'>
	Forked Projects</div>
	<div class='projecttype narrowcurve'>
<?php

foreach ($projects as $project) {

	if ($project->getForkType()) {
?> 
	<div class="projects narrowcurve" >
	<?php

		echo "<div class='proname narrowcurve'>";
		echo "<div class='prourl'><a href='";
		echo $project->getProjectURL();
		echo "' >";
		echo strtoupper($project->getProjectName());
		echo "</a></div>";
		echo "<div class='prolang'>";
		echo $project->getProjectLanguage();
		echo "</div>";
		echo "</div>";
		echo "<div class='prodesc'>";
		echo $project->getProjectDescription();
		echo "</div>";
		echo "<div class='procont'>";
		echo "<div class='createD'>";
		echo $project->getProjectCreatedDate();
		echo "</div>";
		echo "<div class='homeURL'>";
		echo "<a href='";
		echo $project->getProjectHomeURL();
		echo "'  class='button white'>Home URL</a>";
		echo "</div>";
		echo "</div>";
		echo "<div class='procont'>";
		echo "<div class='postD'>";
		echo $project->getProjectPushDate();
		echo "</div>";
		echo "<div class='URL '>";
		echo "<a href='";
		echo $project->getProjectURL();
		echo "' class='button white' >Github URL</a>";
		echo "</div>";
		echo "</div>";
?>
	</div> <!-- projects -->
	<?php

	}

}
?></div> <!--myprojects--><?php

?>

</div> <!-- projectList -->

</BODY>
</HTML>
