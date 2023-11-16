<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Queue;

use App\Jobs\ImportProducts;
use App\Models\Product;

use Tests\TestCase;


class ProductImportTest extends TestCase
{
    use RefreshDatabase;

}
