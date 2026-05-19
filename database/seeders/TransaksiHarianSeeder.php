<?php

namespace Database\Seeders;

use App\Models\TransaksiHarian;
use Illuminate\Database\Seeder;

class TransaksiHarianSeeder extends Seeder
{
    public function run(): void
    {
        TransaksiHarian::factory(15)->create();
    }
}