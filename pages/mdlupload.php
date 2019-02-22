<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	set_time_limit(0);
	ignore_user_abort(0);
	$secretkey = '^yunusahmet^';
	
		if(isset($_POST['modelupload']))
		{
			switch($_GET['type'])
			{
				case 'pelerin':
					$_FILES['mdlfile']['name'] = notrk($_FILES['mdlfile']['name']);
					$_FILES['mdlfile']['name'] = str_replace(' ','_',$_FILES['mdlfile']['name']);

					if($_FILES['mdlfile']['error'] == 0)
					{
						$random = chars();
						$mdlname = 'oyunkurucusu_' .$random . '.mdl';
						if(preg_match('/(.mdl)$/',$_FILES['mdlfile']['name']))
						{
							if(move_uploaded_file($_FILES['mdlfile']['tmp_name'],TEMP . $mdlname))
							{
								@copy(TEMP . $mdlname , $config['misc']['fastdl'] .'models/'. $mdlname);
								
								$r = file_get_contents('http://panel.oyunkurucusu.com/compiler/compiler.php?secretkey='.$secretkey.'&randomamxxname=oyunkurucusu_'.$random.'&smaname='.$random.'&type=pelerin&mdlname='.$mdlname);
								putfile2ssh(sshinfo(), $config['misc']['compiled'] . 'oyunkurucusu_'.$random.'.amxx' , $files['plugindir'] . '/' . 'admin_pelerin.amxx'  );
								putfile2ssh(sshinfo(), TEMP . $mdlname , $files['mdldir']  . '/' . $mdlname  );
								@unlink(TEMP . $mdlname);
								@unlink($config['misc']['compiled'] . 'oyunkurucusu_'.$random.'.amxx');
								
							}
							else
							{
								$smarty->assign('mdlerror',1);
							}
						}
						else
						{
							$smarty->assign('mdlerror',2);
						}
					}
					else
					{
						$smarty->assign('mdlerror',3);
					}
					
				break;
				
				case 'jailmodel':
					$random = chars();
					/*if(array_key_exists('ct',$_POST['dontupload']) && array_key_exists('t',$_POST['dontupload']))
					{
						echo 'en az bir model secilmeili';
					}
					elseif(array_key_exists('ct',$_POST['dontupload']))
					{
						echo 'sadece t';
					}
					elseif(array_key_exists('t',$_POST['dontupload']))
					{
						echo 'sadece ct';
					}
					else
					{*/
						$_FILES['mdlfile']['name']['ct'] 	= notrk($_FILES['mdlfile']['name']['ct']);
						$_FILES['mdlfile']['name']['t'] 	= notrk($_FILES['mdlfile']['name']['t']);
						$_FILES['mdlfile']['name']['ct'] 	= str_replace(' ','_',$_FILES['mdlfile']['name']['ct']);
						$_FILES['mdlfile']['name']['t'] 	= str_replace(' ','_',$_FILES['mdlfile']['name']['t']);
						
						if($_FILES['mdlfile']['error']['ct'] == 0 && $_FILES['mdlfile']['error']['t'] == 0)
						{
							if(preg_match('/(.mdl)$/',$_FILES['mdlfile']['name']['ct']) && preg_match('/(.mdl)$/',$_FILES['mdlfile']['name']['t']))
							{
								$random = chars();
								$mdlname['ct']	= 'oyunkurucusuct_' .$random . '.mdl';
								$mdlname['t'] 	= 'oyunkurucusut_' .$random . '.mdl';
								$dir['ct'] 		= 'oyunkurucusuct_' .$random;
								$dir['t']		= 'oyunkurucusut_' .$random;
								if(move_uploaded_file($_FILES['mdlfile']['tmp_name']['t'] , TEMP . $mdlname['t']) && move_uploaded_file($_FILES['mdlfile']['tmp_name']['ct'] , TEMP . $mdlname['ct']))
								{
									@mkdir($config['misc']['fastdl'] .'models/player/'.$dir['t']);
									@mkdir($config['misc']['fastdl'] .'models/player/'.$dir['ct']);
									@copy(TEMP . $mdlname['ct'] , $config['misc']['fastdl'] .'models/player/'.$dir['ct'].'/'.$mdlname['ct']);
									@copy(TEMP . $mdlname['t'] , $config['misc']['fastdl'] .'models/player/'.$dir['t'].'/'.$mdlname['t']);
									$sshinfo = sshinfo();
									ssh2exec($sshinfo, 'cd '.$_SESSION['dir'] . '/cstrike/models/player/ && mkdir '. $dir['ct']);
									ssh2exec($sshinfo, 'cd '.$_SESSION['dir'] . '/cstrike/models/player/ && mkdir '. $dir['t']);
									putfile2ssh($sshinfo , TEMP . $mdlname['t'] , $_SESSION['dir'] . '/cstrike/models/player/'. $dir['t'] . '/' . $mdlname['t']);
									putfile2ssh($sshinfo , TEMP . $mdlname['ct'] , $_SESSION['dir'] . '/cstrike/models/player/'. $dir['ct'] . '/' . $mdlname['ct']);
									$url = 'http://panel.oyunkurucusu.com/compiler/compiler.php?secretkey='.$secretkey.'&type=jailmodel&randomamxxname=oyunkurucusu_'.$random.'&smaname='.$random.
									'&mdlname[ct]='.$dir['ct'].'&mdlname[t]='.$dir['t'];
									file_get_contents($url);
									putfile2ssh($sshinfo, $config['misc']['compiled'] . 'oyunkurucusu_'.$random.'.amxx' , $files['plugindir'] . '/' . 'jailbreak_manager_en.amxx');
									@unlink(TEMP . $mdlname['t']);
									@unlink(TEMP . $mdlname['ct']);
									@unlink($config['misc']['compiled'] . 'oyunkurucusu_'.$random.'.amxx');
								}
								else
								{
									$smarty->assign('mdlerror',1);
								}
							}
							else
							{
								$smarty->assign('mdlerror',2);
							}
						}
						else
						{
							$smarty->assign('mdlerror',3);
						}
					//}
	
				break;
				
				case 'head':
					$_FILES['mdlfile']['name'] = notrk($_FILES['mdlfile']['name']);
					$_FILES['mdlfile']['name'] = str_replace(' ','_',$_FILES['mdlfile']['name']);

					if($_FILES['mdlfile']['error'] == 0)
					{
						$random = chars();
						$mdlname = 'oyunkurucusu_' .$random . '.mdl';
						if(preg_match('/(.mdl)$/',$_FILES['mdlfile']['name']))
						{
							if(move_uploaded_file($_FILES['mdlfile']['tmp_name'],TEMP . $mdlname))
							{
								@copy(TEMP . $mdlname , $config['misc']['fastdl'] .'models/'. $mdlname);
								$r = file_get_contents('http://panel.oyunkurucusu.com/compiler/compiler.php?secretkey='.$secretkey.'&randomamxxname=oyunkurucusu_'.$random.'&smaname='.$random.'&type=head&mdlname='.$mdlname);
								putfile2ssh(sshinfo(), $config['misc']['compiled'] . 'oyunkurucusu_'.$random.'.amxx' , $files['plugindir'] . '/' . 'admin_head.amxx'  );
								putfile2ssh(sshinfo(), TEMP . $mdlname , $files['mdldir']  . '/' . $mdlname  );
								@unlink(TEMP . $mdlname);
								@unlink($config['misc']['compiled'] . 'oyunkurucusu_'.$random.'.amxx');
							}
							else
							{
								$smarty->assign('mdlerror',1);
							}
						}
						else
						{
							$smarty->assign('mdlerror',2);
						}
					}
					else
					{
						$smarty->assign('mdlerror',3);
					}
					
				break;
				
			}
		}
	
	/*
Array
(
    [mdlfile] => Array
        (
            [name] => Array
                (
                    [ct] => 
                    [t] => 
                )

            [type] => Array
                (
                    [ct] => 
                    [t] => 
                )

            [tmp_name] => Array
                (
                    [ct] => 
                    [t] => 
                )

            [error] => Array
                (
                    [ct] => 4
                    [t] => 4
                )

            [size] => Array
                (
                    [ct] => 0
                    [t] => 0
                )

        )

)

	*/
	
	$smarty->display('mdlupload.tpl');

?>