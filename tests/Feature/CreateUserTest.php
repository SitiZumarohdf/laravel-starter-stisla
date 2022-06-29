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
            'name'  => "khofifah",
            'email'  => "khofifah@gmail.com",
            "password" => Hash::make("password"),
            'password confirmation'=>"password",
            'nik'  => "12345321",
            'phone' => "123456789"
        ]);

        $this->assertTrue(true);
    }
}
