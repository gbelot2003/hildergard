<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gerardo Belot',
                'slug' => 'gerardo-belot',
                'email' => 'gbelot2003@hotmail.com',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'YMZlrBYwye',
                'created_at' => '2021-06-03 18:39:11',
                'updated_at' => '2021-06-03 18:39:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Elmira Mosciski',
                'slug' => 'slug-number-2',
                'email' => 'eliza23@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'UQksVejyIf',
                'created_at' => '2021-06-03 18:39:11',
                'updated_at' => '2021-06-03 18:39:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Khalid Swift',
                'slug' => 'slug-number-3',
                'email' => 'carey.effertz@example.net',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => '8XBsEY2vo9',
                'created_at' => '2021-06-03 18:39:11',
                'updated_at' => '2021-06-03 18:39:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Alycia Yundt',
                'slug' => 'slug-number-4',
                'email' => 'hlemke@example.com',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'PKDss4Ory0',
                'created_at' => '2021-06-03 18:39:11',
                'updated_at' => '2021-06-03 18:39:11',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Lisette Kris',
                'slug' => 'slug-number-5',
                'email' => 'berge.adrain@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => '93AK396Sxa',
                'created_at' => '2021-06-03 18:39:11',
                'updated_at' => '2021-06-03 18:39:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Leonie Ebert',
                'slug' => 'slug-number-6',
                'email' => 'amely72@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'NV4pZX3304',
                'created_at' => '2021-06-03 18:39:11',
                'updated_at' => '2021-06-03 18:39:11',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Mia Stokes Jr.',
                'slug' => 'slug-number-7',
                'email' => 'maymie59@example.com',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'bxELdOfKrZ',
                'created_at' => '2021-06-03 18:39:11',
                'updated_at' => '2021-06-03 18:39:11',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Ms. Judy Cassin',
                'slug' => 'slug-number-8',
                'email' => 'leonardo.hahn@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'KlfLgzO0uh',
                'created_at' => '2021-06-03 18:39:12',
                'updated_at' => '2021-06-03 18:39:12',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Olen Fahey',
                'slug' => 'slug-number-9',
                'email' => 'lester83@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'd1weGKlVdU',
                'created_at' => '2021-06-03 18:39:12',
                'updated_at' => '2021-06-03 18:39:12',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Terrence Koch',
                'slug' => 'slug-number-10',
                'email' => 'aupton@example.com',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'K5p5LHstXN',
                'created_at' => '2021-06-03 18:39:12',
                'updated_at' => '2021-06-03 18:39:12',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Jermaine Treutel',
                'slug' => 'slug-number-11',
                'email' => 'esta20@example.net',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'MiKGJhzRM3',
                'created_at' => '2021-06-03 18:39:12',
                'updated_at' => '2021-06-03 18:39:12',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Axel Wolff',
                'slug' => 'slug-number-12',
                'email' => 'abbey11@example.net',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => '3GTuiEqGZw',
                'created_at' => '2021-06-03 18:39:12',
                'updated_at' => '2021-06-03 18:39:12',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Dorothy Medhurst',
                'slug' => 'slug-number-13',
                'email' => 'lyla.mcglynn@example.net',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'wxzTm7pIxU',
                'created_at' => '2021-06-03 18:39:12',
                'updated_at' => '2021-06-03 18:39:12',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Blaise Hackett',
                'slug' => 'slug-number-14',
                'email' => 'stephen82@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'h7SS6ZFCOt',
                'created_at' => '2021-06-03 18:39:13',
                'updated_at' => '2021-06-03 18:39:13',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Linnie Beatty',
                'slug' => 'slug-number-15',
                'email' => 'elwin.jacobi@example.net',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'JN1rKcm3nB',
                'created_at' => '2021-06-03 18:39:13',
                'updated_at' => '2021-06-03 18:39:13',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Yadira Orn',
                'slug' => 'slug-number-16',
                'email' => 'pierre.kunde@example.com',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'DIAhF5P8fb',
                'created_at' => '2021-06-03 18:39:13',
                'updated_at' => '2021-06-03 18:39:13',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Jessie Bergnaum',
                'slug' => 'slug-number-17',
                'email' => 'sschroeder@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'KlPrZdisI0',
                'created_at' => '2021-06-03 18:39:13',
                'updated_at' => '2021-06-03 18:39:13',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Doris Hills',
                'slug' => 'slug-number-18',
                'email' => 'ashley20@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'tx5yISsGcP',
                'created_at' => '2021-06-03 18:39:13',
                'updated_at' => '2021-06-03 18:39:13',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Otha Leuschke',
                'slug' => 'slug-number-19',
                'email' => 'darlene.hirthe@example.net',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'CHNKgWzukq',
                'created_at' => '2021-06-03 18:39:13',
                'updated_at' => '2021-06-03 18:39:13',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Lou Armstrong Sr.',
                'slug' => 'slug-number-20',
                'email' => 'pkessler@example.org',
                'email_verified_at' => '2021-06-03 18:39:11',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'remember_token' => 'C4WNgCvkn6',
                'created_at' => '2021-06-03 18:39:13',
                'updated_at' => '2021-06-03 18:39:13',
            ),
        ));
        
        $user = User::find(1);
        $user->assignRole('administrador');

        $user = User::find(2);
        $user->assignRole('editor');

        $user = User::find(3);
        $user->assignRole('maestro');

        $user = User::find(4);
        $user->assignRole('padre');

        $user = User::find(5);
        $user->assignRole('alumno');

        $user = User::find(6);
        $user->assignRole('alumno');

        $user = User::find(7);
        $user->assignRole('alumno');

        $user = User::find(8);
        $user->assignRole('alumno');

        $user = User::find(9);
        $user->assignRole('alumno');

        $user = User::find(10);
        $user->assignRole('alumno');

        $user = User::find(11);
        $user->assignRole('alumno');

        $user = User::find(12);
        $user->assignRole('alumno');

        $user = User::find(13);
        $user->assignRole('alumno');

        $user = User::find(14);
        $user->assignRole('alumno');

        $user = User::find(15);
        $user->assignRole('alumno');

        $user = User::find(16);
        $user->assignRole('alumno');

        $user = User::find(17);
        $user->assignRole('alumno');

        $user = User::find(18);
        $user->assignRole('alumno');

        $user = User::find(19);
        $user->assignRole('alumno');

        $user = User::find(20);
        $user->assignRole('alumno');
    }
}