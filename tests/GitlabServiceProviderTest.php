<?php

namespace Silex\Tests\Provider;

use Silex\Application;
use Silex\Provider\GitlabServiceProvider;

/**
 * GitlabServiceProviderTest
 */
class GitlabServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /** 
     * testRegister
     */
    public function testRegister()
    {
        $url = 'localhost';
        $key = 'key';
        $app = new Application();
        $app->register(new GitlabServiceProvider(), array(
            "gitlab.url" => $url,
            "gitlab.key" => $key
        ));

        $this->assertInstanceOf("\\Gitlab\\Client", $app['gitlab']);
    }
}
