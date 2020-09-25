<?php

use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert([
           'name'=>'form 1'
        ]);
        DB::table('forms')->insert([
            'name'=>'form 2'
         ]);  DB::table('forms')->insert([
            'name'=>'form 3 sci'
         ]);  DB::table('forms')->insert([
            'name'=>'form 3 art'
         ]);  DB::table('forms')->insert([
            'name'=>'form 3 comm'
         ]);  DB::table('forms')->insert([
            'name'=>'form 4 sci'
         ]);  DB::table('forms')->insert([
            'name'=>'form 4 art'
         ]);  DB::table('forms')->insert([
            'name'=>'form 4 comm'
         ]);
         DB::table('forms')->insert([
            'name'=>'form L6 sci'
         ]);
         DB::table('forms')->insert([
            'name'=>'form L6 art'
         ]);
         DB::table('forms')->insert([
            'name'=>'form L6 comm'
         ]);  DB::table('forms')->insert([
            'name'=>'form U6 sci'
         ]);  DB::table('forms')->insert([
            'name'=>'form U6 art'
         ]);  DB::table('forms')->insert([
            'name'=>'form U6 comm'
         ]);

    }
}
