<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>MANIFOLD GARDEN  |  Reimagine physics. Explore the Infinite. </title>
<?php include('header.php') ?>

<div class="content">
  <div class="video-container">
    <iframe class="video" src="https://www.youtube.com/embed/BSP-e8tnXhw"></iframe>
  </div>

  <div class="region-container">
    <p class="region-title">GAMEPLAY</p>

    <div class="gallery-container-grid">
      <!-- <ul> -->
      <?php
        $gifs = glob("img/content/gifs_web/*.gif");
                              
        foreach($gifs as $gif){
                                  echo "<li class=\"gallery-item\"><img id=\"gallery-image\" data-src=\"".$gif."\"></li>\n";
              }
        ?><!-- </ul> -->
    </div>
  </div>

  <div class="region-container" id="screenshots">
    <p class="region-title">SCREENSHOTS</p>

    <div class="gallery-container-grid">
      <!-- <ul> -->
      <?php
                              $screenshots = glob("img/content/screenshots/*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);
                              
                              foreach($screenshots as $screenshot){
                                  echo "<li class=\"gallery-item\"><img id=\"gallery-image\" data-src=\"".$screenshot."\"></li>\n";
                              }
                          ?><!-- </ul> -->
    </div>
  </div>
 

  <div class="two-column">
    <div class="column-item">
      <div class="region-container" id="about">
        <p class="region-title-column">THE GAME</p>

        <p class="region-description body-copy">Manifold Garden (previously known as Relativity) is an exploration puzzle game that imagines a universe with a different set of physical laws. Set in an Escher-esque world filled with secrets and mysteries, you utilize a unique gravity manipulation mechanic to turn walls into floors. Learn to see the world through whole new perspectives as you navigate mindboggling architecture and solve seemingly impossible puzzles.<br>
        MANIFOLD GARDEN is being designed and developed by William Chyr, and is intended to be released on PlayStation 4, PC, Mac, and Linux in 2016.</p>
      </div>
    </div>

    <div class="column-item">
      <div class="region-container" id="dev">
        <p class="region-title-column">THE DEVELOPER</p>

        <p class="region-description body-copy"><a href="http://williamchyr.com/" target="_blank">William Chyr</a> is an independent game developer and artist currently based in Chicago. As an installation artist, he has exhibited works at the Lawrence Arts Center, Telus Spark, and High Concept Laboratories. Some of his more notable past creations include a limited-edition art label for Beck&#39;s Beer, a crowdsourced novel - The Collabowriters, and a somewhat infamous print ad. He holds a B.A. degree in Physics and Economics from the University of Chicago.</p>
      </div>
    </div>
  </div>

  <div class="region-container">
  <!-- 
    <p class="region-title">ANNOUNCEMENT LIST</p>

    <div class="email-container">
      <input class="email-text email-input" id="mce-EMAIL" name="EMAIL" placeholder="email@address.com" type="email" value=""> 
	  <input class="email-text email-button" id="mc-embedded-subscribe" name="subscribe" type="submit" value="SUBSCRIBE">
    </div>
	-->
	
	<!-- Begin MailChimp Signup Form -->
	<div id="mc_embed_signup">
	<form action="//manifoldgarden.us2.list-manage.com/subscribe/post?u=4c3e9de9c791df3387ed6b758&amp;id=497600d98a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
		 <p class="region-title">ANNOUNCEMENT LIST</p>
	<div class="email-container">
		<!--<label for="mce-EMAIL">Email Address </label> -->
		<input class="email-text email-input" type="email" value="" name="EMAIL" placeholder="email@address.com" class="required email" id="mce-EMAIL">
		<input class="email-text email-button" type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button">
	</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		
		<div style="position: absolute; left: -5000px;"><input type="text" name="b_4c3e9de9c791df3387ed6b758_497600d98a" tabindex="-1" value=""></div>
		
		
		
		</div>
	</form>
	</div>

	<!--End mc_embed_signup-->

  </div>
  
  

  <div class="region-container">
    <p class="region-title">QUOTES</p>

    <div class="center-quote-container">
      <p class="quote">&quot;In [Manifold Garden], there is no consistent up and down&ndash;progression comes at all angles, and it&#8217;s entirely possible for objects to be simultaneously above and below you.&quot;</p><a class="quote-source source-title" href="http://killscreendaily.com/articles/relativity/" target="_blank">KILLSCREEN</a>
    </div>

    <div class="column-quote-container">
      <div class="column-quote">
        <p class="quote">&quot;Every room I walked into had an &quot;Aha!&quot; moment where, in an instant, the confusing pieces fit together.&quot;</p><a class="quote-source source-title" href="http://www.polygon.com/2014/4/16/5621552/relativity-willy-chyr-preview-east-2014" target="_blank">POLYGON</a>
      </div>

      <div class="column-quote">
        <p class="quote">&quot;[Manifold Garden] may be the next game that puzzle fans talk about alongside Portal, Antichamber, and Q.U.B.E.&quot;</p><a class="quote-source source-title" href="http://www.gamezone.com/previews/indiecade-east-once-again-shows-off-the-games-you-might-be-playing-next" target="_blank">GAMEZONE</a>
      </div>
    </div>

    <div class="center-quote-container">
      <p class="quote">&quot;I played through an early alpha build and when I got the hang of switching gravity around, I felt the same excitement I had when I first started thinking with portals.&quot;</p><a class="quote-source source-title" href="http://kotaku.com/relativity-puts-you-in-an-mc-escher-drawing-1525127547" target="_blank">KOTAKU</a>
    </div>

    <div class="column-quote-container">
      <div class="column-quote">
        <p class="quote">&quot;A mysterious and mind-boggling game to say the least, I&#8217;m excited to see more.&quot;</p><a class="quote-source source-title" href="http://www.hardcoregamer.com/2014/09/29/indie-gaming-at-tokyo-game-show/106908/" target="_blank">HARDCORE GAMER</a>
      </div>

      <div class="column-quote">
        <p class="quote">&quot;[Manifold Garden] is a game that everyone should be keeping an eye on.&quot;</p><a class="quote-source source-title" href="#" target="_blank">BIGSUSHI.FM</a>
      </div>
    </div>

    <div class="center-quote-container">
      <p class="quote">&quot;The world emulates the black and white minimalism of Escher&#8217;s work, and the crisp modern design populating the walls, windows, and massive towers seen in the distance inspire a desire to explore.&quot;</p><a class="quote-source source-title" href="http://thecreatorsproject.vice.com/blog/meet-the-artist-turning-mc-eschers-relativity-into-a-video-game" target="_blank">THE CREATORS PROJECT</a>
    </div>

    <div class="column-quote-container">
      <div class="column-quote">
        <p class="quote">&quot;William Chyr is a first-time game designer, yet his debut effort, [Manifold Garden], is among the most anticipated games of 2015.&quot;</p><a class="quote-source source-title" href="http://www.wired.com/2015/01/relativity-game-development/" target="_blank">WIRED</a>
      </div>

      <div class="column-quote">
        <p class="quote">&quot;From what I played of it, I can tell that William Chyr&#8217;s [Manifold Garden] is going to be extremely well-received by puzzle gamers everywhere.&quot;</p><a class="quote-source source-title" href="http://www.playstationlifestyle.net/2015/06/25/e3-2015-willy-chyrs-relativity-preview-gravitys-enemy/#/slide/1" target="_blank">PLAYSTATION LIFESTYLE</a>
      </div>
    </div>

    <div class="center-quote-container" id="last-quote">
      <p class="quote">&quot;It&#8217;s a first-person explore-o-puzzler set in a world which looks pretty dang impossible and swish.&quot;</p><a class="quote-source source-title" href="http://www.rockpapershotgun.com/2015/06/26/relativity-trailer-escher-game/" target="_blank">ROCK PAPER SHOTGUN</a>
    </div>
  </div>

  <div class="region-container">
    <p class="region-title">AWARDS &amp; FESTIVALS</p>

    <div class="gallery-container-grid">
      <!-- <ul> -->
      <?php
                              $awards = glob("img/awards/*.{svg,SVG}", GLOB_BRACE);
                              $count = sizeof($awards);

                              foreach($awards as $award){
                                  echo "<li class=\"preview-item\"><img data-src=\"".$award."\"></li>\n";
                              }
                          ?><!-- </ul> -->
    </div>
  </div>
</div>

<?php include ('footer.php') ?>
</body>
</html>