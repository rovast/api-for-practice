<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tags')->insert([
            ['name' => 'vue', 'alias' => 'vue', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'angular', 'alias' => 'angular', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'react', 'alias' => 'react', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'javascript', 'alias' => 'javascript', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'mongodb', 'alias' => 'mongodb', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
