<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    public function test_showLoginForm()
    {
    $response=$this->get('/login{type}');
    $response->assertStatus($response->status(),200);

    }
    public function test_login()
    {
        $response=$this->call('post','/login',[
                'email'=> 'koushik@gmail.com',
                'password'=>'12345678'
                ]);

        $response->assertStatus($response->status(),200);
    }
    public function test_store()
    {
        
            $response=$this->post('/logout');
            $response->assertStatus(302);
                
    }

}
