<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Eshop;

class EshopTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_eshop():void {
        Eshop::factory()->count(3)->create();
        $this->assertDatabaseCount('eshops', 3);
    }

    public function test_delete_eshop():void {
        $factory = Eshop::factory()->create();
        $eshop = Eshop::find($factory->id);
        $eshop->delete();
        $this->assertDatabaseCount('eshops',0);
    }

    public function test_eshop_cannot_have_global_duplicity():void {

    }

    public function test_user_can_access_eshop():void {

    }

    public function test_other_tenant_cannot_access_eshop():void {

    }

    public function test_other_tenant_cannot_edit_eshop():void {

    }

    public function test_other_tenant_cannot_delete_eshop():void {

    }

    public function test_unlogged_user_cannot_access_eshop():void {

    }
}
