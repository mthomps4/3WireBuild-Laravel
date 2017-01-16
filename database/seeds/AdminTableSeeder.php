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
      $password = bcrypt('password');
      DB::table('users')->insert(['name'=>'Dummy Admin', 'email'=> 'Admin@dummy.com', 'password'=>$password]);
    }
  }
