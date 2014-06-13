<?php

namespace Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

use Gitlab\Client;

/*
 * ThunderpushServiceProvider
 */
class GitlabServiceProvider implements ServiceProviderInterface
{
    /*
     * register
     */
    public function register(Application $app)
    {
        $app['gitlab'] = $app->share(function() use ($app) {
            if(!isset($app['gitlab.url'])) throw new \Exception('gitlab.url undefined');
            if(!isset($app['gitlab.key'])) throw new \Exception('gitlab.key undefined');

            $client = new \Gitlab\Client($app['gitlab.url']); // change here
            $client->authenticate($app['gitlab.key'], \Gitlab\Client::AUTH_URL_TOKEN); // change here

            return $client;
        });
    }

    /*
     * boot
     */
    public function boot(Application $app)
    {
    }
}
