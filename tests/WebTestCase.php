<?php

namespace tests;

use Symfony\Bundle\FrameworkBundle\Client;
/**
 * WebTestCase is the base class for functional tests.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class WebTestCase extends KernelTestCase
{
    /**
     * Creates a Client.
     *
     * @param array $options An array of options to pass to the createKernel class
     * @param array $server  An array of server parameters
     *
     * @return Client A Client instance
     */
    protected static function createClient(array $options = array(), array $server = array())
    {
        $kernel = static::bootKernel($options);
        $client = $kernel->getContainer()->get('test.client');
        $client->setServerParameters($server);
        return $client;
    }
}