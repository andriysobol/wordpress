<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Outputs the footer for the login page.
 *
 * @param string $input_id Which input to auto-focus
 */
function login_footerMishka2($input_id = '') {
	global $interim_login;

	// Don't allow interim logins to navigate away from the page.
	if ( ! $interim_login ): ?>
	<p id="backtoblog"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Are you lost?' ); ?>"><?php printf( __( '&larr; Back to %s' ), get_bloginfo( 'title', 'display' ) ); ?></a></p>
	<?php endif; ?>

	</div>

	<?php if ( !empty($input_id) ) : ?>
	<script type="text/javascript">
	try{document.getElementById('<?php echo $input_id; ?>').focus();}catch(e){}
	if(typeof wpOnload=='function')wpOnload();
	</script>
	<?php endif; ?>

	<?php do_action('login_footer'); ?>
	<div class="clear"></div>
	</body>
	</html>
	<?php
}
?>
