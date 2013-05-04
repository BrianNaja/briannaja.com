---
title: What is HTML
layout: post
---
HyperText Markup Language (HTML) is the main markup language used for creating web pages. A markup language is a combination of words and symbols that give instructions on the semantics of a document.  For example, `<em>` emphasis,  `<ul>` an unordered list and a `<p>` paragraph all have semantic meaning.

HTML began in 1989 by [Tim Berners-Lee](http://www.w3.org/People/Berners-Lee/) at CERN, the European Laboratory for Particle Physics in Geneva, Switzerland. Tim had the idea of enabling researchers from remote sites in the world to organize and pool together information. In other words, there could be cross-references from one research paper to another. This would mean that while reading one research paper, you could quickly display part of another paper that holds directly relevant text or diagrams. Tim thought this could be done by using some form of hypertext to link documents together.

Tim's prototype Web browser came out in 1990 on the [NeXT computer](http://en.wikipedia.org/wiki/NeXT) . *Info.cern.ch* was the address of the world's first-ever website and web server, running on a NeXT computer at CERN. The first web page address was <span class= "word-break">http://info.cern.ch/hypertext/WWW/TheProject.html,</span> which centred on information regarding the WWW project. You may find a [copy of the first website](http://www.w3.org/History/19921103-hypertext/hypertext/WWW/TheProject.html) on the World Wide Web Consortium website.

In 1994, Tim founded the [World Wide Web Consortium](http://www.w3.org) (often referred to as "W3C") at MIT in order to create standards for the web to ensure that different websites would all work the same way. 

Below is a copy of the HTML that this page is made from.

{% highlight html %}

     <!DOCTYPE html>
    
    <head>
      <!-- Set the viewport width to device width for mobile -->
      <meta name="viewport" content="width=device-width" />
    
      <title>Brian Naja</title>
      
       <link rel="stylesheet" href="/css/style.css">
       <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
       <link href='http://fonts.googleapis.com/css?family=Exo:600' rel='stylesheet' type='text/css'>
    
      <!-- IE Fix for HTML5 Tags -->
      <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>
    
    <body>
        <header>
            <div class="row">
                <div class="twelve columns">
                    <h1><a href="/">Brian Naja</a></h1>
                </div>
            </div>
        </header>
        <div class="wrapper">
    
            <section class="row">
            <article class="ten columns centered">
                <hgroup>
                    <h2>What is HTML</h2>
                </hgroup>
    				<!-- <div class="content"> -->    
    				    <p>HyperText Markup Language (HTML) is the main markup language used for creating web pages. A markup language is a combination of words and symbols that give instructions on the semantics of a document.  For example, <code><em></code> emphasis,  <code><ul></code> an unordered list and a <code><p></code> paragraph all have semantic meaning.</p>

    				    <p>HTML began in 1989 by <a href="http://www.w3.org/People/Berners-Lee/">Tim Berners-Lee</a> at CERN, the European Laboratory for Particle Physics in Geneva, Switzerland. Tim had the idea of enabling researchers from remote sites in the world to organize and pool together information. In other words, there could be cross-references from one research paper to another. This would mean that while reading one research paper, you could quickly display part of another paper that holds directly relevant text or diagrams. Tim thought this could be done by using some form of hypertext to link documents together.</p>

    				    <p>Tim's prototype Web browser came out in 1990 on the <a href="http://en.wikipedia.org/wiki/NeXT">NeXT computer</a> . <em>Info.cern.ch</em> was the address of the world's first-ever website and web server, running on a NeXT computer at CERN. The first web page address was <em>http://info.cern.ch/hypertext/WWW/TheProject.html</em>, which centred on information regarding the WWW project. You may find a <a href="http://www.w3.org/History/19921103-hypertext/hypertext/WWW/TheProject.html">copy of the first website</a> on the World Wide Web Consortium website.</p>

    				    <p>In 1994, Tim founded the <a href="http://www.w3.org">World Wide Web Consortium</a> (often referred to as "W3C") at MIT in order to create standards for the web to ensure that different websites would all work the same way.</p>

    				    <p>Below is a copy of the HTML that this page is made from.</p>
            </article>
        </section>
        </div>
        <div class="sticky-footer"></div>
            
        <footer>
            <div class="row">
                <div class="twelve columns">
                    <p>powered by <a href="http://jekyllrb.com">Jekyll</a>
                    <a href="#" title="To the top of this page" class="back-to-top">&uarr; Back To Top</a></p>
                </div>
            </div>
        </footer>
    </body>
    </html>

{% endhighlight %}