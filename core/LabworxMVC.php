<?php
    require_once 'core/MAIN_Controller.php';

    use Illuminate\Database\Capsule\Manager as Capsule;
    $db = new Capsule();
    $db->addConnection($config['db']);
    $db->bootEloquent();

	
	class LabworxMVC {
		
		protected $controller = 'pages';
		protected $method = 'index';
		protected $params = [];
		protected $twigloader = '';
		protected $twig = '';
        protected $viewData = array();

		public function __construct() 
		{
		
			$url=$this->parseUrl();

			/* ---------------------- GET CONTROLLER ------------------------------- */
			if(file_exists('app/controllers/'.$url[0].'.php')) {
				$this->controller = $url[0];
				unset($url[0]);
			}
			require_once 'app/controllers/'.$this->controller.'.php';
			$this->controller = new $this->controller;


			/* ---------------------- GET METHOD ------------------------------- */
			if(isset($url[1])) {
				if(method_exists($this->controller, $url[1])) {
					$this->method=$url[1];
					unset($url[1]);
				}		
			}
			$this->params = $url ? array_values($url) : [];
			call_user_func_array([$this->controller, $this->method], $this->params);



		}	

		public function parseUrl() 
		{

			if(isset($_GET['url'])) 
			{
				return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));	
			}	
			
		}

	}