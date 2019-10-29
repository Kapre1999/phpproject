<?php 

/**
 * Categories 
 */
class Categorie
{
	private $db;
	
	function __construct()
	{
		$this->db = new Database;
	}

	public function getCategories()
	{
		$this->db->query("SELECT * FROM categorie");
		return $this->db->resultSet();
	}
}

?>