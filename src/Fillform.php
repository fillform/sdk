<?php

namespace Fillform\Sdk;

/**
 * Super-simple, minimum abstraction Fillform
 * MailChimp API v3: https://fillform.eu
 *
 * @author  Fabs & Simon <info@fillform.eu>
 * @version 0.01
 */
class Fillform
{
    private $token;
 
    /**
     * Create a new instance
     *
     * @param string $api_key      Your Fillform token
     *
     * @throws \Exception
     */
    public function __construct($token)
    {
        if (!function_exists('curl_init') || !function_exists('curl_setopt')) {
            throw new \Exception("cURL support is required, but can't be found.");
        }

        $this->token = $token;

        if ($token === null || $token == '') {
            if (strpos($this->api_key, '-') === false) {
                throw new \Exception("Invalid Fillform API key");
            }
        } 
    }

}
