<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WeatherPageTest extends TestCase
{
    /**
     * Ensuring the weather page can be rendered by the browser with a user logged in
     *
     * @return void
     */
    public function test_weather_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/weather-checker?weather=London');

        $response->assertStatus(200);
    }

    /**
     * Ensuring the weather page can't be rendered by the browser with a user logged out
     *
     * @return void
     */
    public function test_weather_screen_can_not_be_rendered()
    {

        $response = $this->get('/weather-checker?weather=London');

        $response->assertStatus(302);

        //Once the 302 is thrown we want to make sure it's redirecting back to the login page -- Need to work out how I want to check this one
    }

    //Need to learn and make further unit tests for this feature
}

