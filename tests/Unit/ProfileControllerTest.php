<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProfileControllerTest extends TestCase
{
    public function test_updateConsumer()
    {
        $response=$this->call('post','/consumer/profile/update',[
            'name' => 'koushik',
            'description' => 'abc',
            'address' => '118 badda dhaka'
                ]);

        $response->assertStatus($response->status(),200);
    }
    public function test_showConsumer()
    {
    $response=$this->get('/consumer/profile');
    $response->assertStatus($response->status(),200);

    }
    public function test_updatehospital()
    {
        $response=$this->call('post','/hospital/profile/update',[
            'name' => 'square',
            'description' => 'abc',
            'address' => 'kolabagan'
                ]);

        $response->assertStatus($response->status(),200);
    }
    public function test_showHospital()
    {
    $response=$this->get('/hospital/profile');
    $response->assertStatus($response->status(),200);

    }
}
