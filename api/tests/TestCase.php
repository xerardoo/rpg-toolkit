<?php

abstract class TestCase extends Laravel\Lumen\Testing\TestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */

    public $API = '/api/v1';

    public function createApplication()
    {
        return require __DIR__ . '/../bootstrap/app.php';
    }
}
