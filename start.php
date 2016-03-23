<?php
/*
Daltonmedia.be
Dries de Krom
*/
elgg_register_event_handler('init', 'system', 'elgg_cookieconsent_init'); {

	function elgg_cookieconsent_init() {
        
    if (!elgg_in_context('admin')){
    elgg_require_js('elgg_cookieconsent/cookieconsent_init');
    }

    elgg_register_simplecache_view('js/elgg_cookieconsent/settings.js');
    elgg_extend_view('css/elgg', 'css/cookieconsent.css');


    }
}

