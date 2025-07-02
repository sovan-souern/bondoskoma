( function( api ) {

	// Extends our custom "fse-nonprofit-ngo" section.
	api.sectionConstructor['fse-nonprofit-ngo'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );