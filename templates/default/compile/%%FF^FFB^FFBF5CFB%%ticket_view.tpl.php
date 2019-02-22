<?php /* Smarty version 2.6.26, created on 2011-03-20 11:10:45
         compiled from ticket_view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
<div id="main-content">		

<form action="index.php?p=ticket" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Destek Talebi Detayý</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Talebi Yapan : </strong></td>
    <td style="width:350px"><?php echo $this->_tpl_vars['detail']['requestby']; ?>
</td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Aciliyet : </strong></td>
    <td><?php echo $this->_tpl_vars['detail']['critical']; ?>
</td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Konu : </strong></td>
    <td><?php echo $this->_tpl_vars['detail']['title']; ?>
</td>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td valign="top"><strong>Sorun : </strong></td>
    <td><textarea readonly="readonly" name="problem" rows="5" cols="7"><?php echo $this->_tpl_vars['detail']['description']; ?>
</textarea></td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Son Durum : </strong></td>
    <td><?php if ($this->_tpl_vars['detail']['status'] == '1'): ?>Sorumlu Bekleniyor<?php elseif ($this->_tpl_vars['detail']['status'] == '2'): ?><?php echo $this->_tpl_vars['person']['name']; ?>
 <?php echo $this->_tpl_vars['person']['surname']; ?>
 Sorumlu Olarak Atandý
	<?php elseif ($this->_tpl_vars['detail']['status'] == '3'): ?><?php echo $this->_tpl_vars['person']['name']; ?>
 <?php echo $this->_tpl_vars['person']['surname']; ?>
 Problem Ýle ilgilenmeye baþladý
	<?php else: ?>Problem / Ýstek Çözüme Ulaþtý<?php endif; ?></td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td valign="top"><strong>Sorumlu Notu : </strong></td>
    <td><?php echo $this->_tpl_vars['detail']['solution']; ?>
</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong><a href="?p=ticket">Geri Dön</a></strong></td>
  </tr>
</table>
</form>

<br />
<br />


		</div> 
		<div class="clear"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>