<!DOCTYPE html>

<head>

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Brian Naja</title>
  
   <link rel="stylesheet" href="/css/style.css">
   <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
   <link rel="alternate" type="application/rss+xml" title="RSS Feed for mysite.com" href="/rss.xml" />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
    <header>
        <div class="row">
            <div class="six columns">
                <a class="skull" href="/"><img src="/images/Skull-bones.jpg"></a>
                <h1><a href="/">Brian Naja</a></h1>
            </div>
        </div>
    </header>
    <div class="wrapper">

            <section class="row">
        <article class="eight columns ">
            <h2>Countdown To Graduation</h2>
            <div class="content">
                
              <?php 
                
                date_default_timezone_set('America/New_York');
                $date = strtotime("August 16, 2013 7:55 AM");
                $remaining = $date - time();

                $days_remaining = floor($remaining / 86400);
                $hours_remaining = floor(($remaining % 86400) / 3600);
                $min_remaining = floor(($remaining % 3600) / 60);
                $sec_remaining = ($remaining % 60);
                
                echo "<div class=\"countdown\">
                  <p>$days_remaining <span class=\"little\">Days</span></p>  
                  <p>$hours_remaining <span class=\"little\">Hours</span></p>
                  <p>$min_remaining <span class=\"little\">Minutes</span></p>
              </div>"; 
              
              ?>	
				 <br>
			<div class="video">
			  <iframe src="http://player.vimeo.com/video/69279077" width="500" height="375" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
				 
			<img class="dancing-bear" src="dancing-bear.gif" alt="dancing bear">
			
				
            </div>
		<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'briannaja'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    		
				
        </article>
        
        <aside class="four columns">
    				    	
			<h4>Recent Writings From the archives</h4>
			<ul class="disc">
				
				<li><a href="/post/a-simple-responsive-css-grid">A Simple Responsive CSS Grid</a></li>
				
				<li><a href="/post/markdown-cheat-sheet">Markdown Cheat Sheet</a></li>
				
				<li><a href="/video/gary-kovacs-tracking-the-trackers">Gary Kovacs - Tracking the trackers</a></li>
				
				<li><a href="/post/boilermaking-photos">Boilermaking Photos</a></li>
				
				<li><a href="/video/view-from-the-ISS-at-Night">NASA's Kepler seeks to answer- Is anybody out there?</a></li>
				
				<li><a href="/post/what-is-collective-bargaining">What is Collective Bargining</a></li>
				
				<li><a href="/post/right-to-work-a-closer-look">Right To Work - A Closer Look</a></li>
				
				<li><a href="/video/time-lapse-footage-of-the-Earth">Time-lapse footage of the Earth</a></li>
				
				<li><a href="/post/people-ask-to-see-stars">People ask to see stars</a></li>
				
				<li><a href="/post/earth-at-night">Earth at night</a></li>
				
			</ul>
	    </aside>
	    
    </section>
    
    		
	    
	    

        <div class="sticky-footer"></div>
    </div><!-- end of wrapper -->    
    <footer>
        <div class="row">
            <div class="twelve columns">
                <p><a href="#" title="To the top of this page" class="back-to-top">&uarr; Back To Top</a></p>
            </div>
        </div>
    </footer>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script type="text/javascript" src="/javascripts/klass.min.js"></script>
   <script type="text/javascript" src="/javascripts/scripts-ck.js"></script>
   
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39513835-1', 'briannaja.com');
  ga('send', 'pageview');


</script>
</body>
</html>