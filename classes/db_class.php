<?php 
class ynsql
{      
    private $conn; 
    private $sql; 
    private $sql_result; 
     
    public function __construct($args = array()) 
    { 
        $this->conn = @mysql_connect($args['host'],$args['username'],$args['password']); 
        if(is_resource($this->conn)){ 
            if(@mysql_select_db($args['database'])){ 
                @mysql_query("SET NAMES 'latin5'"); 
            } 
            else{ 
                $this->hatavar(__FILE__,__LINE__,__FUNCTION__); 
            } 
        } 
        else{ 
            $this->hatavar(__FILE__,__LINE__,__FUNCTION__); 
        } 
    } 
     
    public function sql($query) 
    { 
        $q = trim($query); 
        if(strlen($q) == 0){ 
            $this->sql = false; 
        } 
        else{ 
            $this->sql = $q; 
        } 
    } 
     
    public function query() 
    { 
        if($this->sql !== FALSE) 
        { 
            $this->sql_result =  @mysql_query($this->sql,$this->conn); 
            if(!$this->sql_result){ 
                $this->hatavar(__FILE__,__LINE__,__FUNCTION__); 
             }else{ 
                return true; 
             } 
        } 
    } 
     
    public function rs($single = true) 
    { 
        $gmc = get_magic_quotes_gpc();
        if(is_resource($this->sql_result)) 
        {
			if($single)
			{
				$row =  mysql_fetch_assoc($this->sql_result);
				if($gmc)
				{
					return stripslashes($row);
				}
				else
				{
					return $row;
				}

			}
            $data = array(); 
			
            while($row =  mysql_fetch_assoc($this->sql_result)) 
            { 
				if($gmc)
				{
					$data[] = array_map('stripslashes',$row);
					die("aaaa");
				}
				else
				{
					$data[] = $row;
				}
            } 
            return $data; 
        } 
        else 
            $this->hatavar(__FILE__,__LINE__,__FUNCTION__); 
    } 
     
     
    public function insert($table,$info = array(),$escape = NULL) 
    { 
        $this->sql("SHOW COLUMNS FROM " . mysql_real_escape_string($table)); 
        $this->query(); 
        foreach($this->rs(false) as $rs) 
        {  
        if(in_array($rs['Field'],$escape)): 
            continue; 
        else: 
            $rows[] = $rs['Field'];  
        endif; 
        } 
         
        $val = array_combine($rows,$info); 
        $sql = sprintf("INSERT INTO %s (%s) VALUES('%s')",$table , implode(',',array_map('mysql_real_escape_string',array_keys($val))), implode("','",array_map('mysql_real_escape_string',$val))); 

		$this->sql($sql); 
        if($this->query()) 
            return true; 
        else 
            return false; 
    } 
  
    public function insertid() 
    { 
        return mysql_insert_id(); 
    } 
     
    public function numrows() 
    { 
        return mysql_num_rows($this->sql_result); 
    } 
     
    public function hatavar($file,$line,$func) 
    { 
        die('MYSQL ERROR : ' . mysql_error(). ' Line : '.$file . ' File : '. $line . ' Function : '. $func); 
    } 
     
    public function affrows() 
    { 
        return mysql_affected_rows(); 
    } 
     
    public function __destruct() 
    { 
        if(is_resource($this->sql_result)) 
        { 
            mysql_free_result($this->sql_result); 
        } 
        if($this->conn) 
        { 
            mysql_close($this->conn); 
        } 
    } 
} 
?>