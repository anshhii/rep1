<?php
	class AdministradorController extends AppController{
		var $name = "Administrador";
		var $uses = array('Publicacion', 'Autor', 'Receta');
		var $layout = 'administrador';
		function index(){
			// $arrPublicaciones = $this->Administrador->find('all');
			// pr($arrPublicaciones);
		}
		function post(){

		}
		function save_post(){
			//pr($this->data);
			$this->Publicacion->create();
			if($this->Publicacion->save($this->data)){
				echo json_encode(array('sucess' => true));
			}else{
				echo json_encode(array('sucess' => false));
			}
			exit;
		}
		function list_post(){
			$arrPublicaciones = $this->Publicacion->find('all');
			//pr($arrPublicaciones);		Para imprimir 
			$this->set('publicaciones', $arrPublicaciones);
		}
		function autor(){
			$arrAutores = $this->Autor->find('all');
			$this->set('autores', $arrAutores);
		}
		function save_autor(){
			//pr($this->data);
			$this->Autor->create();
			if($this->Autor->save($this->data)){
				echo json_encode(array('sucess' => true));
			}else{
				echo json_encode(array('sucess' => false));
			}
			exit;
		}
		function list_autor(){
			$arrAutores = $this->Autor->find('all');
			//pr($arrAutores);
			$this->set('autores', $arrAutores);
		}
		function recetas(){
			$arrRecetas = $this->Receta->find('all');
			pr($arrRecetas);
			exit;
		}
	}
?>