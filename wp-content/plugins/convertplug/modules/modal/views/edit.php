<?php
/**
 * Prohibit direct script loading.
 *
 * @package Convert_Plus.
 */

defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

$style = esc_attr( $_GET['style'] );

if ( ! isset( $style ) && '' !== $style ) {
	header( '?page=smile-modal-designer&style-view=new' );
}
?>
<div class="edit-screen-overlay" style="overflow: hidden;background: #FCFCFC;position: fixed;width: 100%;height: 100%;top: 0;left: 0;z-index: 9999999;">
	<div class="smile-absolute-loader" style="visibility: visible;overflow: hidden;">
		<div class="smile-loader">
			<div class="smile-loading-bar"></div>
			<div class="smile-loading-bar"></div>
			<div class="smile-loading-bar"></div>
			<div class="smile-loading-bar"></div>
		</div>
	</div>
</div><!-- .edit-screen-overlay -->
<div class="wrap">
	<h2> <?php _e( 'Edit Modal Style', 'smile' ); ?>
		<a class="add-new-h2" href="?page=smile-modal-designer" title="<?php _e( 'Go to main page', 'smile' ); ?>" rel="noopener"><?php _e( 'Back to Main Page', 'smile' ); ?></a>
	</h2>
	<div class="message"></div>
	<div class="smile-style-wrapper">
		<div id="smile-default-styles">
			<div class="smile-default-styles theme-browser rendered">
				<div class="themes">
					<?php
					if ( function_exists( 'smile_style_dashboard' ) ) {
						smile_style_dashboard( 'Smile_Modals', 'smile_modal_styles', 'modal' );
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
