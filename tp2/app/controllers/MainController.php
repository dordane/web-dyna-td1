<?php
namespace controllers;
 /**
 * Controller MainController
 **/
class MainController extends ControllerBase{
    /**
 *
 * @get("_default","name"=>"Home")
 */
public function index() {
    $this->loadView("MainController/index.html");
}

	/**
	 *@route("MainController/contact","methods"=>["get"])
	**/
	public function contactForm(){
	    $this->loadView("MainController/contactForm.html");
	}

}
