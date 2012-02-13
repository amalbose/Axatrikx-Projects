<?php 
class Project {
	
	function Project(){
	$projectName="";
	$projectDescription="";
	$projectURL="http://projects.axatrikx.com";
	$projectHomeURL="http://projects.axatrikx.com";
	$projectLanguage="";
	$projectCreatedDate="";
	$projectPushDate="";
	$projectForkType="";
	}

	public function setProjectDetails($detailArray){
		$this->projectName = $detailArray['name'];
		$this->projectDescription = $detailArray['description'];
		$this->projectURL = $detailArray['url'];
		$this->projectHomeURL = $detailArray['homepage'];
		if(isset($detailArray['language'])){
			$this->projectLanguage = $detailArray['language'];
		}
		else{
			$this->projectLanguage = "NA";
		}
		$this->projectForkType = $detailArray['fork'];
		$this->projectCreatedDate = $detailArray['created_at'];
		$this->projectPushDate = $detailArray['pushed_at'];
	}

	function getProjectName(){
		return $this->projectName;
	}

	function getProjectDescription(){
		return $this->projectDescription;
	}

	function getProjectURL(){
		return $this->projectURL;
	}

	function getProjectHomeURL(){
		return $this->projectHomeURL;
	}

	function getProjectLanguage(){
			return $this->projectLanguage;
	}

	function getProjectCreatedDate(){
		return $this->projectCreatedDate;
	}

	function getProjectPushDate(){
		return $this->projectPushDate;
	}

	function getForkType(){
		return $this->projectForkType;
	}

}
?>