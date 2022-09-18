<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaporanBarangMasukTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_laporan_barang_masuk()
    {
        $response = $this->get('/laporan/BarangMasuk');

        $response->assertStatus(302);
    }
}
