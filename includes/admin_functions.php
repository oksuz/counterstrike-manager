<?php	function sw_setinfo($ip)	{
		global $db;
		
		$db->sql("SELECT * FROM server WHERE ip = '".$ip."'");
		$db->query();
		$row = $db->rs(true);
				foreach($row as $key => $info)
		{
			if($key != 'password' && $key != 'odeme')
				$_SESSION[$key] = $info;
		}
		
		$db->sql("SELECT * FROM users WHERE server_id = '".$row['id']."'");
		$db->query(); $row = $db->rs(true);
		
		$_SESSION['logged_ip'] = $_SERVER['REMOTE_ADDR'];
		$_SESSION['sess_id'] = session_id();
		$_SESSION['username'] = $row['username'];
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['logged'] = TRUE;	}?>