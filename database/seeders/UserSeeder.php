<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user = User::create([
            'name' => 'adm',
            'email' => 'adm@a',
            'matricula' => 'aaaaaaaaa',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),// password
            'remember_token' => Str::random(10),
        ]);

        $user->permissao = true;
        $user->save();
    }
}
