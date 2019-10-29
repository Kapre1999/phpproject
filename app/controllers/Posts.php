<?php 
/**
 * This IS the Home Page Controller
 */
class Posts extends Controller
{
  
  function __construct()
  {
    $this->postModel = $this->model('Post');
    $this->userModel = $this->model('User');
    $this->cateModel = $this->model('Categorie');
  }

  //index Pages 
  public function index()
  {
    $post = $this->postModel->getPost();
    $user = $this->userModel->showAllUsers();
    $categorie = $this->cateModel->getCategories();
    $data = [
      'title' => 'Posts',
      'banner_Header_Text' => 'Post',
      'banner_Sub_Text' => 'All Post',
      'post' => $post,
      'user' => $user,
      'categorie' => $categorie
    ];
    $this->view('posts',$data);
  }

  public function viewPost($postId)
  {
    $postById = $this->postModel->getpostById($postId);
    $categorie = $this->cateModel->getCategories();
    $data = [
      'title' => $postById->post_title,
      'banner_Header_Text' => $postById->post_title,
      'banner_Sub_Text' => $postById->user_name,
      'postData' => $postById,
      'categorie' => $categorie
    ];

    $this->view('post',$data);
  }

  public function Search()
  {
    $keyword = filter_var($_GET['search'],FILTER_SANITIZE_STRING);

    $categorie = $this->cateModel->getCategories();

    $search = $this->postModel->searchPost($keyword);

    $data = [
      'banner_Header_Text' => 'Search',
      'banner_Sub_Text' => '',
      'title' => 'Search',
      'searchData' => $search,
      'categorie' => $categorie,
      'searchKeyword' => $keyword
    ];

    $this->view('search',$data);
  }
}


?>