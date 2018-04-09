<?php

namespace Tests\CodeceptionModule;

final class UniversalFramework extends \Codeception\Lib\Framework
{
    public function __construct()
    {
        $this->client = new \Codeception\Lib\Connector\Universal();
        $this->client->setIndex(\Codeception\Configuration::projectDir().'/app/home.php');
    }
}
