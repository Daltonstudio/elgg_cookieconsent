define(function(require) {
    var elgg = require("elgg");
    var cookieconsent = require("elgg_cookieconsent/cookieconsent");
    var cookieconsent_settings = require("elgg_cookieconsent/settings");
    var $ = require("jquery");
    window.cookieconsent_options = {
        message: cookieconsent_settings.message,
        dismiss: cookieconsent_settings.dismiss,
        theme: false,
        link:cookieconsent_settings.link,
        learnMore:cookieconsent_settings.learnMore,
    }

});

