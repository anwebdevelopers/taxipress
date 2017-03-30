    <!-- Footer -->
    <!-- <nav class="footer-menu <?php if($post->post_type == "gallery" and !is_single()) { echo""; } elseif(is_page_template('template-contact.php') or is_page_template('template-about.php') or is_404() or is_page_template('template-award.php') or is_page_template('page-home.php')  or is_page_template('template-press.php')){  echo ""; } else { echo "no-fixed";}    ?>"> -->

        <!-- Social -->
        <!-- <ul class="left">
            <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed" rel="external"></a></li><?php } ?>
        </ul> -->

        <!-- <?php if(is_page_template('page-home.php')){ ?> -->
        <!-- Footer Menu -->
        <!-- <div class="center">
            <ul class="nav">
                <li><span><?php echo ale_get_option('footermenutitle'); ?></span>
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </li>
            </ul>
        </div>
        <?php } ?> -->



    <!-- </nav> -->

    <!-- Footer -->
    <footer id="footer">
		<div class="content">
			<div class="wrap cf">
				<div class="col-4">
                    <p>
						<?php echo ale_get_option('footer_description'); ?>
					</p>
                    <!-- Copy -->
                    <?php if (ale_get_option('copyrights')) : ?>
                        <p><?php echo ale_option('copyrights'); ?></p>
                    <?php else: ?>
                        <p>&copy; <?php _e('2017 Taxi Press. All rights reserved', 'aletheme')?></p>
                    <?php endif; ?>
				</div>
				<div class="col-4">
                    <div class="call">
						<h3><?php echo ale_get_option('footer_call_number'); ?></h3>
	                    <span><?php echo ale_get_option('footer_call_text'); ?></span>
                    </div>
				</div>
				<div class="col-4">
					<p><?php echo ale_get_option('footer_adress_label'); ?></p>
					<span><?php echo ale_get_option('footer_adress'); ?></span>

                    <div class="social">
                        <?php if(ale_get_option('twi')) {?><a href="<?php ale_get_option('twi'); ?>" target="_blank" class="twitter"></a><?php } ?>
                        <?php if(ale_get_option('fb')) {?><a href="<?php ale_get_option('fb'); ?>" target="_blank" class="facebook"></a><?php } ?>
                        <?php if(ale_get_option('you')) {?><a href="<?php ale_get_option('you'); ?>" target="_blank" class="youtube"></a><?php } ?>
                    </div>
				</div>
			</div>
		</div>

	    <!-- -->
	    <div class="bottom-line">
		    <div class="wrap">

                <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                ?>
		    </div>
	    </div>

        <?php wp_footer(); ?>
    </footer>
</body>
</html>
