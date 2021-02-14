<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
        [
            ['name' => 'Breaking News'],
            ['name' => 'Local'],
            ['name' => 'Positive'],
            ['name' => 'Science'],
            ['name' => 'Health'],
            ['name' => 'Sport'],
            ['name' => 'Finance'],
            ['name' => 'Lifestyle'],
            ['name' => 'Politics'],
            ['name' => 'Crime'],
            ['name' => 'Celebrity'],
        ]);
    }
}
