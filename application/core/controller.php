<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
	
	function ErrorPage404()
	{
		$this->view->generate('404_view.php', 'template_view.php');
	}
}
