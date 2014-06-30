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
        DB::table('parliaments')->delete();

        $parliaments = array(
            ['abbr' => 'K', 'name' => 'Chamber of Representatives'],
            ['abbr' => 'S', 'name' => 'Senate'],
        );

        DB::table('parliaments')->insert($parliaments);
    }
}
