

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
	</head>
	<body>

<?php
set_time_limit(0);
	if(isset($_POST['uploadbaby']))
	{
		$_POST = array_map('mysql_real_escape_string',$_POST);
		$ssh = sshinfo();
		foreach($_POST as $k => $v)
		{
			if($v == '')
			{
				die('<h1><p align="center">Boş yer bırakmışke <a href="/?p='.$_GET['p'].'">Geriii</a></p></h1>');
			}
		}
		$dosya = TEMP . $_POST['dosya_adi'];
		if(move_uploaded_file($_FILES['upload_edilcek']['tmp_name'], $dosya))
		{
			$db->sql("SELECT * FROM server");
			$db->query();
			$r = $db->rs(false);
			$insert['filename'] = $_POST['dosya_adi'];
			$insert['pluginname'] = $_POST['plugin_adi'];
			$insert['descp'] = $_POST['aciklama'];
			$insert['type'] = $_POST['tip'];
			$insert['inconfig'] = $_POST['ini'];
			$insert['cvarcfg'] = $_POST['cfg'];
			$db->insert('plugins',$insert,array('id'));
			$id = $db->insertid();
			foreach($r  as $key => $val)
			{
				$upup = $val['dir'] . '/cstrike/addons/amxmodx/plugins/' . $_POST['dosya_adi'];
				putfile2ssh($ssh, $dosya , $upup);
				if($_POST['tip'] == 'genel')
				{
					$file = getfilefromssh($ssh, $val['dir'] . '/cstrike/addons/amxmodx/plugins.ini',TEMP);
					$content = file_get_contents($file);
					if(strpos($content, $_POST['dosya_adi']) === FALSE)
					{
						$fp = fopen($file,'a');
						fwrite($fp , chr(0x0A) . ";".$_POST['dosya_adi']);
						fclose($fp);
						putfile2ssh($ssh, $val['dir'] . '/cstrike/addons/amxmodx/configs/plugins.ini' , $file);
					}
					else
					{
						echo $val['ip'] . '\'de zaten mevcut ak.<br />';
					}
				}
				else
				{
					$pointer['deathrun'] = 'DeathrunManager.amxx';
					$pointer['jail'] = 'jailbreak_manager_en.amxx';
					$file = getfilefromssh($ssh, $val['dir'] . '/cstrike/addons/amxmodx/configs/mapconfig/plugins.ini',TEMP);
					$fileArray = file_get_contents($file);
					$fileArray = explode("\n",$fileArray);
					$count = count($fileArray);

					for($i = 0 ; $i < $count ; $i++)
					{
						if($_POST['tip'] == 'jail')
						{
							if($fileArray[$i] == $pointer['jail'])
							{
								$fileArray[++$i] = ';'.$_POST['dosya_adi'];
							}
						}
					}
					
					
					$content = implode("\n",$fileArray);
					file_put_contents($file,$content);
					putfile2ssh($ssh, $file , $val['dir'] . '/cstrike/addons/amxmodx/configs/mapconfig/plugins.ini');
					
				}

				$ins['server_id'] = $val['id'];
				$ins['plugin_id'] = $id;
				$ins['status'] = 0;
				$db->insert('plugin_status',$ins, array('id'));
				unlink($file);
			echo	$val['ip'] . ' OK ' . "\n<br/>";
			}
		}
		echo 'Bitti';
	}
	
	/*
	Array
(
    [id] => 17
    [admin_id] => 1
    [ip] => 213.128.84.166
    [port] => 27015
    [rconpass] => osysys
    [grup] => servergrubu1
    [name] => Astalavista Full Mod [Klaan Server] No Sxe
    [dir] => /home/hlds/166
    [lastlogin] => 25/03/2011 - 20:17:57
    [lastlogin_user] => oyunkurucusu166
    [sess_id] => 5e354bd477cbb79ccf14eef3856ad4fb
    [odeme] => 
    [logged_ip] => 78.179.46.98
    [mail] => 
    [usersync] => 1
						while(!feof($fp))
					{
						$content .= fread($fp , 256);
						if($_POST['tip'] == 'jail')
						{
							if(strpos($content , $pointer['jail']) !== FALSE)
							{
								$content .= chr(0x0A) . $_POST['dosya_adi'];
							}
						}
					}
)

	*/
?>


<form action="" method="post" enctype="multipart/form-data">
<table align="center" width="800">
	<tr>
		<td>Dosya Adı : </td>
		<td><input type="text" name="dosya_adi"></td>
	</tr>
	
	<tr>
		<td>Yüklencek : </td>
		<td><input type="file" name="upload_edilcek"></td>
	</tr>
	<tr>
		<td>Plugin Adı : </td>
		<td><input type="text" name="plugin_adi"></td>
	</tr>
	<tr>
		<td>Açıklama : </td>
		<td><input type="text" name="aciklama"></td>
	</tr>
	<tr>
		<td>Tipatte : </td>
		<td><select name="tip">
			<option value=""></option>
			<option value="genel">Genel</option>
			<option value="jail">Jail</option>
			<option value="deahtun">Deathrun</option>
			<option value="surf">Surf</option>
		</select></td>
	</tr>
	<tr>
		<td>Cfg : </td>
		<td><select name="cfg">
			<option value="customcfg">Custom.cfg</option>
		</select></td>
	</tr>
	<tr>
	<td>ini : </td>
		<td><select name="ini">
			<option value="plugins.ini">plugins.ini</option>
			<option value="mapconfig.ini">mapconfig.ini</option>
		</select></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="uploadbaby" value="Üpload Beybi"></td>
	</tr>
</table>
</form>


</body>


</html>