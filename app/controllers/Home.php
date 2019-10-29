<?php 

/**
 * Home Controller Loads The Index Page 
 */

class Home extends Controller
{
	
	public function __construct()
	{
		$this->postModel = $this->model('Post');
		$this->userModel = $this->model('User');
		$this->cateModel = $this->model('Categorie');
	}

	public function index()
	{
		$post = $this->postModel->topLatestPost();
		$user = $this->userModel->showAllUsers();
		$categorie = $this->cateModel->getCategories();
	    $data = [
	      'title' => 'Home',
	      'banner_Header_Text' => 'MTB',
	      'banner_Sub_Text' => 'My Technical Blog',
	      'post' => $post,
	      'user' => $user,
	      'categorie' => $categorie
	    ];
	    $this->view('index',$data);
	}
}


?>