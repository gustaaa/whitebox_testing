<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateSupplierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_supplier()
    {
        $response = $this->get('/supplier/create');

        $response->assertStatus(302);
    }
}
