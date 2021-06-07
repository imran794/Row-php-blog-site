<?php 




class adminblog{

	private $conn;


	public function __construct()
	{
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$dbname = 'rowphpblog';


		$this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

		if (!$this->conn) {
			die('Database Connection Error');
		}
	}

}










 ?>