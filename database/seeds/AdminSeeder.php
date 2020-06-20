<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'freepaidcouse',
            'email'=>'mail@freepaidcourse.info',
            'password'=>'$2y$10$34anhLgnEs/YBvPKl8JD8.I/xw0uN6GcVB4nf2qYhaFW7gIXPwT0C',
        ]);
    }
}
