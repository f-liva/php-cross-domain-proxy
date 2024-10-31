<?php

namespace Geekality;

/**
 * Cross-origin request proxy for client-side scripts.
 *
 * @see https://github.com/Svish/php-cross-domain-proxy
 */
class CrossOriginProxy
{
    /**
     * Proxies the incoming request and outputs the response, including headers.
     *
     * @param  array  $whitelist         Array of request URLs whitelist rules.
     * @param  array  $curl_opts         Array of cURL options for proxy request.
     * @param  string $zlib              Value for zlib.output_compression.
     * @param  array  $allowed_referers  Array of allowed referer URLs.
     *
     * @see http://php.net/manual/function.curl-setopt.php
     * @see http://php.net/manual/zlib.configuration.php
     */
    public static function proxy(
        array $whitelist = [],
        array $curl_opts = [],
        $zlib = 'On',
        array $allowed_referers = []
    ) {
        $allowed_referers = array_merge([$_SERVER['HTTP_HOST']], $allowed_referers);

        require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'proxy.php';
    }
}
