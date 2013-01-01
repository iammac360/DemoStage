<?php
class PaperJSDemo extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->title = "Paper JS Demo";
		$this->keywords = "paperjs, javascript, vector";
		$this->hasNav = FALSE;
		$this->useHeader = FALSE;
		$this->useBasejs = FALSE;
		$this->css = array('custom-style.css');
	}

	public function index() 
	{
		$this->javascript = array('libs/paper.js');
		$this->jstmpl = array('pages/paperjsdemo/demo-paperjs');
		$this->_render('pages/paperjsdemo/index');
	}
}