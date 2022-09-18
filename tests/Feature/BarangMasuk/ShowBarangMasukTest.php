<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowBarangMasukTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_barang_masuk()
    {
        $response = $this->get('/BarangMasuk/$kode');

        $response->assertStatus(302);
    }
}
