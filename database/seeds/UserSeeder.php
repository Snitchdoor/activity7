<?php
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {
    public function run() {
        User::create(['username'=>'Admon', 'email'=>'admon@robotics.com', 'password'=>bcrypt('Adm@2022'), 'role'=>'Administrative']);
        User::create(['username'=>'Tecmilenio', 'email'=>'tecmilenio@robotics.com', 'password'=>bcrypt('Adm@2022'), 'role'=>'Teacher']);
        User::create(['username'=>'Student', 'email'=>'student@robotics.com', 'password'=>bcrypt('Adm@2022'), 'role'=>'Student']);
    }
}
