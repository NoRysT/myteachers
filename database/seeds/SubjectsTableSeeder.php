<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            ['name' => 'C/C+'],
            ['name' => 'Python'],
            ['name' => 'JavaScript'],
            ['name' => 'SQL'],
            ['name' => 'C#'],
            ['name' => 'Java'],
            ['name' => 'HTML/CSS'],
            ['name' => 'PHP'],
            ['name' => 'VB'],
        ]);  
      }
}