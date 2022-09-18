<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateBarangKeluarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_barang_keluar()
    {
        $response = $this->get('/BarangKeluar/create');

        $response->assertStatus(302);
    }
}
