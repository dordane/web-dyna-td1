<?php
namespace controllers;
use Ubiquity\controllers\Controller;
use Ubiquity\utils\http\URequest;
use Ubiquity\utils\http\UCookie;
use Ubiquity\utils\http\UResponse;
use Ubiquity\orm\DAO;
use models\Inscription;
     /**
 * Controller InscriptionController
 **/
 class InscriptionController extends ControllerBase{

	/**
	*
	* @get("_default","name"=>"Home")
	*/
	public function index(){
	    $firstUser=DAO::getById(User::class,1);//Automatically start the database
		$this->loadView("InscriptionController/index.html");
	}
	


	/**
	 *@route("do/inscription")
	**/
	
	public function doinscription(){
	    if (!empty($_POST)){
	    echo $_POST["name"];
	    echo $_POST["addrmel"];
	    UCookie::set('name', $_POST["name"]);//duration : 1 day
	    UCookie::set('addrmel', $_POST["addrmel"]);//duration : 1 day
	    }
	    else{
	        UResponse::header('location',string /inscription);
	    }
	}





	/**
	 *@route("inscription")
	**/
	public function inscription(){
		$this->loadView('InscriptionController/inscription.html');

	}

	
	/**
	 *@route("inscriptions")
	**/
	public function inscriptions(){
	    $inscription = 'Je ne sais pas récupérer les user dans la base de données.';
	    $this->loadView('InscriptionController/inscriptions.html',["inscription"=>$inscription]);

	}

}
