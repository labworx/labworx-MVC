<?php
	
	class MAIN_Controller 
	{
		public function __construct() {
			$this->twigloader = new Twig_Loader_Filesystem('app/views');
			$this->twig = new Twig_Environment($this->twigloader,array('autoescape' => false));
            $this->viewData['site_url']='http://mvc.local';
			$this->viewData['assets_folder']= '/public/assets';
		}

		public function model($model) 
		{
			if(file_exists('app/models/'.$model.'.php')) {
				require_once 'app/models/'.$model.'.php';
				return new $model();
			} else {
				echo 'model not found!';die;
			}
		}
	}