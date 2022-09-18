<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditSupplierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_supplier()
    {
        $response = $this->get('/supplier/$kode/edit');

        $response->assertStatus(302);
    }
}
