/**
 * [generalFunctions description]
 * @type {Object}
 */
generalFunctions = {
    /**
     * Page Onload Function
     */
    onLoad: function() {
        this.activateLink();
    },
    /**
     * [activateLink description]
     * @param  {[type]} link [description]
     * @return {[type]}      [description]
     */
    activateLink: function() {
        var loc = window.location.pathname;
        var link_selector = loc.split("/")[1];
        $('#' + link_selector).addClass('active');
    },
}