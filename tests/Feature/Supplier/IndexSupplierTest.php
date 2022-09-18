<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexSupplierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_index_supplier()
    {
        $response = $this->get('/supplier');

        $response->assertStatus(302);
    }
}
