---
layout: post
title:  "Building with Jekyll"
date:   2015-09-23
categories: blog
image: http://lenamasek.website/img/jekyll.png
---


I've wanted to use a tool like Jekyll for my personal site before I knew it existed. I wanted to automate my site enough to keep up with a blog and portfolio easily and efficiently without limiting or inhibiting my designs, or causing the upkeep of the site to be more difficult than necessary. 

<img src="{{ site.baseurl }}/img/jekyll.png">

I've built sites with Wordpress and worked with Drupal, but those robust CMSs are too powerful for my needs. Alternatively, Squarespace and other pre-designed portfolio sites, although helpful to many, became a hinderance to my ability to make my own design choices. Flat code sites had worked in the past, giving me total freedom, but were inefficient for my upkeep and knowledge of code at the time.

After searching and tweeting for help, I found Jekyll, among other options, like [Kirby](http://getkirby.com/) and [Statamic](http://statamic.com/). The aforementioned are pretty similar to Jekyll, but with a minimal back-end interface. Two things that were important to my decision were money and documentation/support. I spend a considerable amount of money on hosting and purchasing domains - I didn't want to pay another monthly amount for using the file structure with an interface. Also, I can host my Jekyll site on [GitHub Pages](https://pages.github.com/) for free, minimizing monthly payments to just my domain name. For my support and documentation concerns, using a relatively well-known engine means there is a good chance that I'd find a forum thread to help with my questions.

Soooo.. what *is* Jekyll? What are these products, what do they do?

>Jekyll is a parsing engine bundled as a ruby gem used to build static websites from dynamic components such as templates, partials, liquid code, markdown, etc. Jekyll is known as "a simple, blog aware, static site generator". - [JekyllBootstrap.com](http://jekyllbootstrap.com)


#### Configuration

<img src="{{ site.baseurl }}/img/jekyll-config-code.png">

Jekyll offers [a config.yml file](https://jekyllrb.com/docs/configuration/) in your root directory where you can plug in easy to read information that will be parsed into appropriate locations in your 'head' tag and other locations around the site. You're able to add lots of information into this file, or scale back, depending on your needs. 

<div class="span_3_of_6">
<img src="{{ site.baseurl }}/img/config.png">
</div>

<div class="span_3_of_6">
<img src="{{ site.baseurl }}/img/using-config.png">
</div>

The screenshots above show how I stored my social media handles in the config file (left) and how they become usable throughout the site with a variable (right).


#### Front Matter

<img src="{{ site.baseurl }}/img/jekyll-frontmatter.png">

Jekyll's parsing allows me to use [Liquid Markdown templating language](https://jekyllrb.com/docs/templates/) to format pages and give the engine the information it needs to properly parse my files. A new post means duplicating a file, changing a few things in the [YAML Front Matter](http://jekyllrb.com/docs/frontmatter/), and commiting with GitHub. I'm using and loving [GitHub Desktop](https://desktop.github.com/) and occasionally the third-party iOS app, [CodeHub](https://itunes.apple.com/us/app/codehub-github-for-ios/id707173885?mt=8).

Also, when I want to change the format of a page or move around content buckets, I edit either the default.html or post.html layout templates. My content stays in the .markdown files. 

#### Theme and Styling

<img src="{{ site.baseurl }}/img/hikari.png">

To style the site, I started with the theme [Hikari](http://mx3m.github.io/hikari-for-jekyll/), which had tons of great features built in, including [SCSS](http://www.sitepoint.com/whats-difference-sass-scss/), or Sassy CSS, a CSS-like syntax within Sass, which helped me write more efficient stylesheets and become more comfortable with Sass itself. [Find Hikari's repo on GitHub](https://github.com/mx3m/hikari-for-Jekyll).

I've been somewhat avoiding writing this post because I don't know that I'm *done* learning or building with Jekyll. I don't know everything about how Jekyll works, yet. I've learned a lot so far, though, which is awesome. 

For more information and documentation about Jekyll, check out [their site](https://jekyllrb.com/) and [their official forum](https://talk.jekyllrb.com/).