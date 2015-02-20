<?php

/**
 * Craft OAuth by Dukt
 *
 * @package   Craft OAuth
 * @author    Benjamin David
 * @copyright Copyright (c) 2015, Dukt
 * @link      https://dukt.net/craft/oauth/
 * @license   https://dukt.net/craft/oauth/docs/license
 */

namespace Dukt\OAuth\Providers;

class Linkedin extends AbstractProvider {

    public $consoleUrl = 'https://www.linkedin.com/secure/developer';
    public $oauthVersion = 2;

    public function getName()
    {
        return 'LinkedIn';
    }

    public function getAuthorizationMethod()
    {
        return 'oauth2_access_token';
    }

    public function getUserDetails()
    {
        return array();
        // $response = $this->service->request('/people/~?format=json');
        // $response = json_decode($response, true);

        // $account = array();

        // $account['uid'] = $response['id'];
        // $account['name'] = $response['name'];
        // $account['username'] = $response['login'];
        // $account['email'] = $response['email'];

        // return $account;
    }
}