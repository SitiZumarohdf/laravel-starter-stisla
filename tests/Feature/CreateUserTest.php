<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_create(){
        $response = $this->post('/register', [
            // 'email' => "superadmin@gmail.com",
            // 'password' => "admin",
            'name'  => "zumaroh",
            'email'  => "zumaroh@gmail.com",
            "password" => Hash::make("password"),
            'password confirmation'=>"password",
            'nik'  => "123453213",
            'phone' => "1234567896"
        ]);

        $this->assertTrue(true);
    }
}
