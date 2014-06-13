Gitlab Silex Provider
================================

Gitlab service provider for silex micro-framework. Check here: https://github.com/m4tthumphrey/php-gitlab-api

## Example

``` php
<?php
use Silex\Application;

$url = 'http://gitlab.example.com/api/v3';
$key = 'key';

$app = new Application();
$app->register(new GitlabServiceProvider(), array(
    "gitlab.url" => $url,
    "gitlab.key" => $key
));

$app['gitlab']->api('projects')->show();
```

## Install with Composer

``` json
{
    "require": {
        "jrschumacher/silex-provider-gitlab": "~0.0"
    }
}
```
