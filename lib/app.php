<?php
class App{
	function __construct(){

		//Obtenemos /query
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		if($url[0] == 'post'){
			echo "Es un method post";
		}else{	
			if(!empty($url[0])) {
				if(file_exists('pages/'.$url[0].'.php')){
					include_once 'pages/'.$url[0].'.php';
				}else{
					include_once 'pages/404.php';
				}
			}else{
				include_once 'pages/index.php';
			}
		}
	}
}
?>