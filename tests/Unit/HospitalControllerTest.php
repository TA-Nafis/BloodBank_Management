<?php

namespace Tests\Unit;

use Tests\TestCase;

class HospitalControllerTest extends TestCase
{
    public function test_AddBlood()
    {
        $response=$this->call('post','/hospital/add-blood',[
           'unit'=>'2'
                ]);

        $response->assertStatus($response->status(),200);
    }
    public function test_showBloodRequest()
    {
    $response=$this->get('/hospital/blood-requests');
    $response->assertStatus($response->status(),200);

    }
    public function test_handleBloodRequest()
    {
        $response=$this->call('post','/hospital/handle-blood-request',[
            'status' => 'available',
            'request_id' => '1',
                ]);

        $response->assertStatus($response->status(),200);
    }
    public function test_showAvailableBlood()
    {
    $response=$this->get('/hospital/available-blood');
    $response->assertStatus($response->status(),200);

    }
}
