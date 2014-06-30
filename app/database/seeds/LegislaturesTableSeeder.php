<?php

class LegislaturesTableSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        $this->seedLegislatures();
        $this->seedSessions();
    }

    /**
     * Seed the ‘legislatures’ table.
     *
     * @return void
     */
    public function seedLegislatures()
    {
        DB::table('legislatures')->delete();

        $legislatures = [
            ['parliament_id' => 1, 'number' => 52],
            ['parliament_id' => 1, 'number' => 53],
            ['parliament_id' => 2, 'number' => 4],
            ['parliament_id' => 2, 'number' => 5],
        ];

        DB::table('legislatures')->insert($legislatures);
    }

    /**
     * Seed the ‘sessions’ table.
     *
     * @return void
     */
    public function seedSessions()
    {
        DB::table('sessions')->delete();

        $sessions = [
            [
                'legislature_id' => 1,
                'name'           => 'extraordinary session',
                'extraordinary'  => 1,
                'started_at'     => '2007-06-28',
                'ended_at'       => '2007-10-08',
            ],
            [
                'legislature_id' => 1,
                'name'           => '2nd session',
                'extraordinary'  => 0,
                'started_at'     => '2007-10-09',
                'ended_at'       => '2008-10-13',
            ],
            [
                'legislature_id' => 1,
                'name'           => '3rd session',
                'extraordinary'  => 0,
                'started_at'     => '2008-10-14',
                'ended_at'       => '2009-10-12',
            ],
            [
                'legislature_id' => 1,
                'name'           => '4th session',
                'extraordinary'  => 0,
                'started_at'     => '2009-10-13',
                'ended_at'       => '2010-05-07',
            ],
            [
                'legislature_id' => 2,
                'name'           => 'extraordinary session',
                'extraordinary'  => 1,
                'started_at'     => '2010-07-06',
                'ended_at'       => '2010-10-11',
            ],
            [
                'legislature_id' => 2,
                'name'           => '2nd session',
                'extraordinary'  => 0,
                'started_at'     => '2010-10-12',
                'ended_at'       => '2011-10-10',
            ],
            [
                'legislature_id' => 2,
                'name'           => '3rd session',
                'extraordinary'  => 0,
                'started_at'     => '2011-10-11',
                'ended_at'       => '2012-10-08',
            ],
            [
                'legislature_id' => 2,
                'name'           => '4th session',
                'extraordinary'  => 0,
                'started_at'     => '2012-10-09',
                'ended_at'       => '2013-10-07',
            ],
            [
                'legislature_id' => 2,
                'name'           => '5th session',
                'extraordinary'  => 0,
                'started_at'     => '2013-10-08',
                'ended_at'       => '2014-04-28',
            ],
        ];

        DB::table('sessions')->insert($sessions);
    }
}
