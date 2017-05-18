<?php
	session_start();
	// error_reporting(E_ALL & ~E_NOTICE);
	require("config.php");

	require("classes/bootstrap.php");
	require("classes/Controller.php");

	require("classes/Model.php");
	require("classes/Helper.php");
	require("classes/Message.php");

	require("controllers/memos.php");
	require("controllers/home.php");
	require("controllers/users.php");


	require("models/Memo.php");
	require("models/Home.php");
	require("models/User.php");

	$bootstrap = new Bootstrap($_GET);

	$controller = $bootstrap->createController();
	if($controller){
		$controller->execAction();
	}
?>