<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CfA New Template
 * @since Cfa 2.0
 */

get_header(); ?>

<div class="wrap-b">

	<!--featured -->	  
	<div id="featured" style="width: 935px; margin: 0 auto; height: 290px; background: url() no-repeat bottom;padding: 20px 0px; clear: both;">
		<div class="callout" style="width: 400px; padding: 50px 15px 105px 10px; float: left;">
			<h1 style="font-family: 'Oswald', Helvetica; text-transform: uppercase; color: black; font-size: 40px; letter-spacing: -.05em; text-align: left;">The CfA Fellowship</h1>
			<p style="text-align: left; padding-left: 3px;padding-top: 0px;margin-top: 0px;">Code for America partners with innovative city leaders, looking for a different way of doing things. Your city could be next:</p>
			<a href="/cities/apply-now/" data-bitly-type="bitly_hover_card"><img src="http://codeforamerica.org/wp-content/uploads/2012/10/more.png" alt="Learn More" class="left"></a>
			<a href="/2013-partners" data-bitly-type="bitly_hover_card" style=""><img src="http://codeforamerica.org/wp-content/uploads/2012/10/2013.png" alt="Meet the 2012 Cities" class="left"></a>
		</div>
		<div id="map" style="width: 500px; height: 260px; float: left; padding-top: 10px;">
			<iframe src="http://player.vimeo.com/video/53640839" width="500" height="260" style="border: none" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
		</div>
	</div>
</div>	
<div class="wrap clearfix" id="whos">
	<h3>Who’s Got Our Back?</h3>
	<div class="prev"><img src="<?php bloginfo('template_directory'); ?>/images/back-arrow2.png" alt="Back"></div>
	<div id="mycarousel">
		<ul>
			<li><a href="http://www.knightfoundation.org"       title="Knight Foundation"     ><img src="<?php bloginfo('template_directory'); ?>/images/logos/knight-logo.png"      alt="Knight Foundation"     ></a></li>
			<li><a href="http://www.omidyar.com/"               title="Omidyar Foundation"    ><img src="<?php bloginfo('template_directory'); ?>/images/logos/on-logo.png"          alt="Omidyar Foundation"    ></a></li>
			<li><a href="http://www.google.com"                 title="Google"                ><img src="<?php bloginfo('template_directory'); ?>/images/logos/google-logo.png"      alt="Google"                ></a></li>
			<li><a href="http://www.esri.com"                   title="ESRI"                  ><img src="<?php bloginfo('template_directory'); ?>/images/logos/esri-logo.png"        alt="ESRI"                  ></a></li>
			<li><a href="http://www.rockefellerfoundation.org/" title="Rockefeller Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/rockefeller-logo.png" alt="Rockefeller Foundation"></a></li>
			<li><a href="http://www.bluehost.com"               title="Bluehost"              ><img src="<?php bloginfo('template_directory'); ?>/images/logos/bluehost.jpg"         alt="Bluehost"              ></a></li>
			<li><a href="http://www.oreillymedia.com"           title="O'Reilly Media"        ><img src="<?php bloginfo('template_directory'); ?>/images/logos/oreilly-logo.png"     alt="O'Reilly Media"        ></a></li>
			<li><a href="http://www.sunlightfoundation.com"     title="Sunlight Foundation"   ><img src="<?php bloginfo('template_directory'); ?>/images/logos/sunlight-logo.jpg"    alt="Sunlight Foundation"   ></a></li>
			<li><a href="http://www.jointconcepts.com"          title="Joint Concepts"        ><img src="<?php bloginfo('template_directory'); ?>/images/logos/jc-logo.png"          alt="Joint Concepts"        ></a></li>
			<li><a href="/donors"                               title="More"                  ><img src="<?php bloginfo('template_directory'); ?>/images/logos/more.png"             alt="More"                  ></a></li>
		</ul>
	</div>
	<div class="next"><img src="<?php bloginfo('template_directory'); ?>/images/next-arrow2.png" alt="Next"></div>
</div>
<div class="wrap-t">
	<div class="wrap clearfix">
		<!--Helping Cities Solve Common Issues -->
		<div id="cities-issues" class="home-tile right-col" style="background: none;">				
			<div id="wp-widget">
				<h2>Code for America:<br>‘A Peace Corps for Geeks’</h2>
				<p style="margin-top: 3px;">CfA is working to change the way cities work through technology and public service. You can give a year, a few months, or just a few minutes, but you can make a difference.</p> 
				<ul>
					<li>
						<a href="/get-involved/">Sign up to get involved</a>
						<form name="signup" action="http://action.codeforamerica.org/page/signup/cfa-email" method="post" id="newsletter" class="clearfix">
							<input type="text" value="Email" id="email" name="email" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
							<button type="submit" class="like-btn">Send</button> 
						</form>
					</li>
					<li><a href="http://codeforamerica.org/apply">Apply for the Fellowship</a></li>
					<li><a href="http://brigade.codeforamerica.org">Join the Brigade</a></li>
					<li><a href="/about">Learn More</a></li>
				</ul>
			</div>
		</div>
  	<!--CfA Blog -->
  	<div id="cfa-blog" class="home-tile">
  		<h2>CfA Blog <a href="http://c4a.me/feed/" class="like-btn">RSS</a></h2>

  		<?php query_posts('showposts=2&tag__not_in=61'); ?>		  

  		<ul>
  		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  			<li>
  				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?> <strong>»</strong></a></h3>
  				<p><?php echo excerpt(12); ?></p>
  			</li>
  		<?php endwhile; endif; ?>
  		</ul>

  		<a href="/code-for-america-blog/" class="btn">Go to Blog</a>
  	</div>
  	<!--Featured App -->
  	<div id="featured-app" class="home-tile right-col">
  		<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>

  		<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
  		<?php endif; ?>
  	</div>
	</div>
</div>

<?php get_footer(); ?>