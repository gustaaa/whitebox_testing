<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditBarangMasukTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_barang_masuk()
    {
        $response = $this->get('/BarangMasuk/$kode/edit');

        $response->assertStatus(302);
    }
}
