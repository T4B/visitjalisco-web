<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'ExperiencesTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'JaliscoTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'PageTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'RegionsTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'RoutesTableSeeder']);
    }

}
