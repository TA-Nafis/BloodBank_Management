<?php

namespace Tests\Unit;

use Tests\TestCase;

class ConsumerControllerTest extends TestCase
{
    public function test_hospitalIndex()
    {
    $response=$this->get('/consumer/hospitals');
    $response->assertStatus($response->status(),200);

    }
    public function test_showHospital()
    {
    $response=$this->get('/consumer/hospital/{hospital}');
    $response->assertStatus($response->status(),200);

    }
    public function test_sendRequest()
    {
        $response=$this->call('post','/consumer/send-request/{hospital}',[
            'consumer_id' => '1',
                    'hospital_id' =>'2',
                    'blood_group' =>'A+',
                    'unit' => '2'
                ]);

        $response->assertStatus($response->status(),200);
    }
}
