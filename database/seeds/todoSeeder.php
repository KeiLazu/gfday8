<?php

use Illuminate\Database\Seeder;
use App\todolist;

class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todolisting = new todolist();
        $todolisting->title = 'testing title';
        $todolisting->container = 'testing container';
        $todolisting->status = '0';
        $todolisting->save();
    }
}
