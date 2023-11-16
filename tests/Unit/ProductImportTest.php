<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Queue;

use App\Jobs\ImportProducts;
use App\Models\Product;

class ProductImportTest extends TestCase
{
    use RefreshDatabase;

    public function test_import_products_with_queue():void {
       Queue::fake();
       ImportProducts::dispatch(Product::factory()->create(), 1, 1);
       Queue::assertPushed(ImportProducts::class);
    }

    public function test_queue_ended_with_error():void {

    }

    public function test_import_products_manually():void {

    }

    public function test_other_tenant_cannot_run_import_products_manually():void {

    }




}
