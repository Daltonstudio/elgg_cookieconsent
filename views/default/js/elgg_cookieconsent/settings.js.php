<?php

$message = elgg_get_plugin_setting('message', elgg_cookieconsent);
if (!($message)){
    $message = elgg_echo('elgg_cookieconsent:message');
}
$dismiss = elgg_get_plugin_setting('dismiss', elgg_cookieconsent);
if (!($dismiss)){
    $dismiss = elgg_echo('elgg_cookieconsent:dismiss');
}
$url = elgg_get_plugin_setting('url', elgg_cookieconsent);
$learnMore = elgg_get_plugin_setting('learnMore', elgg_cookieconsent);
if (!($learnMore)){
    $learnMore = elgg_echo('elgg_cookieconsent:learnmore');
}
//$settings = elgg_get_plugin_by_id('elgg_cookieconsent')->getAllSettings(); //function seems not to excist? Is in the docs though.
$settings = [
    'message' => $message,
    'dismiss' => $dismiss,
    'link' => $url,
    'learnMore' => $learnMore,
];

?>
define(<?php echo json_encode($settings); ?>);