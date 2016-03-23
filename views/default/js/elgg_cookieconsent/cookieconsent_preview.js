define(function(require) {
    var $ = require("jquery");
    $( "#elgg_cookieconsent-settings" ).submit(function( event ) {
        document.cookie = 'cookieconsent_dismissed' + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
});

});




