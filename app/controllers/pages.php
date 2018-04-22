<?php
	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Pages extends MAIN_Controller {

		public function index() 
		{
			$this->viewData['pagetitle']= 'Home';
			echo $this->twig->render('pages/home.html',$this->viewData);
		}

		public function about() 
		{

			$data['pagetitle']= 'about';
			echo $this->twig->render('pages/about.html',$this->viewData);
		}


	}