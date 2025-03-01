<?php

namespace Tests\Feature;

use App\Models\User;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_login_user_success()
    {
        //main post
        $response = $this->post('/login', [
            'email' => "superadmin@gmail.com",
            'password' => "password",
        ]);

        $response->assertRedirect('/dashboard');
    }

    public function test_login_user_data_empty()
    {
        //main post
        $response = $this->post('/login', [
            'email' => "",
            'password' => "",
        ]);

        $response->assertSessionHasErrors([
            'email' => 'The email field is required.',
            'password' => 'The password field is required.'
        ]);
        $this->assertGuest();
    }

    public function test_login_user_email_kosong()
    {
        //main post
        $response = $this->post('/login', [
            'email' => "",
            'password' => "admin",
        ]);

        $response->assertSessionHasErrors([
            'email' => 'The email field is required.',
        ]);
        $this->assertGuest();
    }

    public function test_login_user_password_kosong()
    {
        //main post
        $response = $this->post('/login', [
            'email' => "superadmin@gmail.com",
            'password' => "",
        ]);

        $response->assertSessionHasErrors([
            'password' => 'The password field is required.'
        ]);
        $this->assertGuest();
    }

    public function test_superadmin_can_login()
    {
        //login
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('/dashboard');
        //assert Redirect
        $response->assertStatus(200);
        $this->assertAuthenticatedAs($user);
    }

    public function test_superadmin_can_logout()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)->post("/logout");

        $response->assertStatus(302);

        $this->assertGuest();
    }

    public function test_normaluser_can_login()
    {
        $user = User::find(2);
        $this->actingAs($user);
        $response = $this->get('/dashboard');
        //assert Redirect
        $response->assertStatus(200);
        $this->assertAuthenticatedAs($user);
    }

    public function test_normaluser_can_logout()
    {
        $user = User::find(2);
        $this->actingAs($user);
        $response = $this->post('/logout');
        //assert Redirect
        $response->assertStatus(302);
        $this->assertGuest();
    }
}
