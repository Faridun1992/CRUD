<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = Department::all();
        Staff::factory(20)->create()->each(
            function($staff) use($departments){
                $staff->departments()->attach($departments->random(rand(1, 3)));
            }
        );
    }
}
