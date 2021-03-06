<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User;
        $u->name = "Leo";
        $u->email = "vic@yahoo.com";
        $u->email_verified_at = now();
        $u->password = '2';
        $u->remember_token =  Str::random(10);
        $u->save();

        $users = User::factory()->count(5)->create();
    }
}
