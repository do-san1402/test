<?php

use Illuminate\Database\Seeder;
use App\CustemerModel;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CustemerModel::class, 30) -> create();
    }
}
