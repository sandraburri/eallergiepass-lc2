<?php

use Illuminate\Database\Seeder;

class AffectedItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('affectedItems')->insert([
            'affected_id' => 1,
            'type' => 'Haselnuss',
            'symptoms' => 'Atemnot',
            'medication' => ''
        ]);

        DB::table('affectedItems')->insert([
            'affected_id' => 2,
            'type' => 'Penizillin',
            'symptoms' => 'Hautreizungen',
            'medication' => 'Kortison'
        ]);
    }
}
