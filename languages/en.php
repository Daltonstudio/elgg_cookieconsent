<?php

$english = array(
    //settings    
    'elgg_cookieconsent:settings:theme' => 'The theme for Cookieconcent',
    'elgg_cookieconsent:settings:theme:note' => "Leave blank to use the default theme you can override with your own plugin. If you wish, you can select a cookieconcent theme here",
	  'elgg_cookieconsent:settings:message' => 'The message you want to show to your visitors',
    'elgg_cookieconsent:settings:message:note' => "If left empty this message can be translated by using: 'elgg_cookieconsent:message' in your translation file.
    <p><blockquote>The default message when it's left blank is:'This website uses cookies to ensure you get the best experience on our website'</blockquote></p>",
    'elgg_cookieconsent:settings:dismiss' => 'The text on the dismissbutton',
    'elgg_cookieconsent:settings:dismiss:note' => "If left empty this button can be translated by using: 'elgg_cookieconsent:dismiss' in your translation file.
    <p><blockquote>The default button when it's left blank is:'Got it!'</blockquote></p>",
    'elgg_cookieconsent:settings:link' => 'Read more link',
    'elgg_cookieconsent:settings:link:note' => 'The url of your learn-more page. If you leave this empty, the read more button will not be shown.',
    'elgg_cookieconsent:settings:learnmorebutton' => 'Text of the learn-more button',
    'elgg_cookieconsent:settings:learnmorebutton:note' => "In the case you specified a learn-more URL above, you can edit the text to show on the button here.</br> If left empty, it can be translated by using: 'elgg_cookieconsent:learnmore' in your translation file.
    <p><blockquote>The default button when it's left blank is:'Learn more'</blockquote></p>",
    'elgg_cookieconsent:settings:save:note' => "Your cookie is automaticly reset when you submit your form. Flush the cache for your settings to have effect and browse to your website to see how it looks.",
    // translatable cookie consent message
    'elgg_cookieconsent:message' => 'This website uses cookies to ensure you get the best experience on our website',
    'elgg_cookieconsent:dismiss' => 'Got it!',
    'elgg_cookieconsent:learnmore' => 'Learn more',
	
);
		
add_translation("en", $english);