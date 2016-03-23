define(function(require) {
    var elgg = require("elgg");
    var cookieconsent = require("elgg_cookieconsent/cookieconsent");
    var cookieconsent_settings = require("elgg_cookieconsent/settings");
    var $ = require("jquery");
    window.cookieconsent_options = {
        message: cookieconsent_settings.message,
        dismiss: cookieconsent_settings.dismiss,
        theme: cookieconsent_settings.theme,
        link:cookieconsent_settings.link,
        learnMore:cookieconsent_settings.learnMore,
        markup: [
        '<div class="cc_banner-wrapper {{containerClasses}}">',
        '<div class="cc_banner cc_container cc_container--open">',
        '<a href="#null" data-cc-event="click:dismiss" class="cc_btn elgg-button elgg-button-submit">{{options.dismiss}}</a>',
        '<p class="cc_message">{{options.message}} <a data-cc-if="options.link" class="cc_more_info" href="{{options.link || "#null"}}">{{options.learnMore}}</a></p>',
        '</div>',
        '</div>'
      ]
    }

});

