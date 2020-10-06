<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'form_name'=>'form 1',
            'name'=>'dummy file',
            'subject'=>'dummy subject',
            'title'=>'dummy Title',
         ]);
         DB::table('posts')->insert([
             'form_name'=>'form 2',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form 3 sci',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form 3 art',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form 3 comm',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form 4 sci',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form 4 art',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form 4 comm',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);
          DB::table('posts')->insert([
             'form_name'=>'form L6 sci',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);
          DB::table('posts')->insert([
             'form_name'=>'form L6 art',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);
          DB::table('posts')->insert([
             'form_name'=>'form L6 comm',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form U6 sci',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form U6 art',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);  DB::table('posts')->insert([
             'form_name'=>'form U6 comm',
             'name'=>'dummy file',
             'subject'=>'dummy subject',
             'title'=>'dummy Title',
          ]);
    }
}
