<?php
namespace controllers;
 /**
 * Controller InscriptionController
 **/
class InscriptionController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionController/index.html");
	}
}
