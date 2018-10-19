<?php 

namespace App\Controller;

use App\Controller\AppController;

class TestController extends AppController
{
	// public function index()
	// {
	// 	//$this->autoRender = false;

	// 	//using this autoRender is not finding the template file or .ctp file

	// 	echo "This is testing for file";
	// }


	//Creating a constrtuctor for this page]

	public function initialize()
	{
		parent::initialize();
		$this->viewBuilder()->layout('testLayout');
	}

	public function index()
	{
		//echo "This is testing file";

		$this->set("name","Bahlul Siddiquee Tausif");
		$this->set("Position","Software Engineer");

		$channel = array(
			"author" => "Tausif",
			"developer" => "Tausif",
			"date" => "10-20-28",
			"age" => "25"
		);
		$this->set("data", $channel);

		$this->set(compact("channel"));

//For adding the title into the website
		$this->set("title","Online Shop Store");
	}


}






















/*
	public function testing()
	{
		//$this->autoRender = false;
		echo "Testing";
	}
	*/
?>