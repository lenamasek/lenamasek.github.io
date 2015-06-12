---
layout: post
title:  "Explaining the Role of Digital Designer"
date:   2015-06-12 10:53:00
---

My current job title is listed as Digital Designer, but at a marketing agency of about 10 people, I do a lot more than design. However, even the 'digital designer' part wasn't making sense. 

'Digital Designer' is not wrong - I do design for digital media - but I also work on print pieces, prepare them for production, and later work on the front-end web development for the 3 websites I'm working on right now. 


>Good design is as little design as possible, said Dieter. Use quotations very carefully; especially if you don't understand them. 


*Responsibilities*

* Collaborate with creative team of print designers, senior designers, front-end and back-end developers, and creative directors to produce quality work
* Manage and prioritize multiple projects and tasks simultaneously
* Prepare concepts, layouts, and web interface designs
* Present concepts and design to clients (either with or without Account Executive)
* Proof final work for accurate alignment and placement of elements, check color, copy, fonts, hi-res photos, etc.
* Work with company processes, resources, and collaboration tools
* Ensure delivery of work on time, on budget, and that meets agency quality standards

*Skills*


1. Ooh, and with numbers, it's even fancier
2. It's like 1, 2, 3, did you see?
3. Crazy stuff all around us; scary

There's nothing like a good block of code! Especially when picked randomly out of Github ([styledocco.js](https://github.com/jacobrask/styledocco/blob/master/styledocco.js)).  

{% highlight js %}
var separate = function(css) {
  var lines = css.split('\n');
  var docs, code, line, blocks = [];
  while (lines.length) {
    docs = code = '';

    while (lines.length && checkType(lines[0]) === 'single') {
      docs += formatDocs(lines.shift());
    }

    if (lines.length && checkType(lines[0]) === 'multistart') {
      while (lines.length) {
        line = lines.shift();
        docs += formatDocs(line);
        if (checkType(line) === 'multiend') break;
      }
    }
    while (lines.length && (checkType(lines[0]) === 'code' || checkType(lines[0]) === 'multiend')) {
      code += formatCode(lines.shift());
    }
    blocks.push({ docs: docs, code: code });
  }
  return blocks;
};
{% endhighlight %}

<img src="{{ site.baseurl }}/assets/img/pa-4.jpg">

# Heading 1
Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.

## Heading 2
But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?

### Heading 3
In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.

#### Heading 4
But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.
