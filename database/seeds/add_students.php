<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class add_students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	[
        		'fname' => 'Adesh',
        		'lname' => 'Maraj',
        		'id_number' => 816011251,
        		'gender' => 'Male',
        		'email' => 'adesh.maraj@gmail.com',
        		'faculty' => "Science and Technology",
        		'department' => "Computing and Information Technology",
        		'student_status' => "Full Time",
        		'current_year' => 5,
                'password' => Hash::make('password'),
        		'created_at' => date('Y-m-d H:i:s')
        	],
        	
        ]);
    }
}
