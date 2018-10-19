<?php

namespace App\Controller;

use App\Controller\AppController;

class OnlineController extends AppController
{
	public function index()
	{
		// echo "This is testing file";

		//print_r($this->request->param['pass']);

		print_r($this->request->params['pass']);

	}
}


?>