<?php
include_once("Project.php");

function getAllProjects(){

	$ProjectArray = array();

	$jsonResults =  json_decode(get_content_from_github('http://github.com/api/v2/json/repos/show/Axatrikx/'),true);

	$repositories=$jsonResults['repositories'];
	$noOfRepositories = sizeof($repositories);
	

	foreach ($repositories as $key) {
		$ProjectArray[]=getProjectObject($key);
	}
	return $ProjectArray;
}

/* gets url */
function get_content_from_github($url) {
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,1);
	$content = curl_exec($ch);
	curl_close($ch);
	return $content;
}

function getProjectObject($JSONProjectDetails){
	$project = new Project();
	$project->setProjectDetails($JSONProjectDetails);
	return $project;
}

?>

