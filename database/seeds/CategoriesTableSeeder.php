<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            ['name' => '前端', 'alias' => 'frontend', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '后端', 'alias' => 'backend', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '安卓', 'alias' => 'android', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iOS', 'alias' => 'ios', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '数据库', 'alias' => 'database', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
