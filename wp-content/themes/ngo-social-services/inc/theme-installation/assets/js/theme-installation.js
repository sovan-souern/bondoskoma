jQuery(document).ready(function ($) {

    /* If there are required actions, add an icon with the number of required actions in the About tm-theme-installation page -> Actions recommended tab */
    var tm_theme_info_count_box_actions_recommended = tm_theme_info_box_object.count_actions_recommended;

    if ( (typeof tm_theme_info_count_box_actions_recommended !== 'undefined') && (tm_theme_info_count_box_actions_recommended != '0') ) {
        jQuery('li.tm-theme-installation-w-red-tab a').append('<span class="tm-theme-installation-actions-count">' + tm_theme_info_count_box_actions_recommended + '</span>');
    }

    /* Dismiss required actions */
    jQuery(".tm-theme-installation-recommend-action-button,.reset-all").click(function() {

        var id = jQuery(this).attr('id'),
            action = jQuery(this).attr('data-action');

        jQuery.ajax({
            type      : "GET",
            data      : {
                action: 'tm_theme_info_update_recommend_action',
                id: id,
                todo: action
            },
            dataType  : "html",
            url       : tm_theme_info_box_object.ajaxurl,
            beforeSend: function (data, settings) {
                jQuery('.tm-theme-installation-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + tm_theme_info_box_object.template_directory + '../loader.gif" /></div>');
            },
            success   : function (data) {
                location.reload();
                jQuery("#temp_load").remove();
                /* Remove loading gif */
            },
            error     : function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    });

});