<?php
/**
 * Admin area: edit default profile fields
 */

$add = elgg_view_form('profile/fields/add', array(), array());
$list = elgg_view('admin/appearance/profile_fields/list');
$reset = elgg_view_form('profile/fields/reset', array(), array());

$body = <<<__HTML
$add
$list
$reset
__HTML;

echo $body;
