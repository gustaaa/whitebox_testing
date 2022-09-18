<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaporanSupplierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_laporan_supplier()
    {
        $response = $this->get('/laporan/supplier');

        $response->assertStatus(302);
    }
}
