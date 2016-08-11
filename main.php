<?php
$valid = new DOMDocument;
$valid->load('valid.xml');
var_dump($valid->relaxNGValidate('relaxng.xml'));

$invalid = new DOMDocument;
$invalid->load('invalid.xml');
var_dump($invalid->relaxNGValidate('relaxng.xml'));
