<?php
		if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
		
		if(isset($_POST['srv_uploadmap_submit']))
		{
			$_POST = array_map('htmlspecialchars',$_POST);
			$_POST = array_map('strip_tags',$_POST);
			if(trim($_POST['ekdizin']) != '')
			{
				$loc = $files['moddir'] . '/' . $_POST['folder'] . '/' . $_POST['ekdizin'];
				$cmd = 'cd ' . $files['moddir'] . ' && mkdir ' . $_POST['folder'] . '/' . $_POST['ekdizin'];
				$a = ssh2exec(sshinfo(), $cmd);
				$upload = mapupload($_FILES['mapfile'] , $loc , false);
				if($upload === false): $smarty->assign('mapupload','fail');
				else: $smarty->assign('mapupload','OK');
				endif;
			}
			else
			{
				$loc = $files['moddir'] . '/' . $_POST['folder'];
				$upload = mapupload($_FILES['mapfile'] , $loc , false);
				if($upload === false): $smarty->assign('mapupload','fail');
				else: $smarty->assign('mapupload','OK');
				endif;
			}
			$smarty->assign('type','mapupload');
		}
		elseif(isset($_POST['sv_mappackage']) && isset($_GET['package']) && $_GET['package'] == 'yes')
		{
			$smarty->assign('type','packupload');
			$loc = $files['moddir'];
			$upload = mapupload($_FILES['map_package'] , $loc , true);
			if($upload === -1): $smarty->assign('packupload','filext');
			else: $smarty->assign('packupload','OK'); $smarty->assign('response',$upload);
			endif;	
		}


		$smarty->display('uploadmap.tpl');
		
?>