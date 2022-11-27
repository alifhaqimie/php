<?php
 
namespace Tests\Feature;
 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
 
class HttpTest extends TestCase
{
   /**
    * A basic test example.
    *
    * @return void
    */
   public function test_a_basic_request()
   {
       $response = $this->get('/');
 
       $response->assertStatus(200);
   }
}
