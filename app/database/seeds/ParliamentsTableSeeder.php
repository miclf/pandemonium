<?php

class ParliamentsTableSeeder extends Seeder
{
    /**
     * Seed the ‘parliaments’ table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parliaments')->truncate();

        $parliaments = [
            ['id' => 'K', 'name' => 'Chamber of Representatives'],
            ['id' => 'S', 'name' => 'Senate'],
        ];

        DB::table('parliaments')->insert($parliaments);
    }
}
