<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\Store::all();

        foreach($stores as $store)
        {
            $store->products()->save(factory(\App\Product::class)->make());

        }
    }
}
