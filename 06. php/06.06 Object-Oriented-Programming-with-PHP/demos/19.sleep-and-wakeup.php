<?php
class Connection {
	protected $link;
	private $server, $user, $pass, $db;

	public function __construct($server, $user, $pass, $db) {
		$this->server = $server;
		$this->user = $user;
		$this->pass = $pass;
		$this->db = $db;
		$this->connect();
	}

	private function connect () {
		$this->link = mysql_connect (
			$this->server, $this->user,
			$this->pass);
		mysql_select_db($this->db, $this->link);
	}

	public function __sleep () {
		// skip serializing $link
		return array ('server', 'user', 'pass', 'db');
	}

 	public function __wakeup () {
		$this->connect();
 	}
}



?>