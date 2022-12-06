<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_avatars_can_be_uploaded()
    {
        Storage::fake('avatars');
 
        $file = UploadedFile::fake()->image('avatar.jpg');
 
        $response = $this->post('/avatar', [
            'avatar' => $file,
        ]);
 
        Storage::disk('avatars')->assertExists($file->hashName());/* You may use the assertMissing method provided by the Storage facade:: To assert that given file doesn't exit */
    }
}