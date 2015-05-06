<?php

namespace Dukt\OAuth\OAuth2\Client\Provider;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Entity\User;

class Dribbble extends AbstractProvider
{
    public function urlAuthorize()
    {
        return 'https://dribbble.com/oauth/authorize';
    }

    public function urlAccessToken()
    {
        return 'https://dribbble.com/oauth/token';
    }

    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        return 'https://api.dribbble.com/v1/user?access_token='.$token;
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        $user = new User;
        $user->uid = $response->id;
        $user->name = $response->name;
        $user->username = $response->username;

        return $user;
    }
}