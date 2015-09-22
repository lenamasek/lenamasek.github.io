---
layout: post
title:  "Manifold Garden"
date:   2015-09-22
category: project
---

[Manifold Garden](http://manifold.garden) is a fantastic exploration-puzzle game set in an Escher-esque world  by [William Chyr](http://williamchyr.com). William is an artist, currently in Chicago, doing a lot of work at the intersection of art and science. 

William contacted me in the spring of 2015 to design a website for the rebranding of Manifold Garden, known at the time as Relativity. He shared some of his sketches and a few sites as inspiration, including [FireWatch](http://firewatchgame.com) by Campo Santo and [Alto's Adventure](http://altosadventure.com) by Snowman. We worked well together to come up with a design for the site.

<div class="span_3_of_6">
<img src="{{ site.baseurl }}/assets/img/MG-Layout-1.jpg">
</div>

<div class="span_3_of_6">
<img src="{{ site.baseurl }}/assets/img/MG-Layout-2.jpg">
</div>

[David Laskey](http://twitter.com/david_laskey), a game developer William contracted, began building the functionality for the site while I finished up the design in Illustrator. Once William signed off on my work, I put together a quick but precise style guide for David to use to incorporate my design to the front-end of the site. When everything was built, I took over the code to make final tweaks to the site as William finalized some content. We also realized the disconnect of working in Illustrator and not in the browser required a few additional tweaks to the final design. The size of the content and copy seemed huge when we got in browser, which reiterated the importance of designing in the browser as soon as possible. 

<div class="span_3_of_6">
<img src="{{ site.baseurl }}/assets/img/MG-Layout-3.jpg">
</div>

<div class="span_3_of_6">
<img src="{{ site.baseurl }}/assets/img/MG-Layout-4.jpg">
</div>

For all sections of gameplay gifs, screenshots, and wallpapers, David wrote a PHP script to search the 'images' folder for a specified group of files and flow them into the designed grid. Toward the end of the project, William requested a page for wallpapers. Because this script was in place, he could insert as many wallpapers as he wanted. When I realized the site was getting heavy with images, I employed the simple [Unveil](http://luis-almeida.github.io/unveil/) jQuery plugin, based on the original [Lazy Load](http://www.appelsiini.net/projects/lazyload) plugin by Mike Tuupola. This plugin loads images as they're needed, instead of all at once. This allows a user to see the full site when it loads instead of waiting for all the images to download first, simulating a faster load time. 

I really enjoy making simple sites for video games and using art direction from a video game to inspire creative design challenges. I learned a lot by sharing web development tasks and solving problems with David, as he comes from a game development background.

*Collaborators: [William Chyr](http://williamchyr.com), [David Laskey](http://twitter.com/david_laskey)*