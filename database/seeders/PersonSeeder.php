<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => "Bob",
            'occupation' => "Teacher",
            'job_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis lacus libero, eu vestibulum libero faucibus id. Pellentesque varius mauris eu aliquam consectetur. Sed sed magna viverra, fringilla eros non, vehicula leo. Nullam posuere, purus vitae dignissim rhoncus, lorem odio suscipit est, vel laoreet ipsum nisi non augue.",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('people')->insert([
            'name' => "Henk",
            'occupation' => "Builder",
            'job_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed lorem et nulla dictum tempus. Donec dui diam, commodo id odio ut, porta feugiat nunc. Morbi id enim eget magna fringilla sollicitudin nec eget est. Mauris neque tellus, aliquam et ultrices eget, rutrum ut lorem. Nullam sed euismod diam.",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('people')->insert([
            'name' => "Frank",
            'occupation' => "Student",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
