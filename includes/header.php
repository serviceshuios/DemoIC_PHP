<?php

$htmlCategories = "";
session_start();

$categories = getAllCategories();

foreach ($categories as $categorie){
	$htmlCategories .= '<a href="#">'.$categorie["nom"].'&nbsp;';
}

?>
<table width="100%">
	<tr>
		<td>
			<a href="/">
				<img src="http://www.nyan.cat/cats/original.gif">
			</a>
		</td>
		<td width="100%">
			<img style="height:100px;" src="https://www.asus.com/websites/global/products/TGbOnmfAhGPdSgTm/img/animation/animate_6.jpg">
			<img style="height:100px;" src="https://www.asus.com/media/global/products/aKtE6ThoPdoHIZxk/P_setting_111_1_90_end_225.png">
			<img style="height:100px;" src="https://www.asus.com/fr/Tower-PCs/ROG-GT51CA/websites/global/products/bBXDBgscZwGcWzdW/img/pcie-hero.jpg">
		</td>
		<td>
			<?php if (!isset($_SESSION['name'])):?>
				<form name="auth" method="post">
					Login : <input type="text" id="login" name="login">&nbsp;Pass : <input type="text" id="password" name="password">
				</form>
			<?php else: ?>
				Bonjour <?php echo $_SESSION['name'];?>
			<?php endif; ?>
		</td>
	</tr>
	<tr colspan="3">
		<td>
			<form name="search" method="post">
				<input type="text" id="search" name="search">&nbsp;<input type="submit">
			</form>&nbsp;
			<a href="/">Home</a>
			<?php echo $htmlCategories;?>
		</td>
	</tr>
</table>