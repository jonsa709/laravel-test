<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->name = Str::random(15);
            $user->email = Str::random(7)."@email.com";
            $user->password = Hash::make('Password#123');
            $user->address = Str::random(10);
            $user->phone = '123123123';
            $user->save();
        }
    }
}
