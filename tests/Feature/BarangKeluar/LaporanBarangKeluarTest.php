<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaporanBarangKeluarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_laporan_barang_keluar()
    {
        $response = $this->get('/laporan/BarangKeluar');

        $response->assertStatus(302);
    }
}
