( function( api ) {

	// Extends our custom "fse-social-ngo" section.
	api.sectionConstructor['fse-social-ngo'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );