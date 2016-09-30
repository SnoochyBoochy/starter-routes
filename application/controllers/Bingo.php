<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['pagebody'] = 'justone';

		$source = $this->quotes->get(5);
		
		$this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		
		$this->render();
	}

}