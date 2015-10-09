<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Manifold Garden | Wallpapers</title>
<?php include('header.php') ?>

<div class="content_wallpapers">
  <div class="region-container">
    <p class="region-title">WALLPAPERS</p>

    <div class="gallery-container-grid">
      <!-- <ul> -->
      <?php
			$classString = 'wallpaper-item gallery-item';
			$wallpapers = glob("img/content/wallpapers/*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);
						
			foreach($wallpapers as $wp){
				echo "<li class=\"".$classString."\"><img id=\"gallery-image\" data-src=\"".$wp."\"></li>\n";
						}
		?>
		<!-- </ul> -->
    </div>
  </div>

</div>
<?php include ('footer.php') ?>
</body>
</html>
