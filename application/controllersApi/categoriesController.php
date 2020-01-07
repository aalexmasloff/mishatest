<?php

class CategoriesController extends ControllerApi
{
    function __construct()
	{
        parent::__construct();
        $this->store = new CategoryStore($this->db);
    }
    
    public function get()
    {
        $result = $this->store->getAll();
        return json_encode($result);
    }
}