<?php
	function logon($username , $password)
	{
		global $db, $cs;
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
  
  
  function sshinfo()
  {
	global $db;
	$db->sql("SELECT grup FROM server WHERE ip = '".$_SESSION['ip']."'");
	$db->query();
	$row = $db->rs(true);
	$db->sql("SELECT * FROM sshinfo WHERE grup = '".$row['grup']."'");
	$db->query();
	unset($row); $row = $db->rs(true);
	if(is_array($row))
		return $row;
	else
		return false;
  }
  
  function getfilefromssh($sshinfo , $file ,  $localdir)
  {
	$sshconn = ssh2_connect($sshinfo['ip'] , intval($sshinfo['port']));
	if($sshconn)
		ssh2_auth_password($sshconn, $sshinfo['sshuser'], $sshinfo['sshpass']);
	else
		return false;
	
	$fileprefix = substr(md5(time()), 0 , 9);
	$_SESSION['fileprefix'] = $fileprefix;

	$localfile   =  $localdir .  basename($file) .'_'. $fileprefix;
	
	ssh2_scp_recv($sshconn , $file , $localfile );
	@chmod($localfile , 0777);
	return $localfile;
  }


  function putfile2ssh($sshinfo , $localfile , $remotefile , $chmod = 0644)
  {
	$sshconn = ssh2_connect($sshinfo['ip'] , intval($sshinfo['port']));
	ssh2_auth_password($sshconn, $sshinfo['sshuser'], $sshinfo['sshpass']);
	ssh2_scp_send($sshconn , $localfile , $remotefile);
  }
  
  function ssh2exec($sshinfo, $command)
  {
	$sshconn = ssh2_connect($sshinfo['ip'] , intval($sshinfo['port']));
	ssh2_auth_password($sshconn, $sshinfo['sshuser'], $sshinfo['sshpass']);
	$cikti = ssh2_exec($sshconn, $command);
	stream_set_blocking($cikti, true);
	$line = '<pre>';
	while($get = fgets($cikti))
	{
		$line .= $get;
	}
	$line .= '</pre>';
	return $line;                                     
  }
  
  function changeval($values , $file)
  {
	getfilefromssh(sshinfo(), $file , TEMP);
	
	$fname = TEMP . basename($file) . '_' . $_SESSION['fileprefix'];
	$fp = fopen($fname , 'r');
	$changeme = fread($fp , filesize($fname));
	fclose($fp);
	
	foreach($values as $key => $value)
	{		
		$read = getvalue($key,$changeme);
		$write = $key .' "'.$value.'"';
	
		$changeme = str_replace($key. ' "'.$read.'"' , $write , $changeme);
	}
	
	$fp = fopen($fname , 'w+');
	fwrite($fp , $changeme);
	fclose($fp);	
	putfile2ssh(sshinfo() , $fname , $file);
	unset($_SESSION['fileprefix']);
	unlink($fname);
  }
  

  
  function get_adsmessage($file,$delete = true)
  {
	if(is_file(BASEPATH . '/cache/messages'.str_replace('.','',$_SESSION['ip']).'.php'))
	{
		include(BASEPATH . '/cache/messages'.str_replace('.','',$_SESSION['ip']).'.php');
		return $data;
	}
  
	getfilefromssh(sshinfo(),$file, TEMP);
	$fname = TEMP . basename($file) .'_'. $_SESSION['fileprefix'];
	$fp = fopen($fname , 'r');
	$content = fread($fp , filesize($fname));
	fclose($fp);
	
	preg_match_all('/amx_imessage "(.*?)" /',$content,$imessage);
	preg_match('/amx_scrollmsg "(.*?)" "(.*?)"/',$content,$scrollmsg);
	$imessage = array_map('trim',$imessage[1]);
	if($delete): unlink($fname); endif;
	$data = array('scrollmsg'=>$scrollmsg, 'imessage'=>$imessage,'tempfile'=>$fname);
	file_put_contents(BASEPATH . '/cache/messages'.str_replace('.','',$_SESSION['ip']).'.php',"<?php \n \$data = ".var_export($data,true)." \n ?>");
	return $data;
  }
  
  
  function notrk($string)
  {
	$trk = array('Ý','Þ','Ü','Ð','Ö','Ç','ý','þ','ü','ð','ö','ç');
	$notrk = array('I','S','U','G','O','C','i','s','u','g','o','c');
	return str_replace($trk,$notrk,$string);
  }

  function picupload($file,$dir)
  {
	$filesizemb = $file['size'] / 1048576;
	if($filesizemb <= 1)
	{ 
		
		if(preg_match('/(jpeg|jpg|gif|png)$/',$file['name']))
		{
			$filext = explode('.',$file['name']);
			$filext = end($filext);
			$rndname = substr(md5(time()),3,7);
			if(@move_uploaded_file($file['tmp_name'],$dir . $rndname.'.'.$filext))
			{
				return $dir . $rndname.'.'.$filext;
			}
			else
			{
				return 1;
			}
			
		}
		else
		{
			return 0;
		}
	}
	else
	{
		return -1;
	}
  }
  
  function mapupload($file,$remotedir , $package = false)
  {
		if($package)
		{	
			if(preg_match('/(zip)$/',$file['name']))
			{
				if(move_uploaded_file($file['tmp_name'], TEMP . $file['name'] . '__oyunkurucusu'))
				{
					putfile2ssh(sshinfo() , TEMP . $file['name'] . '__oyunkurucusu' , $remotedir .'/'. $file['name'] );
					$response = ssh2exec(sshinfo() , 'cd '. $remotedir .'/ && unzip ' . $file['name'] . ' && rm -rf ' . $file['name']);
					unlink(TEMP . $file['name'] . '__oyunkurucusu');
					return $response;	
				}
			}	
			else
			{
				return -1;
			}
		}
		else
		{
			putfile2ssh(sshinfo() , $file['tmp_name'] , $remotedir .'/'. $file['name'] );
		}
  }
  
  function bsp_replace($string)
  {
	return strtolower(str_replace('.bsp','',$string));
  }
  
  function amxaddadmin($admininfo = array())
  {
	 global $files;
	 if($admininfo['user'] == '' || $admininfo['pass'] == '' || $admininfo['access'] == '') return false;
	 $admin = '"'.$admininfo['user'].'" "'.$admininfo['pass'].'" "'.$admininfo['access'].'" "a" //'.$admininfo['comment'].'';
	 $file = getfilefromssh(sshinfo(), $files['amxadmins'] , TEMP);
	 if($file === FALSE) return false;
	 
	 $fp = fopen($file , 'a');
	 if($fp)
	 {
		 fwrite($fp , "\n". $admin);
		 fclose($fp);
	 }
	 else
	 {
		return false;
	 }
	 
	 putfile2ssh(sshinfo(), $file , $files['amxadmins']);
	 unlink($file);
	 return true;
  }
  
  function deleteadmin($sqlid)
  {
	 global $db, $files;
	 $tempfile = TEMP . 'users.ini_' . substr(md5(time()),4,12);
	 $db->sql("SELECT * FROM csadmin WHERE id = '".$sqlid."'"); $db->query();
	 if($db->numrows() < 1)
	 {
		return false;
	 }
	 
	 $db->sql("DELETE FROM csadmin WHERE id = '".$sqlid."' AND server_id = '".$_SESSION['id']."'");
	 $db->query();
	 $db->sql("SELECT * FROM csadmin WHERE server_id = '".$_SESSION['id']."'"); $db->query(); $row = $db->rs(false);
	 
	 foreach($row as $key => $val)
	 {
		$admins .= '"'.$val['user'].'" "'.$val['pass'].'" "'.$val['access'].'" "a" //'.$val['comment'].''."\n";
	 }
	 
	 $fp = fopen($tempfile,'w+');
	 fwrite($fp , $admins);
	 fclose($fp);
	 
	putfile2ssh(sshinfo(), $tempfile , $files['amxadmins']);
	unlink($tempfile);
	return true;
	 
  }
  
  function adminsync($deleteall = false)
  {
		global $db, $files;
		$file = getfilefromssh(sshinfo(), $files['amxadmins'] , TEMP);
		$fp = fopen($file , 'r');
		$data = fread($fp , filesize($file));
		fclose($fp);
		preg_match_all('/"(.*?)" "(.*?)" "(.*?)" "(.*?)"/',$data,$admins);
		$count = count($admins[1]);
		
		if($deleteall)
		{
			$db->sql("DELETE FROM csadmin WHERE server_id = '".$_SESSION['id']."'");
			$db->query();
		}
		
		for($i = 0 ; $i < $count ; $i++)
		{
			$admin['server_id'] = $_SESSION['id'];
			$admin['user'] = $admins[1][$i];
			$admin['pass'] = $admins[2][$i];
			$admin['access'] = $admins[3][$i];

			$db->sql("SELECT * FROM csadmin WHERE user = '".mysql_real_escape_string($admin['user'])."' AND server_id = '".$_SESSION['id']."'");
			$db->query();
			if($db->numrows() < 1)
			{
				$db->insert('csadmin',$admin,array('id','comment'));
			}
			else
			{
				continue;
			}
		}
		@unlink($file);
  }
  
	function session_seted()
	{
		if(isset($_SESSION['rconpass']) && isset($_SESSION['ip']) && isset($_SESSION['port']))
			return 1;
		elseif(is_logged())
			return 0;
		else
			return -1;
	}
	
	function chars()
	{
		$key = '';
		$chr = 'abcdefghijklmnoprstuxvyz1234567890ABCDEFGHIJKLMNOPRSTUWXYZ';
		for($i = 0 ; $i < 7; $i++)
		{
			$key .= $chr[rand(0,strlen($chr)-1)];
		}
		return $key;
	}
  
	function UpdateSession()
	{
		global $db;
		$db->sql("SELECT users.*,server.rconpass FROM server INNER JOIN users ON server.id = users.server_id WHERE users.server_id = '".$_SESSION['id']."' AND users.id = '".$_SESSION['user_id']."'");
		$db->query();
		$row = $db->rs();
		if($row === FALSE): return false; endif;
		if($row['rconpass'] != $_SESSION['rconpass'])
		{
			foreach($row as $key => $info)
			{
				if($key != 'password')
					$_SESSION[$key] = $info;
			}
		}
		if($_SESSION['password'] != $row['password'] || !isset($_SESSION['password']))
		{
			header('Location:?p=login&action=logout');
		}
	}
	
	function timediff($dbtime)
	{
		list($g,$a,$y) = explode('.',$dbtime);
		$finishTime = mktime(0,0,0,$a,$g,$y);
		$now = time();
		$diff = ($finishTime - $now)/ 86400;
		$diff = floor($diff);
		
		if($now > $finishTime)
		{
			return 'toolate';
		}
		elseif($diff == 0)
		{
			return 'zero';
		}
		else
		{
			return $diff;
		}
	}
	
	function checklicance()
	{
		if(is_file(BASEPATH . 'licance.dat'))
		{
			$content = file_get_contents(BASEPATH . 'licance.dat');
			$content = trim($content);
			require_once(PAGE . 'licance.php');
		}
		else
		{
		   die('Lisans Dosyasi Bulunamadi');
		   @mail('root@oyunkurucusu.com','lisanssiz kullanima tesebbus',$host_neym);
		}
	}
  
?>