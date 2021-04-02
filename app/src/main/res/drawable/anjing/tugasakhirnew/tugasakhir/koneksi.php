<?php 
define('ENCRYPTION_KEY', '');
class punyaku {
    //database setup
    //MAKE SURE TO FILL IN DATABASE INFO
    var $hostname_logon = 'localhost';      //Database server LOCATION
    var $database_logon = 'tugasakhir';	//Database NAME
    var $username_logon = 'root';       	//Database USERNAME
    var $password_logon = '';       		//Database PASSWORD 
    //connect to database
    function dbconnect(){
        return $con=mysqli_connect($this->hostname_logon,$this->username_logon,$this->password_logon,$this->database_logon);
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
    }
    public function query($query){
		//return mysql_query($query);
		return mysqli_query($this->dbconnect(),$query);
	}
	
	public function select($tablename){
        /*$select= mysql_query("SELECT * FROM $tablename");
		return $select;*/
		return $this->query("SELECT * FROM ".$tablename);
	}
	
    public function update($tablename){
        /*$update= mysql_query("update $tablename");
		return $update;*/ 
		return $this->query("UPDATE ".$tablename);
    }
    
	public function insert($tablename){
        /*$insert= mysql_query("insert into $tablename");
		return $insert;*/
		return $this->query("INSERT INTO ".$tablename);
	}
    
	public function delete($tablename){
		/*$delete= mysql_query("delete FROM $tablename");
		return $delete;*/
		return $this->query("DELETE FROM ".$tablename);
	}
	
	public function arr($result){
		/*$dataaray=mysql_fetch_array($qu);
		return $dataaray;*/
		return mysqli_fetch_array($result,MYSQLI_ASSOC);
    }	
	function qRows($query){
		return mysqli_num_rows($query);
	}
}
?>
