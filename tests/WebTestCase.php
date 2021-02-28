<?php

declare(strict_types=1);

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract class WebTestCase extends BaseWebTestCase
{
    public function getHttpClientService(): HttpClientInterface
    {
        $httpClient = self::$container->get('http_client');
        if (!$httpClient instanceof HttpClientInterface) {
            throw new \RuntimeException('Invalid http_client service.');
        }

        return $httpClient;
    }
}
