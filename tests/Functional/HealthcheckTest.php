<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HealthcheckTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/ping');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('', 'pong');
    }
}
