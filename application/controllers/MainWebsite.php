<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainWebsite extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	private function common_view($views = [], $vars = [])
	{
		/* you can call model here */
		
			$vars['CURRENT_METHOD'] = $this->router->fetch_method();
			$this->load->view('frontend/layout/header.php', $vars);
			
			if (is_array($views)) {
				foreach ($views as $view) {
					$this->load->view('frontend/' . $view, $vars);
				}
			} else {
				$this->load->view('frontend/' . $views, $vars);
			}
			$this->load->view('frontend/layout/footer.php', $vars);
	}	

	
	public function index()
	{
		$this->common_view('index');
	}

}
