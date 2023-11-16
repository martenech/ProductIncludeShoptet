<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

use App\Models\Product;

class ImportProducts implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $product;
    protected $eshop_id;
    protected $tenant_id;
    /**
     * Create a new job instance.
     */
    public function __construct($product, $eshop_id, $tenant_id)
    {
        $this->product = $product;
        $this->eshop_id = $eshop_id;
        $this->tenant_id = $tenant_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
            Product::createProduct($this->product, $this->eshop_id, $this->tenant_id);
    }
}
