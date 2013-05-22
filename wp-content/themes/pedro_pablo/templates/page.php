<div id="art-page-background-middle-texture">
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image">
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-header">
                <div class="art-header-center">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                </div>
                <script type="text/javascript" src="<?php echo $template_url; ?>swfobject.js"></script>
                <div id="art-flash-area">
                <div id="art-flash-container">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="width: 100%;" height="150" id="art-flash-object">
                    <param name="movie" value="<?php echo $template_url; ?>images/flash.swf" />
                    <param name="quality" value="high" />
                	<param name="scale" value="exactfit" />
                	<param name="wmode" value="transparent" />
                	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                    <param name="swfliveconnect" value="true" />
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="<?php echo $template_url; ?>images/flash.swf" style="width: 100%;" height="150">
                        <param name="quality" value="high" />
                	    <param name="scale" value="exactfit" />
                	    <param name="wmode" value="transparent" />
                	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                        <param name="swfliveconnect" value="true" />
                    <!--<![endif]-->
                      	<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                    <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                </object>
                </div>
                </div>
                <script type="text/javascript">swfobject.switchOffAutoHideShow(); swfobject.registerObject("art-flash-object", "9.0.0", "<?php echo $template_url; ?>expressInstall.swf");</script>
                <div class="art-logo">
                <h1 id="name-text" class="art-logo-name">
                        <a href="<?php echo $logo_url; ?>/"><?php echo $logo_name; ?></a></h1>
                </div>
            </div>
            <div class="art-nav">
            	<div class="l"></div>
            	<div class="r"></div>
            	<ul class="art-menu">
            		<?php echo $menu_items; ?>
            	</ul>
            </div>
            <div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">
                     <div class="art-layout-bg"></div>
                      <?php echo $sidebar1; ?>  
                      <div class="cleared"></div>
                    </div>
                    <div class="art-layout-cell art-content">
                      <?php echo $sidebarTop; ?>
                        <?php echo $content; ?>  
                      <?php echo $sidebarBottom; ?>  
                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                  <?php echo $sidebarFooter; ?>
                  <?php echo $footerRSS; ?>
                  <div class="art-footer-text">
                      <?php echo $footerText; ?>
                      
                  </div>
            		<div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer">Powered by <a href="http://wordpress.org/">WordPress</a> and <a href="http://www.artisteer.com/?p=wordpress_themes">WordPress Theme</a> created with Artisteer.</p>
</div>
    </div>
</div>
</div>




