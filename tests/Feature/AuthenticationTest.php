<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_can_view_login_and_registration_pages(): void
    {
        $this->get(route('login'))->assertOk();
        $this->get(route('register'))->assertOk();
        $this->get('/')
            ->assertOk()
            ->assertSee('Jatuh cinta lagi')
            ->assertSee(route('register'));
    }

    public function test_registration_creates_an_account_and_signs_the_user_in(): void
    {
        $response = $this->post(route('register.store'), [
            'name' => 'Naya Putri',
            'email' => 'naya@example.com',
            'password' => 'ceritamanis123',
            'password_confirmation' => 'ceritamanis123',
        ]);

        $response->assertRedirect(route('home'));
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', ['name' => 'Naya Putri', 'email' => 'naya@example.com']);
        $this->assertTrue(Hash::check('ceritamanis123', User::firstOrFail()->password));
    }

    public function test_registration_requires_a_unique_email_and_confirmed_password(): void
    {
        User::factory()->create(['email' => 'naya@example.com']);

        $this->from(route('register'))
            ->post(route('register.store'), [
                'name' => 'Naya Putri',
                'email' => 'naya@example.com',
                'password' => 'ceritamanis123',
                'password_confirmation' => 'berbedasandi',
            ])
            ->assertRedirect(route('register'))
            ->assertSessionHasErrors(['email', 'password']);
    }

    public function test_user_can_log_in_and_log_out(): void
    {
        $user = User::factory()->create(['password' => 'ceritamanis123']);

        $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'ceritamanis123',
        ])->assertRedirect(route('home'));

        $this->assertAuthenticatedAs($user);
        $this->get(route('home'))->assertOk()->assertSee($user->name);

        $this->post(route('logout'))->assertRedirect(route('login'));
        $this->assertGuest();
    }

    public function test_invalid_login_is_rejected(): void
    {
        $this->from(route('login'))
            ->post(route('login.store'), [
                'email' => 'naya@example.com',
                'password' => 'wrong-password',
            ])
            ->assertRedirect(route('login'))
            ->assertSessionHasErrors('email');

        $this->assertGuest();
    }

    public function test_guest_is_redirected_away_from_the_home_page(): void
    {
        $this->get(route('home'))->assertRedirect(route('login'));
    }
}
