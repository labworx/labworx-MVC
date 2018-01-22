<?php
	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Pages extends MAIN_Controller {

		public function home() 
		{

			$data['site_url']= 'http://localhost';
			$data['assets_folder']= '/public/assets';

			$data['pagetitle']= 'Home';
			echo $this->twig->render('pages/home.html',$data);
		}

		public function about() 
		{

			$data['site_url']= 'http://localhost';
			$data['assets_folder']= '/public/assets';

			$data['pagetitle']= 'about';
			echo $this->twig->render('pages/about.html',$data);
		}


	}