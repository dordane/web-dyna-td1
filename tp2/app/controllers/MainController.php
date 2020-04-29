<?php
namespace controllers;
 /**
 * Controller MainController
 **/

use ws\controllers\AbstractWsController;

/**
 * Controller MainController
 */
class MainController extends AbstractWsController {
    /**
 *
 * @get("_default","name"=>"Home")
 */
public function index() {
    $this->loadView("MainController/index.html");
    
    $menu=$this->getMenu('Home');
    $messages=$this->dataProvider->getMessages();
    $content=$this->dataProvider->getPageContent('Home');
    var_dump($menu);
    var_dump($messages);
    var_dump($content);
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
	 *@route("MainController/partner/{name}","methods"=>["get"])
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
