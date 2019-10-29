<?php 

/**
 * User's Class 
 */
class User
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function showAllUsers()
	{
		$this->db->query("SELECT * FROM users");
		return $this->db->resultSet();
	}
}

?>