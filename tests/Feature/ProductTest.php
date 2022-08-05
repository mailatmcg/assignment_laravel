<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker;

class ProductTest extends TestCase
{


    public function setUp():void {
        parent::setUp(); // performs set up
         
        $this->faker = Faker\Factory::create('en_EN');

    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Index test
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }

    /**
     * Create test
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->get('/products/create');

        $response->assertStatus(200);
    }

}
