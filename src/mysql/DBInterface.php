<?php 
namespace mysql;

Interface DBInterface
{
	private $host;
	private $port;
	private $dbname;
	public function query();
	public function insert();
	public function delete();
	public function update();
}


 ?>