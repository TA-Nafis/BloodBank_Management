<?php

namespace Tests\Unit;

use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    public function test_register()
    {
        $response=$this->call('post','/register',[
            'name' => 'user',
            'email' => 'user@gmail.com',
            'type' => '',
            'blood_group' => 'A+',
            'password' => '12345678',
                ]);

        $response->assertStatus($response->status(),200);
    }
    public function test_showLoginForm()
    {
    $response=$this->get('/register/{type}');
    $response->assertStatus($response->status(),200);

    }
}
