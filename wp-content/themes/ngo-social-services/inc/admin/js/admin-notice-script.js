( function( $ ){
  $( document ).on( 'click', '.notice-get-started-class .notice-dismiss', function () {
  // Read the "data-notice" information to track which notice
  // is being dismissed and send it via AJAX
  var type = $( this ).closest( '.notice-get-started-class' ).data( 'notice' );
  // Make an AJAX call
  $.ajax( ajaxurl,
    {
      type: 'POST',
      data: {
        action: 'ngo_social_services_dismissable_notice',
        type: type,
        wpnonce: ngo_social_services.wpnonce
      }
    } );
  } );
}( jQuery ) )