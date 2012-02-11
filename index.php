<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>Axatrikx Projects</TITLE>
	<META NAME="GENERATOR" CONTENT="OpenOffice.org 2.0  (Linux)">
	<META NAME="AUTHOR" CONTENT="Amal Bose">
</HEAD>
<BODY LANG="en-US" DIR="LTR">
<BR>
Hello Axatrikx Projects
<BR>
<?php
include_once("Axagit.php");
$jsonResults =  json_decode(get_content_from_github('http://github.com/api/v2/json/repos/show/Axatrikx/'),true);
/*foreach ($jsonResults as $result) {
	echo $result->{'url'};
	echo "<br/>";
	echo $result->{'name'};
	echo "<br/>";
}*/
/*$noOfRepositories = sizeof($jsonResults['repositories']);
for($i=0;$i<$noOfRepositories;$i++){
	if($jsonResults['repositories'][$i]['fork']==false){
		echo "<br/>Name :".$jsonResults['repositories'][$i]['name'];
		echo "<br/>Description :".$jsonResults['repositories'][$i]['description'];
		echo "<br/>URL :".$jsonResults['repositories'][$i]['url'];
		if(isset($jsonResults['repositories'][$i]['language'])){
			echo "<br/>Language :".$jsonResults['repositories'][$i]['language'];
		}
		echo "<br/>Created At :".$jsonResults['repositories'][$i]['created_at'];
		echo "<br/>Pushed At :".$jsonResults['repositories'][$i]['pushed_at'];
		echo "<br/>";
	}
}*/

/*foreach ($jsonResults['repositories'] as $key) {
	print_r($key);
	echo "<br/><br/>";
}*/
include_once('Axagit.php');
$projects = getAllProjects();
foreach ($projects as $project) {
	echo $project->getProjectName()."<br/>";
	echo $project->getProjectLanguage()."<br/><br/>";
}
?>

</P>
</BODY>
</HTML>
