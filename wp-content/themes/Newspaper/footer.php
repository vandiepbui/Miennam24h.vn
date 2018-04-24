<?php

$tds_footer_page = td_util::get_option('tds_footer_page');
$footer_page = null;

if ($tds_footer_page !== '' && intval($tds_footer_page) !== get_the_ID()) {
	$footer_page = get_post( $tds_footer_page );
}

if ( $footer_page instanceof WP_Post ) {

	?>

	<div class="td-footer-wrapper td-footer-page td-container-wrap">
	<?php

		// This action must be removed, because it's added by TagDiv Composer, and it affects footers with custom content
		remove_action( 'the_content', 'tdc_on_the_content', 10000 );

		$content = apply_filters( 'the_content', $footer_page->post_content );
		$content = str_replace( ']]>', ']]&gt;', $content );
		echo $content;

		wp_reset_query();

	?>
	</div>

<?php

} else { ?>


	<!-- Footer -->
	<?php
	if ( td_util::get_option( 'tds_footer' ) != 'no' ) {
		td_api_footer_template::_helper_show_footer();
	}
	?>

	<!-- Sub Footer -->
	<?php
	if ( td_util::get_option( 'tds_sub_footer' ) != 'no' ) {
		td_api_sub_footer_template::_helper_show_sub_footer();
	}
}
?>


</div><!--close td-outer-wrap-->

<?php wp_footer(); ?>

</body>
</html>