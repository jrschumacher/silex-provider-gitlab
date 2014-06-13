<?php

namespace Silex\Tests\Provider\GitlabServiceProvider;

use Silex\Application;
use Silex\Provider\SerializerServiceProvider;
use Silex\Provider\GitlabServiceProviderServiceProvider;
use ReflectionClass;

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
            "gitlab.url" => $host,
            "gitlab.key" => $port
        ));

        $this->assertInstanceOf("\\Gitlab\\Client", $app['gitlab']);
    }
}
