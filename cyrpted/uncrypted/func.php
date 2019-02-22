<?php
	function logon($username , $password)
	{
		global $db, $cs;
		checklicance();
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$db->sql("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'"); $db->query() ; $num = $db->numrows(); 
		if($num >= 1)
		{
			$row = $db->rs(true);
		}
		else
		{
			$db->sql("SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."'"); $db->query() ; $num = $db->numrows(); 
			$row = false;
			if($num < 1)
			{
				$row2 = false;
			}
			else
			{
				$row2 = $db->rs(true);
			}
		}
			
		if($row !== FALSE)
		{
			$_SESSION['logged'] = TRUE;
			$_SESSION['logged_ip'] = $_SERVER['REMOTE_ADDR'];
			$_SESSION['sess_id'] = session_id();
			$_SESSION['username'] = $username;
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['password'] = $row['password'];
			
		
			$db->sql("UPDATE server SET lastlogin_user = '".$row['username']."', lastlogin = '".date('d/m/Y - H:i:s')."' , sess_id = '".$_SESSION['sess_id']."' , logged_ip = '".$_SESSION['logged_ip']."' WHERE id = '".$row['server_id']."'");
			$db->query();
			
			$db->sql("UPDATE users SET lastlogin = '".date('d/m/Y - H:i:s')."', sess_id = '".$_SESSION['sess_id']."' , logged_ip = '".$_SESSION['logged_ip']."' WHERE id = '".$row['id']."'");
			$db->query();
			
			$db->sql("SELECT * FROM server WHERE id = '".$row['server_id']."'");
			$db->query();
			$row = $db->rs(true);
			
			foreach($row as $key => $info)
			{
				$_SESSION[$key] = $info;
			}
			
			$cs->setinfo($_SESSION['rconpass'],$_SESSION['ip'],$_SESSION['port']);
			$cs->connect();
			$cs->authenticate();
			$csinfo = ServerInfo($cs->RconCommand('status'));
			if(is_array($csinfo))
			{
				if($_SESSION['name'] != $csinfo['name'])
				{
					$db->sql("UPDATE server SET name = '".mysql_real_escape_string($csinfo['name'])."' WHERE ip = '".$_SESSION['ip']."'");
					$db->query();
				}
			}
			
		}
		else
		{
			if($row2 !== FALSE)
			{
				$_SESSION['logged'] = TRUE;
				$_SESSION['logged_ip'] = $_SERVER['REMOTE_ADDR'];
				$_SESSION['sess_id'] = session_id();
				$_SESSION['username'] = $username;
				$_SESSION['admin_id'] = $row2['id'];
			
				return 1;
			}
			else
			{
				return 0;
				$_SESSION['logged'] = false;
			}
		}
	}
	
	
	
	function is_same()
	{
		global $db;
		$db->sql("SELECT * FROM server WHERE ip = '".$_SESSION['ip']."'");
		$db->query();
		$row = $db->rs(true);
		if($_SESSION['sess_id'] == $row['sess_id']):
			return true;
		else:
			logout();
			return false;
		endif;
			
		
	}
	
	function parser($string)
	{
		preg_match('/is \"(.*?)\"/',$string,$return);
		if($return[1] != '')
		{
			return $return[1];
		}
		else
		{
			return false;
		}
	}
	
	
	function getvalue($value,$string)
	{
		preg_match('#'.$value.' \"(.*?)\"#',$string,$return);
		if($return[1] != '')
			return $return[1];
		else
			return false;
	}
	
	function is_logged()
	{
		if(isset($_SESSION['logged']) && $_SESSION['logged'])
			return true;
		else
			return false;
	}
	
	
	function logout()
	{
		if(isset($_SESSION['logged']) && $_SESSION['logged'])
		{
			foreach($_SESSION as $k => $s)
			{
				unset($_SESSION[$k]);
			}
		}
		session_destroy();
	}
	
	function ServerInfo($status)
	{
    //If there is no open connection return false

    //get server information

    //If there is no open connection return false
    //If there is bad rcon password return "Bad rcon_password."
    if(!$status || trim($status) == "Bad rcon_password.")
      return false;

   //format global server info
    $line = explode("\n", $status);
    $map = substr($line[3], strpos($line[3], ":") + 1);
    $players = trim(substr($line[4], strpos($line[4], ":") + 1));
    $active = explode(" ", $players);

    $result["ip"] = trim(substr($line[2], strpos($line[2], ":") + 1));
    $result["name"] = trim(substr($line[0], strpos($line[0], ":") + 1));
    $result["map"] = trim(substr($map, 0, strpos($map, "at:")));
    $result["mod"] = "Counterstrike " . trim(substr($line[1], strpos($line[1], ":") + 1));
    $result["game"] = "Halflife";
    $result["activeplayers"] = $active[0];
    $result["maxplayers"] = substr($active[2], 1);

    //format player info
    for($i = 1; $i <= $result["activeplayers"]; $i++)
    {
      //get possible player line
      $tmp = $line[$i + 6];

      //break if no more players are left
      if(substr_count($tmp, "#") <= 0)
        break;

      //name
      $begin = strpos($tmp, "\"") + 1;
      $end = strrpos($tmp, "\"");
      $result[$i]["name"] = substr($tmp, $begin, $end - $begin);
      $tmp = trim(substr($tmp, $end + 1));

      //ID
      $end = strpos($tmp, " ");
      $result[$i]["id"] = substr($tmp, 0, $end);
      $tmp = trim(substr($tmp, $end));

      //WonID
      $end = strpos($tmp, " ");
      $result[$i]["wonid"] = substr($tmp, 0, $end);
      $tmp = trim(substr($tmp, $end));

      //Frag
      $end = strpos($tmp, " ");
      $result[$i]["frag"] = substr($tmp, 0, $end);
      $tmp = trim(substr($tmp, $end));

      //Time
      $end = strpos($tmp, " ");
      $result[$i]["time"] = substr($tmp, 0, $end);
      $tmp = trim(substr($tmp, $end));

      //Ping
      $end = strpos($tmp, " ");
      $result[$i]["ping"] = substr($tmp, 0, $end);
      $tmp = trim(substr($tmp, $end));

      //Loss
      $tmp = trim(substr($tmp, $end));

      //Adress
      $result[$i]["adress"] = $tmp;

    } //for($i = 1; $i < $result["activeplayers"]; $i++)

    //return formatted result
    return $result;

  } 
  
  	function checklicance()
	{
		if(is_file(BASEPATH . '/licance.dat'))
		{
			$content = file_get_contents(BASEPATH . '/licance.dat');
			$content = trim($content);
			require_once(PAGE . 'licance.php');
		}
		else
		{
		   die('Lisans Dosyasi Bulunamadi');
		   @mail('root@oyunkurucusu.com','lisanssiz kullanima tesebbus',$host_neym);
		}
	}
	checklicance();