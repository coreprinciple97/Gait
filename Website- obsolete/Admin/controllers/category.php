<?php
class Category extends Controller{
	protected function Index(){
		$viewmodel = new CategoryModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'category');
		}
		$viewmodel = new CategoryModel();
		$this->returnView($viewmodel->add(), true);
	}
}