<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
// use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChatTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_100_users_can_login()
    {
        $user = User::factory(4)->create();
        dd($user);
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $user->assignRole('counselor');
        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
