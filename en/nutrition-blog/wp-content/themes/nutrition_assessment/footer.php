<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
			<div itemscope itemtype="http://schema.org/Person">
<a itemprop="url" href="http://www.ilsevalle.com"><div itemprop="name"><strong>Ilse Valle-Jones</strong></div>
</a>
<div itemscope itemtype="http://schema.org/Organization"><span itemprop="name">Nutritionist Psychotherapist</span></div><div itemprop="jobtitle">Nutritionist Psychotherapist</div>
<div itemprop="description">I am a bilingual professional nutritionist psychotherapist. I can be your guide in developing a healthy eating plan and give you personalized advice to lose weight, exercise, and enjoy a healthy life style.</div>
<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<div itemprop="streetAddress">Collegeville</div>
<div><span itemprop="addressRegion">PA</span></div><div itemprop="addressCountry">USA</div>
<br/>
<a href="/privacy_en.html">Privacy Policy</a>
</div>
</div>	
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-100264-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>