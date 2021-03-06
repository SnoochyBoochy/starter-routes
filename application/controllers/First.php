<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		$source = $this->quotes->get(1);
		
		$this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		
		$this->render();
	}
        
        public function gimme($id) 
        {
            $this->data['pagebody'] = 'justone';
            
                $source = $this->quotes->get($id);
		
		$this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		
		$this->render();
        }
        
        public function zzz(){
            $this->data['pagebody'] = 'justone';
            
            $source = $this->quotes->get(1);
		
            $this->data['what'] = $source['what'];
            $this->data['who'] = $source['who'];
            $this->data['mug'] = $source['mug'];
		
            $this->render();
        }
}
