<?php
elgg_require_js('elgg_cookieconsent/cookieconsent_preview');
echo "<p>";
echo elgg_echo('elgg_cookieconsent:settings:theme');
echo "<div class='elgg-subtext'>" .elgg_echo('elgg_cookieconsent:settings:theme:note')."</div>";
echo elgg_view('input/select', array(
	'name' => 'params[theme]',
	'id' => 'theme',
	'value' => $vars['entity']->theme,
	'options_values' => array('' => elgg_echo("default (custom)"), 'light-top' => elgg_echo('Light-top'), 'light-bottom' => elgg_echo('Light-bottom'), 'light-floating' => elgg_echo('Light-floating'), 'dark-top' => elgg_echo('Dark-top'), 'dark-bottom' => elgg_echo('Dark-bottom'), 'dark-floating' => elgg_echo('Dark-floating'))
));
echo "</p>";
echo "<p>";
echo elgg_echo('elgg_cookieconsent:settings:message');
echo "<div class='elgg-subtext'>" .elgg_echo('elgg_cookieconsent:settings:message:note')."</div>";
echo elgg_view('input/text', array(
	'name' => 'params[message]',
	'value' => $vars['entity']->message
));
echo "</p>";
echo "<p>";
echo elgg_echo('elgg_cookieconsent:settings:dismiss');
echo "<div class='elgg-subtext'>" .elgg_echo('elgg_cookieconsent:settings:dismiss:note')."</div>";
echo elgg_view('input/text', array(
	'name' => 'params[dismiss]',
	'value' => $vars['entity']->dismiss
));
echo "</p>";
echo "<p>";
echo elgg_echo('elgg_cookieconsent:settings:link');
echo "<div class='elgg-subtext'>" .elgg_echo('elgg_cookieconsent:settings:link:note')."</div>";
echo elgg_view('input/url', array(
	'name' => 'params[url]',
	'value' => $vars['entity']->url
));
echo "</p>";
echo "<p>";
echo elgg_echo('elgg_cookieconsent:settings:learnmorebutton');
echo "<div class='elgg-subtext'>" .elgg_echo('elgg_cookieconsent:settings:learnmorebutton:note')."</div>";
echo elgg_view('input/text', array(
	'name' => 'params[learnMore]',
	'value' => $vars['entity']->learnMore,
));
echo "</p>";
echo "<p><div class='elgg-subtext'>" .elgg_echo('elgg_cookieconsent:settings:save:note')."</div></p>";




