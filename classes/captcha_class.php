<?php
/*
	(C) 2010 Class Security Captcha Image
	
	@author : Yunus Öksüz / 0xyGen a.k.a yns
	@mail   : yns [at] linuxboyz [dot] com
	@web    : http://yns.linuxboyz.com/
	
*/
class CaptchaImage
{
	
	public $font_dir 		= 'fonts';
	public $colors   		= array('178,34,34','0,100,0','205,92,92','255,0,0','255,105,108');
	public $bgcolor	 		= array(255,255,255);
	public $linecolor		= array(135,206,250);
	public $width  			= 150;
	public $height  		= 50;
	public $chars			= 5;
	public $size 			= 20;
	public $session_name	= 'securitykey';
	public $case_sensivty 	= true;
	
	
	private $im;
	private $fonts = array();
	
	public function start()
	{
		if(!function_exists('gd_info')): die('GD LIBRARY NOT FOUND'); endif;
		++$this->width;
		++$this->height;
		
		$this->im = imagecreatetruecolor($this->width,$this->height);
		$bg = imagecolorallocate($this->im,$this->bgcolor[0],$this->bgcolor[1],$this->bgcolor[2]);
		imagefill($this->im,0,0,$bg);
		
		$linecolors = imagecolorallocate($this->im,$this->linecolor[0],$this->linecolor[1],$this->linecolor[2]);
		for($i = 0 ; $i <= $this->width ; $i = $i+10 )
		{
			imageline($this->im,0,$i,$this->width,$i,$linecolors);
			imageline($this->im,$i,0,$i,$this->height,$linecolors);
		}
	}
	
	public function create()
	{
		
		header('Content-Type:image/png');
		$this->write();
		imagepng($this->im);
		imagedestroy($this->im);
	}

	private function chars()
	{
		$key = '';
		$chr = 'abcdefghijklmnoprstuxvyz1234567890ABCDEFGHIJKLMNOPRSTUWXYZ';
		for($i = 0 ; $i < $this->chars; $i++)
		{
			$key .= $chr[rand(0,strlen($chr)-1)];
		}
		if($this->case_sensivty)
		{
			$_SESSION[$this->session_name] = $key;
		}
		else
		{
			$_SESSION[$this->session_name] = strtolower($key);
		}
		return $key;
	}
	
	
	private function write()
	{
		$fonts = $this->getfonts();
		$chars = $this->chars();
		$y_orgin = ($this->size > 35) ? 60 : 30;
		$space   = ($this->size > 35) ? 60 : 30;
		if($fonts !== FALSE):
			for($i = 0 ; $i < $this->chars ; $i++)
			{
				$angle 	= rand(-15,15);
				$font 	= rand(0,count($fonts)-1);
				$color  = rand(0,count($this->colors)-1);
				$color  = explode(',',$this->colors[$color]);
				$color  = imagecolorallocate($this->im,$color[0],$color[1],$color[2]);
				imagettftext($this->im, $this->size ,$angle, 10 + ($i * $space) , $y_orgin , $color, $this->font_dir . DIRECTORY_SEPARATOR . $fonts[$font] ,$chars[$i]);
			}
		else:
			return 0;
		endif;
	}
	
	private function getfonts()
	{
		$read = opendir($this->font_dir);
		if($read)
		{
			while($list = readdir($read))
			{
				if($list != '.' && $list != '..' && preg_match('/(.ttf)$/',$list))
				{
					$this->fonts[] = $list;
				}
			}
			return $this->fonts;
		}
		else
		{
			return false;
		}
		
	}
}

?>