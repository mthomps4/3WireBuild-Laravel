<?php
use Illuminate\Database\Seeder;

class blogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $DateTime = date('Y-m-d H:i:s');
        // $this->call(UsersTableSeeder::class);
        DB::table('blogposts')->insert(['title' => 'My First Post', 'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'imageURL'=>'https://unsplash.it/300/?random','author'=>'postSeeder', 'created_at' => $DateTime, 'updated_at' => $DateTime]);
        DB::table('blogposts')->insert(['title' => 'My Second Post', 'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'imageURL'=>'https://unsplash.it/300/?random','author'=>'postSeeder', 'created_at' => $DateTime, 'updated_at' => $DateTime]);
        DB::table('blogposts')->insert(['title' => 'My Third Post', 'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'imageURL'=>'https://unsplash.it/300/?random','author'=>'postSeeder', 'created_at' => $DateTime, 'updated_at' => $DateTime]);

        //Tags & Cats & Comments
        DB::table('tags')->insert(['name'=>'Tag1', 'tagCount'=>3]);
        DB::table('tags')->insert(['name'=>'Tag2', 'tagCount'=>3]);

        DB::table('categories')->insert(['name'=>'Cat1', 'categoryCount'=>3]);
        DB::table('categories')->insert(['name'=>'Cat2', 'categoryCount'=>3]);

        DB::table('comments')->insert(['user_name'=>'Joe', 'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'blogpost_id'=> 1, 'created_at'=>$DateTime]);
        DB::table('comments')->insert(['user_name'=>'Joe', 'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'blogpost_id'=> 2, 'created_at'=>$DateTime]);
        DB::table('comments')->insert(['user_name'=>'Joe', 'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'blogpost_id'=> 3, 'created_at'=>$DateTime]);



        DB::table('blogpost_tag')->insert(['blogpost_id'=>1, 'tag_id'=>1, 'created_at' => $DateTime, 'updated_at' => $DateTime]);
        DB::table('blogpost_category')->insert(['blogpost_id'=>1, 'category_id'=>1, 'created_at' => $DateTime, 'updated_at' => $DateTime]);

        DB::table('blogpost_tag')->insert(['blogpost_id'=>2, 'tag_id'=>1, 'created_at' => $DateTime, 'updated_at' => $DateTime]);
        DB::table('blogpost_category')->insert(['blogpost_id'=>2, 'category_id'=>1, 'created_at' => $DateTime, 'updated_at' => $DateTime]);

        DB::table('blogpost_tag')->insert(['blogpost_id'=>3, 'tag_id'=>1, 'created_at' => $DateTime, 'updated_at' => $DateTime]);
        DB::table('blogpost_category')->insert(['blogpost_id'=>3, 'category_id'=>1, 'created_at' => $DateTime, 'updated_at' => $DateTime]);



        DB::table('blogpost_tag')->insert(['blogpost_id'=>1, 'tag_id'=>2, 'created_at' => $DateTime, 'updated_at' => $DateTime]);
        DB::table('blogpost_category')->insert(['blogpost_id'=>1, 'category_id'=>2, 'created_at' => $DateTime, 'updated_at' => $DateTime]);

        DB::table('blogpost_tag')->insert(['blogpost_id'=>2, 'tag_id'=>2, 'created_at' => $DateTime, 'updated_at' => $DateTime]);
        DB::table('blogpost_category')->insert(['blogpost_id'=>2, 'category_id'=>2, 'created_at' => $DateTime, 'updated_at' => $DateTime]);

        DB::table('blogpost_tag')->insert(['blogpost_id'=>3, 'tag_id'=>2, 'created_at' => $DateTime, 'updated_at' => $DateTime]);
        DB::table('blogpost_category')->insert(['blogpost_id'=>3, 'category_id'=>2, 'created_at' => $DateTime, 'updated_at' => $DateTime]);





    }
}
