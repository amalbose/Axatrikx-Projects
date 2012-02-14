<?php
include_once("Project.php");
$CACHE_FILE_NAME="cache.json";
function getAllProjects(){

	$ProjectArray = array();
	$jsonString = get_content_from_github('http://github.com/api/v2/json/repos/show/Axatrikx/');
	$jsonResults =  json_decode($jsonString,true);

	$repositories=$jsonResults['repositories'];
	$noOfRepositories = sizeof($repositories);
	if($noOfRepositories>0){
		foreach ($repositories as $key) {
			$ProjectArray[]=getProjectObject($key);
			$fp = fopen('cache.json', 'w');
			fwrite($fp, $jsonString);
			fclose($fp);
		}
	}
	else {
		try{
			$string = file_get_contents("cache.json");
			$ProjectArray=json_decode($string,true);
		}
		catch(Exception $e){
			$ProjectArray="";
		}
		
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

