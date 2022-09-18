<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaporanBarangTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_laporan_barang()
    {
        $response = $this->get('/laporan/barang');

        $response->assertStatus(302);
    }
}
