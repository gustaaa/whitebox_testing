<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditBarangTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_barang()
    {
        $response = $this->get('/barang/create');

        $response->assertStatus(302);
    }
}
