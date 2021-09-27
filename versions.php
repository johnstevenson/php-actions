<?php

$output = array(sprintf('PHP version: %s', PHP_VERSION));

if (extension_loaded('openssl')) {
    $version = OPENSSL_VERSION_TEXT;
} else {
    $version = 'Missing';
}

$output[] = sprintf('OpenSSL version: %s', $version);

if (extension_loaded('curl')) {
    $info = curl_version();
    $version = $info['version'];
    $version .= ', ssl '.(isset($info['ssl_version']) ? $info['ssl_version'] : 'missing');
} else {
    $version = 'Missing';
}

$output[] = sprintf('cURL version: %s', $version);

echo implode(PHP_EOL, $output), PHP_EOL;
