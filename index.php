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
<BR>
Hello Axatrikx Projects
<BR>
<div id='projectList'>
<?php
include_once("Axagit.php");
$projects = getAllProjects();
?>
	<div class='proheader narrowcurve'>
	My Projects</div>
<?php
foreach ($projects as $project) {

	if(!$project->getForkType()){
	?> 

	<div class="projects curve" >
	<?php 
	echo "<div class='proname narrowcurve'>";
	echo "<div class='prourl'><a href='";
	echo $project->getProjectURL();
	echo "' >";
	echo strtoupper($project->getProjectName());
	echo "</a></div></div>";
	echo "<div class='prodesc'>";
	echo $project->getProjectDescription();
	echo "</div>";
	echo "<div class='prolang'>Lang: ";
	echo $project->getProjectLanguage();
	echo "</div>";
	?>
	</div> <!-- projects -->
	<?php
	}
}
?>
	<div class='proheader narrowcurve'>
	Forked Projects</div>
<?php
foreach ($projects as $project) {

	if($project->getForkType()){
	?> 
	<div class="projects curve" >
	<?php 
	echo "<div class='proname narrowcurve'>";
	echo "<div class='prourl'><a href='";
	echo $project->getProjectURL();
	echo "' >";
	echo strtoupper($project->getProjectName());
	echo "</a></div></div>";
	echo "<div class='prodesc'>";
	echo $project->getProjectDescription();
	echo "</div>";
	echo "<div class='prourl'><a href='";
	echo $project->getProjectURL();
	echo "' >Project Home </a></div>";
	echo "<div class='prolang'>Lang: ";
	echo $project->getProjectLanguage();
	echo "</div>";
	?>
	</div> <!-- projects -->
	<?php
	}
}
?>

</div> <!-- projectList -->
<a href="http://axatrikx.com" class="button white" >Axatrikx</a>

</BODY>
</HTML>
