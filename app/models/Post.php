<?php 

/**
 * Page Class
 */
class Post
{
	private $db;

	function __construct()
	{
		$this->db = new Database;
	}

	public function getPost()
	{
		$this->db->query('SELECT * , post.post_id as postId , users.user_id AS user_id , post.created_at As postCreated , users.created_at As userCreated FROM post INNER JOIN users INNER JOIN categorie ON post.post_user_id = users.user_id AND categorie.categorie_id = post.post_categorie_id ORDER BY post.created_at DESC');
		return $this->db->resultSet();
	}

	public function getpostById($id)
	{
		$this->db->query("SELECT * , post.post_id as postId , users.user_id AS user_id , post.created_at As postCreated , users.created_at As userCreated FROM post INNER JOIN users INNER JOIN categorie ON post.post_user_id = users.user_id AND categorie.categorie_id = post.post_categorie_id WHERE post.post_id = :postId ORDER BY post.created_at DESC");
		$this->db->bind(':postId',$id);
		$row = $this->db->single();

		return $row;
	}

	public function searchPost($keyword){
		$this->db->query('SELECT * , post.post_id as postId , users.user_id AS user_id , post.created_at As postCreated , users.created_at As userCreated FROM post INNER JOIN users INNER JOIN categorie ON post.post_user_id = users.user_id AND categorie.categorie_id = post.post_categorie_id WHERE post.post_tags LIKE "%'.$keyword.'%" ORDER BY post.created_at DESC');
		$row = $this->db->resultSet();
		return $row;
	}

	public function topLatestPost()
	{
		$this->db->query('SELECT * FROM post ORDER BY post.created_at DESC LIMIT 0,3');
		$row = $this->db->resultSet();
		return $row;
	}

	public function getmaxLike()
	{
		$this->db->query('SELECT MAX(post.post_like),post_id FROM post');
		$temprow = $this->db->resultSet();
		
	}
}


?>