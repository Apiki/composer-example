<?php

/**
 * App Github
 */
namespace Composer\Example\Github;

use GuzzleHttp\Client;

/**
 * App Github
 */
class App
{
    /**
     * Client
     *
     * @var GuzzleHttp\Client
     */
    private static $_client = null;

    /**
     * Response
     *
     * @var GuzzleHttp\Response
     */
    private $_response;

    /**
     * Constructor of this class
     */
    public function __construct()
    {
        if (is_null(self::$_client)) {
            self::$_client = new Client();
        }

        $this->apiCall();

    }

    /**
     * Api Call
     *
     * @return void
     */
    public function apiCall()
    {
        $this->_response = self::$_client->request(
            'GET',
            'https://api.github.com/users/apiki/repos'
        );

        print_r($this->_response);
    }
}