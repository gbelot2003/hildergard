<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grades')->delete();
        
        \DB::table('grades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'teacher_id' => 8,
                'year' => '2021',
                'name' => 'Primer Grado',
                'created_at' => '2021-08-02 16:14:03',
                'updated_at' => '2021-08-02 16:14:03',
            ),
            1 => 
            array (
                'id' => 2,
                'teacher_id' => 7,
                'year' => '2021',
                'name' => 'Segundo Grado',
                'created_at' => '2021-08-02 16:14:14',
                'updated_at' => '2021-08-02 16:15:01',
            ),
            2 => 
            array (
                'id' => 3,
                'teacher_id' => 6,
                'year' => '2021',
                'name' => 'Tercer Grado',
                'created_at' => '2021-08-02 16:14:34',
                'updated_at' => '2021-08-02 16:15:07',
            ),
            3 => 
            array (
                'id' => 4,
                'teacher_id' => 5,
                'year' => '2021',
                'name' => 'Cuarto Grado',
                'created_at' => '2021-08-02 16:15:26',
                'updated_at' => '2021-08-02 16:15:38',
            ),
        ));
        
        
    }
}