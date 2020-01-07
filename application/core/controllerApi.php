<?php

class ControllerApi {
    protected $db;
    protected $store;
    
    function __construct()
	{
		$this->db = $GLOBALS['DB_PATH'];
	}
	
	// действие (action), вызываемое по умолчанию
	function action_default()
	{
		// todo	
	}
}
