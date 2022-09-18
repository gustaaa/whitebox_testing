<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexBarangKeluarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_index_barang_keluar()
    {
        $response = $this->get('/BarangKeluar');

        $response->assertStatus(302);
    }
}
