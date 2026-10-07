<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_landing_page_returns_a_successful_response(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Satu cerita,')
            ->assertSee('Tempat ceritamu');
    }
}
