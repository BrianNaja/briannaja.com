---
layout: default
---

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
				{% for post in site.posts offset: 0 limit: 10 %}
				<li><a href="{{post.url}}">{{post.title}}</a></li>
				{% endfor %}
			</ul>
	    </aside>
	    
    </section>
    
    		
	    
	    