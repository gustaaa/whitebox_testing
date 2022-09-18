<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditBarangKeluarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_barang_keluar()
    {
        $response = $this->get('/BarangKeluar/$kode/edit');

        $response->assertStatus(302);
    }
}
