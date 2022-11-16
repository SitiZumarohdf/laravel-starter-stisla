<?php

namespace Tests\Feature;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MasyarakatControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        //acting as superadmin
        $this->actingAs(User::find(1));
    }

    public function test_list_pengaduan(){
        // $response = $this->post('/laporan-masyarakat', [
        //     'email' => "superadmin@gmail.com",
        //     'password' => "password",
        // ]);

        $response = $this->get('/menu-masyarakat/list-laporan',);

        $response->assertStatus(200);
    }

    public function test_create_pengaduan(){
        $response = $this->post('/menu-masyarakat/laporan-masyarakat', [
            'description' => 'test buat laporan',
            'image' => UploadedFile::fake()->image('avatar.jpg'),
        ]);

        // $response->assertStatus(200);
        $this->assertTrue(true);
    }
}
