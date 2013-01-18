<div class="three columns social">
	<a class="socialfade logos" href="<?php echo $site_root;?>" title="<?php echo $site_name; ?>"><img src="images/<?php echo strtolower($site_name); ?>_logo_h.png" alt="our logo"></a>
</div>

<div class="thirteen columns social righty">
	<?php

	foreach ($menus as $menu) {
		if($menu[2] == $pageName){
			echo '<a class="navlinks active" href="./'.$menu[2].'.php?lang='.$lang.'" title="'.$menu[1].'">'.$menu[0].'</a>';
		} else {
			echo '<a class="navlinks active" href="./'.$menu[2].'.php?lang='.$lang.'" title="'.$menu[1].'">'.$menu[0].'</a>';
		}
	}

	?>
</div>