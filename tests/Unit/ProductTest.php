<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_product():void {
        Product::factory()->count(3)->create();
        $this->assertDatabaseCount('products', 3);
    }

    public function test_user_can_access_product():void {

    }

    public function test_user_can_edit_product():void {

    }

    public function test_user_can_delete_product():void {

    }


}
