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
	 *@route("MainController/contact","methods"=>["get"],"name"=>"Contact")
	**/
	public function contactForm(){
	    $this->loadView("MainController/contactForm.html");
	}


	/**
	 *@route("MainController/partnerslist","methods"=>["get"],"name"=>"Partners")
	**/
	public function partnersList(){
		
		$this->loadView('MainController/partnersList.html');

	}


	/**
	 *@route("MainController/partener/{name}","methods"=>["get"])
	**/
	public function partnerDetails($name){
		
	    $this->loadView('MainController/partnerDetails.html',['name'=>$name]);

	}


	/**
	 *@route("MainController/sendMessage","methods"=>["post"])
	**/
	public function sendMessage(){
		
		$this->loadView('MainController/sendMessage.html');

	}

}
