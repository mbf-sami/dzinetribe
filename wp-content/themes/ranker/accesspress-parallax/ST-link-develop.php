<?php
/**
 *Template Name: Link Develop
 */

get_header(); 
?>
<div class="mid-content clearfix">
	<div id="primary-fullwidth" class="content-area">
		<main id="main" class="site-main" role="main">
				<div class="wpcf7" id="wpcf7-f131-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form name="" action="" method="post" class="wpcf7-form" novalidate="novalidate">
                    	<p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="75" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required code-val" aria-required="true" aria-invalid="false" placeholder="Please Enter your code" /></span> </p>
                    	<p><input type="submit" value="Enter code" class="wpcf7-form-control wpcf7-submit code-submit" /></p>
                    </form>
                </div>
				<?php echo wpautop($post->post_content)	; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<script>
	jQuery(document).ready(function(){
		jQuery('.code-submit').click(function(){
			event.preventDefault();
			jQuery(this).val('Sending....')
			setTimeout(function(){
					document.location.href = 'www.google.co.in';
			}, 3000);
					jQuery(location).attr('href', '<?php echo get_bloginfo('url')."/thank-you" ?>'); 

		});		
	});
</script>
<?php get_footer(); ?>