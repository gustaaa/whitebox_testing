<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowBarangKeluarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_barang_keluar()
    {
        $response = $this->get('/BarangKeluar/$kode');

        $response->assertStatus(302);
    }
}
