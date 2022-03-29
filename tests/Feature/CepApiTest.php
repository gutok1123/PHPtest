<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class CepApiTest extends TestCase
{
   /** @test */
     
   public function testReturnParamtersApi()
   {
       $response = $this->call('POST', '/', array(
           '_token' => csrf_token(),
           'cep' => "49052-360"
       ));

       $this->assertEquals(200, $response->getStatusCode());
    }
       
}
