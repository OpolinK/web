<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doc;

class DocSeeder extends Seeder
{
    public function run(): void
    {
        Doc::factory()->count(20)->create();
    }
}
