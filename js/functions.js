/**
 * Theme javascript functionality.
 *
 * @since 1.1.0
 */
( function( $ ) {
	/**
	 * Wait for the document to load.
	 */
	$( document ).ready( function() {
		/**
		 * Handle the '.bonus-trigger' link click.
		 */
		$( '.bonus-trigger' ).on( 'click', function( e ) {
			$( '#wbounce-modal' ).css( 'display', 'block' );
			e.preventDefault();
		} );
	} );
} ( jQuery ) );
