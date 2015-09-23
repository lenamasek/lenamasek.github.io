---
layout: post
title:  "Building with Jekyll"
date:   2015-09-23
category: project
---

<img src="{{ site.baseurl }}/assets/img/jekyll.png">

I've wanted to use a tool like Jekyll for my personal site before I knew it existed. I wanted to automate my site enough to keep up with a blog and portfolio easily and efficiently without limiting or inhibiting my designs, or causing the upkeep of the site to be more difficult than necessary. 

I've built sites with Wordpress and worked with Drupal, but those robust CMSs are too powerful for my needs. Alternatively, Squarespace and other pre-designed portfolio sites, although helpful to many, became a hinderance to my ability to make my own design choices. Flat code sites had worked in the past, giving me total freedom, but were inefficient for my upkeep and knowledge of code at the time.

After searching and tweeting for help, I found Jekyll, among other options, like [Kirby](http://getkirby.com/) and [Statamic](http://statamic.com/). The aforementioned are pretty similar to Jekyll, but with a minimal back-end interface. I knew I didn't want to pay to use an interface, so I went with Jekyll. The perks that come with using a relatively well-known engine, meaning a good chance that you'd find a forum thread to help with questions, was enticing as well.

Soooo.. what *is* Jekyll? What are these products, what do they do?

>Jekyll is a parsing engine bundled as a ruby gem used to build static websites from dynamic components such as templates, partials, liquid code, markdown, etc. Jekyll is known as "a simple, blog aware, static site generator". - [JekyllBootstrap.com](http://jekyllbootstrap.com)


### Configuration

<img src="{{ site.baseurl }}/assets/img/jekyll-config-code.png">

Jekyll offers [a config.yml file](https://jekyllrb.com/docs/configuration/) in your root directory where you can plug in easy to read information that will be parsed into appropriate locations in your 'head' tag and other locations around the site. You're able to add lots of information into this file, or scale back, depending on your needs. 

<div class="span_3_of_6">
<img src="{{ site.baseurl }}/assets/img/config.png">
</div>

<div class="span_3_of_6">
<img src="{{ site.baseurl }}/assets/img/using-config.png">
</div>

The screenshots above show how I stored my social media handles in the config file (left) and how they become usable throughout the site with a variable (right).


### Front Matter

<img src="{{ site.baseurl }}/assets/img/jekyll-frontmatter.png">

Jekyll's parsing allows me to use [Liquid Markdown templating language](https://jekyllrb.com/docs/templates/) to format pages and give the engine the information it needs to properly parse my files. A new post means duplicating a file, changing a few things in the [YAML Front Matter](http://jekyllrb.com/docs/frontmatter/), and uploading it to [GitHub Pages](https://pages.github.com/).


### Theme and Styling

<img src="{{ site.baseurl }}/assets/img/hikari.png">

To style the site, I started with the theme [Hikari](http://mx3m.github.io/hikari-for-jekyll/), which had tons of great features built in, including [SCSS](http://www.sitepoint.com/whats-difference-sass-scss/), or Sassy CSS, a CSS-like syntax within Sass, which helped me write more efficient stylesheets and become more comfortable with Sass itself. [Find Hikari's repo on GitHub](https://github.com/mx3m/hikari-for-Jekyll).

I've been somewhat avoiding writing this post because I don't know that I'm *done* learning or building with Jekyll. I don't know everything about how Jekyll works, yet. I've learned a lot so far, though, which is awesome. 

For more information and documentation about Jekyll, check out [their site](https://jekyllrb.com/) and [their official forum](https://talk.jekyllrb.com/).