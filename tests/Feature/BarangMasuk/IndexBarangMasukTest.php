<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexBarangMasukTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_index_barang_masuk()
    {
        $response = $this->get('/BarangMasuk');

        $response->assertStatus(302);
    }
}
