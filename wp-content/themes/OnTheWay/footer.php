	<div class="outer">
    	<div id="footer">Copyright &copy; <a href="<?php bloginfo('home'); ?>"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?> - Powered by <a href="http://wordpress.org/"><strong>WordPress</strong></a></div>
        <?php // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
            // All links in the footer should remain intact. 
            // These links are all family friendly and will not hurt your site in any way. 
            // Warning! Your site may stop working if these links are edited or deleted  ?>
      <div id="credits">Design by <a href="http://wartsguide.com">wart removal</a> - <a href="http://qualitywebhosting.com/">Quality Web Hosting</a>, <a href="http://trucks.reviewitonline.net/">Trucks</a>, <a href="http://www.bestsuvratings.com/">SUV</a></div>
    </div>
</div>
</div></div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>