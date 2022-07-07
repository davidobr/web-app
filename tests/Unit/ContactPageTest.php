<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    /**
     * Ensuring both the contact and contact us page can be rendered by the browser
     *
     * @return void
     */
    public function test_contact_screen_can_be_rendered()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function test_contact_us_screen_can_be_rendered()
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
    }
}

