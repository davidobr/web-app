<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutPageTest extends TestCase
{
    /**
     * Ensuring the about page can be rendered by the browser
     *
     * @return void
     */
    public function test_about_screen_can_be_rendered()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}

