<?php
include_once ("Axagit.php");
include_once ("Libraries/markdown.php");
$projectName = $_GET['project'];

#getting all projects to check the name
$projects = getAllProjects();
$projectPresent = false;
foreach ($projects as $project) {
	if ($projectName == $project->getProjectName()) {
		$projectPresent = true;
		break;
	}
}
#if projet present, display readme, redirect to home page otherwise
if ($projectPresent == true) {
	exec("python AxaGit/axagit.py " . $projectName, $output, $ret);
	if ($ret == 0) {
		$str = implode("\n", $output);
		echo Markdown($str);
	} else {
		echo "ERROR";
	}

} else {
	header("location:.");
}
?>
