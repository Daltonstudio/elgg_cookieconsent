<?php
elgg_require_js('elgg_cookieconsent/cookieconsent_preview');
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




