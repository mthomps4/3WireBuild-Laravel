<?php
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $password = bcrypt('');
      $name = "";
      $email = "";
      
      DB::table('users')->insert(['name'=>$name, 'email'=> $email, 'password'=>$password]);
    }
  }
