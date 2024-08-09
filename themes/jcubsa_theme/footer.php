<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JCUBSA_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jcubsa_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jcubsa_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jcubsa_theme' ), 'jcubsa_theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // get a cookie by name
    function getCookie(name) {
      let cookieArr = document.cookie.split(";");
      for (let i = 0; i < cookieArr.length; i++) {
        let cookiePair = cookieArr[i].split("=");
        if (name == cookiePair[0].trim()) {
          return decodeURIComponent(cookiePair[1]);
        }
      }
      return null;
    }

    // setting cookie to know user's first visti to the site
    function setCookie(name, value, days) {
      let date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      document.cookie = name + "=" + encodeURIComponent(value) + ";expires=" + date.toUTCString() + ";path=/";
    }

    // Checking if the loader cookie exists
    if (!getCookie("loaderDisplayed")) {
      // Display the loader
      document.querySelector('.home-page-loader-wrapper').style.display = 'flex';
      document.querySelector('.content-wrapper').style.display = 'none';

      setTimeout(function() {
        document.querySelector('.home-page-loader-wrapper').style.display = 'none';
        document.querySelector('.content-wrapper').style.display = 'block';
        // Setting loader cookie from displaying again
        setCookie("loaderDisplayed", "true", 365);
      }, 2000); // 2000 milliseconds = 2 seconds
    } else {
      // If the cookie exists, hide the loader and show the content immediately
      document.querySelector('.home-page-loader-wrapper').style.display = 'none';
      document.querySelector('.content-wrapper').style.display = 'block';
    }

    // Smooth scrolling for "Scroll for more" link
    document.querySelector('.scroll-down a').addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelector('#below-content').scrollIntoView({ 
        behavior: 'smooth' 
      });
    });
  });
</script>

</body>
</html>
