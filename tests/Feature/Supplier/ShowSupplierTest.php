<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowSupplierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_supplier()
    {
        $response = $this->get('/supplier/$kode');

        $response->assertStatus(302);
    }
}
