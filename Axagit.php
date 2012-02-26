<?php
include_once ("Project.php");
$CACHE_FILE_NAME = "cache.json";
function getAllProjects() {

	$ProjectArray = array ();
	$jsonString = get_content_from_github('http://github.com/api/v2/json/repos/show/Axatrikx/');
	$jsonResults = json_decode($jsonString, true);

	$repositories = $jsonResults['repositories'];
	$noOfRepositories = sizeof($repositories);
	if ($noOfRepositories > 0) {
		foreach ($repositories as $key) {
			$ProjectArray[] = getProjectObject($key);
		}
		$fp = fopen('cache.json', 'w');
		fwrite($fp, $jsonString);
		fclose($fp);
	} else {
		try {
			$line = "";
			$file_handle = fopen("cache.json", "r");
			while (!feof($file_handle)) {
				$line .= fgets($file_handle);
			}
			fclose($file_handle);
			$jsonResults1 = json_decode($line, true);
			$repositories = $jsonResults1['repositories'];
			$noOfRepositories = sizeof($repositories);
			foreach ($repositories as $key) {
				$ProjectArray[] = getProjectObject($key);
			}
		} catch (Exception $e) {
		}

	}
	return $ProjectArray;

}

/* gets url */
function get_content_from_github($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1);
	$content = curl_exec($ch);
	curl_close($ch);
	return $content;
}

function getProjectObject($JSONProjectDetails) {
	$project = new Project();
	$project->setProjectDetails($JSONProjectDetails);
	return $project;
}
?>

