<?php
set_time_limit(0);
error_reporting(E_ALL & ~E_NOTICE);
ini_set("memory_limit", "500M");
/*
	$dbhost='localhost';	//database server
	$dbuser='goip';		//database username
	$dbpw='goip';		//database password
	$dbname='goip';		//database name 哈
//*/
//ob_start();


include_once 'config.inc.php';
include_once("version.php");
include_once 'forbId.php';

//var_dump(headers_list());


//var_dump(headers_list());
/*
$dbhost1=$dbhost;
$dbuser1=$dbuser;
$dbpw1=$dbpw;
$dbname1=$dbname;
*/
function myaddslashes($var)
{
	if(!get_magic_quotes_gpc())
		return addslashes($var);
	else
		return $var;
}

class DB {
	public $conn;
	function DB(){
		global $dbhost,$dbuser,$dbpw,$dbname;
		
			$this->conn=mysqli_connect($dbhost,$dbuser,$dbpw) or die("Could not connect"); 
			$this->conn->select_db($dbname); 
			$this->conn->query("SET NAMES 'utf8'"); 
			$this->conn->query("set sql_mode='ANSI'"); 
		}
		function query($sql) {

			$result = $this->conn->query($sql); 
			return $result; 
		}
		function updatequery($sql) {

			$result = $this->conn->query($sql); 
			return $result;
        }

		function fetch_array($query) {
			return $query->fetch_array(MYSQLI_NUM);
		}
	
		function fetch_assoc($query) {
			return $query->fetch_assoc(); 
		}
	
		function num_rows($query) {
			return $query->num_rows;
		}
		function real_escape_string($item){
			return mysqli_real_escape_string($item);
		}
}

$db=new DB;

?>
